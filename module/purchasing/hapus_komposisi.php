<?php  
	include 'module/koneksi.php';

	$id_komposisi = $_GET['id_komposisi'];
 	echo $id_komposisi;
	$q = mysqli_query($koneksi, "DELETE FROM komposisi WHERE id_komposisi='$id_komposisi'");
 	if (!$q) {
 		echo "<script>
 			window.alert('Data Memiliki Relasi');
 			window.location.href = '?module=data_komposisi';
 		</script>";
 	}
 	echo "<script>
 			window.location.href = '?module=data_komposisi';
 		</script>";
?>