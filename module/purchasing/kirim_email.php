
<br><br><br><br><br><br><br><br><br>
<?php  
	include 'module/koneksi.php';
	$id_supplier = $_POST['id_supplier'];
	$id_trx_product_keluar = $_POST['id_trx_product_keluar'];
	
    // echo $id_supplier;
	
	$q = mysqli_query($koneksi, "UPDATE sub_product_keluar SET status='S' WHERE id_trx_product_keluar='$id_trx_product_keluar' AND email='$id_supplier'");
	if (!$q) {
		die("Perubahan Gagal");
	}
	
	$cek = mysqli_query($koneksi, "SELECT * FROM sub_product_keluar WHERE id_trx_product_keluar='$id_trx_product_keluar'");
	while($h = mysqli_fetch_array($cek)){
	    $stat = $h['status'];
	}

	if ($stat == "S"){
	    $update = mysqli_query($koneksi, "UPDATE product_keluar SET status='S' WHERE id_product_keluar='$id_trx_product_keluar'");
	}
	
 
?>

<?php  
	$id_product = $id_trx_product_keluar;
// 	$q = mysqli_query($koneksi, "UPDATE product_keluar SET status='S' WHERE id_product_keluar='$id_product'");
// 	$q2 = mysqli_query($koneksi, "UPDATE sub_product_keluar SET status='S' WHERE id_trx_product_keluar='$id_product'");
// 	if (!$q) {
// 		die("Perubahan Gagal");
// 	}	
	$query = mysqli_query($koneksi, "SELECT  sub_product_keluar.jumlah as jml, sub_product_keluar.*, product_keluar.* FROM sub_product_keluar JOIN product_keluar ON sub_product_keluar.id_trx_product_keluar = product_keluar.id_product_keluar WHERE sub_product_keluar.id_trx_product_keluar = '$id_product'");
	while ($r = mysqli_fetch_array($query)) {
		$id_trx_bk = $r['id_trx_product_keluar'];
		$email_supplier = $r['email'];
		$jumlah = $r['jml'];
		$tanggal = $r['tanggal'];
		$komposisi = $r['komposisi'];

		$insert = mysqli_query($koneksi, "INSERT INTO bahan_baku_masuk (`id_trx_bm`, `email_supplier`, `tanggal`, `komposisi`, `jumlah`) VALUES ('$id_trx_bk', '$email_supplier', '$tanggal', '$komposisi', '$jumlah')");

		if (!$insert) {
			die("Gagal");
		}
	}


	echo "<script>window.location.href='?module=tampil_pesanan'</script>";
?>