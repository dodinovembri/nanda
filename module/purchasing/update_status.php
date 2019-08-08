<?php  
	include 'module/koneksi.php';
	$id_pesanan = $_GET['id_pesanan'];
	$q = mysqli_query($koneksi, "UPDATE bahan_baku_masuk SET status='SP' WHERE id_pesanan='$id_pesanan'");
	if (!$q) {
		die("Perubahan Gagal");
	}
	echo "<script>window.location.href='?module=tampil_pesanan'</script>";
?>