<br><br><br><br>
<?php
    include "module/koneksi.php";

    $id = $_GET['id_stock'];
    $query_s = mysqli_query($koneksi, "SELECT * FROM stock_bahan_baku WHERE id_stock=$id");
    while ($row_s = mysqli_fetch_array($query_s)) {
        $id_bahan_baku = $row_s['id_bahan_baku'];
        $jumlah = $row_s['jumlah'];        
    }
?>
<div class=main-white style="background-color: #e5e5e5;">
	<div class=container> 
		<div class=row> 
				<div class="bg-contact100" style="background-image: url('assets/img/bg-01.jpg');">
					<div class="container-contact100" style="background: transparent;">
						<div class="wrap-contact100">
							<div class="contact100-pic js-tilt" data-tilt>
								<img src="assets/img/img-01.png" alt="IMG">
							</div>
							<form class="contact100-form validate-form" method="post" action="?module=simpan_update_stock">
								<span class="contact100-form-title">    
									Tambah Data Stock
								</span>																
								<div class="wrap-input100 validate-input" data-validate = "Nama  Bahan Baku is required">
									<input class="input100" type="text" list="l_tarip" name="id_bahan_baku" value="<?= $id_bahan_baku; ?>" placeholder="Nama Bahan Baku" readonly>									
									<span class="focus-input100"></span>
									<span class="symbol-input100">
										<i class="fas fa-pencil-alt"></i>
									</span>
								</div>
						
								<div class="wrap-input100 validate-input" data-validate = "Jumlah is required">
									<input class="input100" type="text" name="jumlah" placeholder="Jumlah" value="<?= $jumlah; ?>">
									<span class="focus-input100"></span>
									<span class="symbol-input100">
										<i class="fas fa-pencil-alt"></i>
									</span>
								</div>									
								<div class="container-contact100-form-btn">
									<button type="submit" class="contact100-form-btn">
										Send
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
		</div>
	</div>
</div>


