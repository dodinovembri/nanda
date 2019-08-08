<?php  
	include 'module/koneksi.php';
	$id_trx_bm = $_GET['id_trx_bm'];
	$id_pesanan = $_GET['id_pesanan'];
	$q = mysqli_query($koneksi, "UPDATE bahan_baku_masuk SET status='S' WHERE id_pesanan='$id_pesanan'");
	if (!$q) {
		die("Perubahan Gagal");
	}
	
	echo "<script>window.location.href='?module=update_status_detail&id_trx_bm=".$id_trx_bm."'</script>";
	
	// echo "<script>window.location.href='?module=bahan_baku_masuk'</script>";
?>