<?php  
	include 'module/koneksi.php';

	$id_bahan_baku = $_POST['id_bahan_baku'];
	$jumlah = $_POST['jumlah'];	

	$q = mysqli_query($koneksi, "UPDATE stock_bahan_baku SET  `jumlah`='$jumlah' WHERE `id_bahan_baku`='$id_bahan_baku'");
	if (!$q) {
		die("Perubahan gagal");
	}
	echo "<script>
			window.location.href = '?module=stok_bahan_baku';
		</script>";
?>
