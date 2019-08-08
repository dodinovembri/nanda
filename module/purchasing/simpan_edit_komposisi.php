<?php  
	include 'module/koneksi.php';
    
    $id_komposisi = $_POST['id_komposisi'];
	$id_product = $_POST['id_product'];
	$id_bahan_baku = $_POST['id_bahan_baku'];
	$jumlah = $_POST['jumlah'];
	$id_supplier = $_POST['id_supplier'];
	
	$q = mysqli_query($koneksi, "UPDATE komposisi SET `id_product`='$id_product', `komposisi`='$id_bahan_baku', `jumlah`='$jumlah', `satuan`='', `id_supplier`='$id_supplier' WHERE id_komposisi='$id_komposisi'");
	if (!$q) {
		die("Penyimpanan gagal");
	}
	echo "<script>
			window.location.href = '?module=data_komposisi';
		</script>";
?>
