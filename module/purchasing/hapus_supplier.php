<?php  
	include 'module/koneksi.php';

	$id_supplier = $_GET['id_supplier'];
	// echo $id_supplier;
	$q = mysqli_query($koneksi, "DELETE FROM supplier WHERE id_supplier='$id_supplier'");
	if (!$q) {
		echo "<script>
			window.alert('Data Memiliki Relasi');
			window.location.href = '?module=suplier';
		</script>";
	}
	echo "<script>
			window.location.href = '?module=suplier';
		</script>";
?>