<?php  
	include 'module/koneksi.php';

	$id_bahan_baku = $_GET['id_bahan_baku'];
	$q = mysqli_query($koneksi, "DELETE FROM bahan_baku WHERE id_bahan_baku='$id_bahan_baku'");
	if (!$q) {
		die("Penghapusan gagal");
	}
	echo "<script>
			window.location.href = '?module=tampil_bahan_baku';
		</script>";
?>