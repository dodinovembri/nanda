<?php  
	include 'module/koneksi.php';
	$id_product = $_POST['id_product_keluar'];
	$tanggal = $_POST['tanggal'];
	$jumlah = $_POST['jumlah'];

	$insert1 = mysqli_query($koneksi, "INSERT INTO product_keluar (`id_product`, `jumlah`, `tanggal`) VALUES ('$id_product', '$jumlah', '$tanggal')");

	// echo $id_product;
	$q = mysqli_query($koneksi, "SELECT komposisi.*, supplier.* FROM komposisi JOIN supplier ON komposisi.id_supplier = supplier.id_supplier WHERE komposisi.`id_product`='$id_product'");
	while ($row = mysqli_fetch_assoc($q)) {
		// $id = $row['id_product'];
		$komposisi = $row['komposisi'];	
		$jumlah_h = $jumlah * $row['jumlah'];		
		$email = $row['email'];

		$insert2 = mysqli_query($koneksi, "INSERT INTO sub_product_keluar (`id_product_keluar`, `komposisi`, `jumlah`, `email`) VALUES ('$id_product', '$komposisi', '$jumlah_h', '$email')");
	}	
	
	echo "<script>
				window.location.href = '?module=tampil_product_keluar';
			</script>";	

	
?>