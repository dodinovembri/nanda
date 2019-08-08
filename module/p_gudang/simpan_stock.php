<?php

    include 'module/koneksi.php';

	$id_bahan_baku = $_POST['id_bahan_baku'];
    $jumlah = $_POST['jumlah'];
    
    $cek = mysqli_query($koneksi, "SELECT * FROM stock_bahan_baku WHERE id_bahan_baku= '$id_bahan_baku'");
    if (mysqli_num_rows($cek) > 0) {
        echo "<script>
            window.alert('Data sudah ada');            
			window.location.href = '?module=tambah_stock_bahan_baku';		
		</script>";
    }
    else{
        $q = mysqli_query($koneksi, "INSERT INTO stock_bahan_baku (`id_bahan_baku`, `jumlah`) VALUES ('$id_bahan_baku', '$jumlah')");
        if (!$q) {
            die("Perubahan gagal");
        }
        echo "<script>
                window.location.href = '?module=stok_bahan_baku';
            </script>";
    }