<?php  
	include 'module/koneksi.php';

	$id_stock = $_GET['id_stock'];
	$q = mysqli_query($koneksi, "DELETE FROM stock_bahan_baku WHERE id_stock='$id_stock'");
	if (!$q) {
		die("Penghapusan gagal");
	}
	echo "<script>
			window.location.href = '?module=stok_bahan_baku';
		</script>";
?>