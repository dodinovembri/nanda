<?php  
	include 'module/koneksi.php';
	$id_product_keluar = $_GET['id_product_keluar'];
	
	$id_sub_product_keluar = $_GET['id_sub_product_keluar'];	
	$q = mysqli_query($koneksi, "UPDATE sub_product_keluar SET status='SC' WHERE id_sub_product_keluar='$id_sub_product_keluar'");
	if (!$q) {
		die("Perubahan Gagal");
	}

	
	echo "<script>window.location.href='?module=lihat_bahan_baku&id_product_keluar=".$id_product_keluar."'</script>";
	// echo "<script>window.location.href='?module=lihat_bahan_baku?id_product_keluar='".$id_sub_product_keluar."'</script>";
?>