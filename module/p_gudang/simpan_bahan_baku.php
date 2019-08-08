<?php  
	include 'module/koneksi.php';

	$id_bahan_baku = $_POST['id_bahan_baku'];
	$nama_bahan_baku = $_POST['nama_bahan_baku'];
	$satuan_bahan_baku = $_POST['satuan_bahan_baku'];

	$c = mysqli_query($koneksi, "SELECT * FROM bahan_baku WHERE id_bahan_baku='$id_bahan_baku'");

	if (mysqli_num_rows($c) > 0) {
		echo "<script>
			window.alert('Data Bahan Baku Sudah Ada!');
			window.location.href = '?module=tambah_bahan_baku';
		</script>";	
	}
	else{
		$q = mysqli_query($koneksi, "INSERT INTO bahan_baku (`id_bahan_baku`, `nama_bahan_baku`, `satuan_bahan_baku`) VALUES ('$id_bahan_baku', '$nama_bahan_baku', '$satuan_bahan_baku')");
		if (!$q) {
			die("Penyimpanan gagal");
		}
		echo "<script>
				window.location.href = '?module=tampil_bahan_baku';
			</script>";
	}
?>
