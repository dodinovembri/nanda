<?php  
	include 'module/koneksi.php';

	$id_bahan_baku = $_POST['id_bahan_baku'];
	$nama_bahan_baku = $_POST['nama_bahan_baku'];
	$satuan_bahan_baku = $_POST['satuan_bahan_baku'];

	$q = mysqli_query($koneksi, "UPDATE bahan_baku SET `id_bahan_baku`='$id_bahan_baku', `nama_bahan_baku`='$nama_bahan_baku', `satuan_bahan_baku`='$satuan_bahan_baku' WHERE `id_bahan_baku`='$id_bahan_baku'");
	if (!$q) {
		die("Perubahan gagal");
	}
	echo "<script>
			window.location.href = '?module=tampil_bahan_baku';
		</script>";
?>
