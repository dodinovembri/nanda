<?php  
	include 'module/koneksi.php';
// 	$id_pesanan = $_GET['id_pesanan'];
    $id_trx_bm = $_GET['id_trx_bm'];
    $email = $_GET['email'];
    
    $q = mysqli_query($koneksi, "UPDATE bahan_baku_masuk SET status='S' WHERE id_trx_bm='$id_trx_bm' AND email_supplier='$email'");
    
// 	$s = mysqli_query($koneksi, "SELECT * FROM bahan_baku_masuk WHERE id_pesanan='$id_pesanan' GROUP BY id_trx_bm");
// 	while ($ro = mysqli_fetch_array($s)) {
// 		$id_trx_bm = $ro['id_trx_bm'];
// 	}

// 	$q = mysqli_query($koneksi, "UPDATE bahan_baku_masuk SET status='S' WHERE id_trx_bm='$id_trx_bm'");
// 	if (!$q) {
// 		die("Perubahan Gagal");
// 	}
	echo "<script>window.location.href='?module=bahan_baku_masuk'</script>";
?>
