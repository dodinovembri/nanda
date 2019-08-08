<?php  
	include 'module/koneksi.php';

	$id_product = $_POST['id_product'];
	$id_bahan_baku = $_POST['id_bahan_baku'];
	$jumlah = $_POST['jumlah'];
	$id_supplier = $_POST['id_supplier'];
	
	$q = mysqli_query($koneksi, "INSERT INTO komposisi (`id_product`, `komposisi`, `jumlah`, `satuan`, `id_supplier`) VALUES ('$id_product', '$id_bahan_baku', '$jumlah', '', '$id_supplier')");
	if (!$q) {
		die("Penyimpanan gagal");
	}
	echo "<script>
			window.location.href = '?module=data_komposisi';
		</script>";
?>
