<?php  
	include 'module/koneksi.php';
	$id_product = $_POST['id_product_keluar'];
	$tanggal = $_POST['tanggal'];
	$lead_time = $_POST['lead_time'];
	$tanggal_pesan = $tanggal;
	$total_hari    = mktime(0,0,0,date("n"),date("j")+$lead_time,date("Y"));
	$tanggal_pesan_kembali       = date("Y-m-d", $total_hari);	

	$periode = $_POST['periode'];		
	$jumlah = $_POST['jumlah'];		

	$insert1 = mysqli_query($koneksi, "INSERT INTO product_keluar (`id_product`, `jumlah`, `tanggal`, `tanggal_pesan_kembali`) VALUES ('$id_product', '$jumlah', '$tanggal', '$tanggal_pesan_kembali')");

    $ambil_id = mysqli_query ($koneksi, "SELECT max(id_product_keluar) AS id FROM product_keluar");
    while($r_a = mysqli_fetch_array($ambil_id)){
        $id_insert = $r_a['id'];
    }
    
	// echo $id_product;
	$q = mysqli_query($koneksi, "SELECT komposisi.*, supplier.*, stock_bahan_baku.jumlah as jml FROM komposisi JOIN supplier ON komposisi.id_supplier = supplier.id_supplier JOIN stock_bahan_baku ON komposisi.komposisi = stock_bahan_baku.id_bahan_baku WHERE komposisi.`id_product`='$id_product'");
	while ($row = mysqli_fetch_assoc($q)) {
		// $id = $row['id_product'];
		$komposisi = $row['komposisi'];	
		$x1 = $jumlah * $row['jumlah'] - $row['jml'];
		if ($x1 >= 0) {
			$update_stok = mysqli_query($koneksi, "UPDATE stock_bahan_baku SET jumlah=0 where id_bahan_baku = '$komposisi'");
		}
		else{
			$x2 = abs($x1);
			$update_stok = mysqli_query($koneksi, "UPDATE stock_bahan_baku SET jumlah='$x2' where id_bahan_baku = '$komposisi'");
		}
		$jumlah_h = $jumlah * $row['jumlah'] - $row['jml'];			
		if ($jumlah_h < 0) {
			$jumlah_h = abs($jumlah_h);
		}
		$id_supplier = $row['id_supplier'];

		$insert2 = mysqli_query($koneksi, "INSERT INTO sub_product_keluar (`id_product_keluar`, `id_trx_product_keluar`, `komposisi`, `jumlah`, `email`, `periode`, `lead_time`, `kebutuhan_bersih`) VALUES ('$id_product', '$id_insert', '$komposisi', '$jumlah_h', '$id_supplier', '$periode', '$lead_time', '$jumlah_h')");
	}	
	
	echo "<script>
			window.location.href = '?module=tampil_pesanan';
		</script>";
?>