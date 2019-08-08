<?php  
	include 'module/koneksi.php';

	$id_bahan_baku_masuk = $_POST['id_bahan_baku_masuk'];
	$nama_supplier = $_POST['nama_supplier'];
	$tanggal = $_POST['tanggal'];
	$jumlah = $_POST['jumlah'];

	
	$q = mysqli_query($koneksi, "INSERT INTO bahan_baku_masuk (`id_bahan_baku_masuk`, `nama_supplier`, `tanggal`, `jumlah`) VALUES ('$id_bahan_baku_masuk', '$nama_supplier', '$tanggal', '$jumlah')");
	if (!$q) {
		die("Penyimpanan gagal");
	}
	echo "<script>
			window.location.href = '?module=tampil_pesanan';
		</script>";
?>
