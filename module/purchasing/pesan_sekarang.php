<?php  
	include 'module/koneksi.php';
	$id_product_keluar = $_GET['id_product_keluar'];

	// echo $id_product_keluar;
	$q = mysqli_query($koneksi, "SELECT * FROM sub_product_keluar WHERE id_trx_product_keluar='$id_product_keluar'");
	while ($r = mysqli_fetch_array($q)) {
			$id_product_keluar = $r['id_product_keluar'];
			$email = $r['email'];
		}

	$q2 = mysqli_query($koneksi, "SELECT * FROM sub_product_keluar WHERE id_product_keluar='$id_product_keluar' AND status='B'");

	
	$message = "
	Yth. Bapak/ibu ditempat.
	Kami berniat membeli bahan baku 
	seperti berikut'";

?>

<br><br><br><br>
 		<div class=main-white style="background-color: #e5e5e5;">
			<div class=container> 
          		<div class=row> 
							<div class="bg-contact100" style="background-image: url('assets/img/bg-01.jpg');">
								<div class="container-contact100" style="background: transparent;">
									<div class="wrap-contact100">
										<div class="contact100-pic js-tilt" data-tilt>
											<img src="assets/img/img-01.png" alt="IMG">
										</div>
										<form class="contact100-form validate-form" method="post" action="?module=kirim_email">
											<span class="contact100-form-title">
												Pesanan Bahan Baku
											</span>																

											<div class="wrap-input100 validate-input" data-validate = "From is required">
												<input class="input100" type="text" name="from" placeholder="From : Email Perusahaan" required>
												<span class="focus-input100"></span>
												<span class="symbol-input100">
													<i class="fas fa-pencil-alt"></i>
												</span>
											</div>
							
											<div class="wrap-input100 validate-input" data-validate = "Email is required">
												<input class="input100" type="text" name="to" placeholder="To" value="<?php echo $email; ?>" required>
												<span class="focus-input100"></span>
												<span class="symbol-input100">
													<i class="fas fa-pencil-alt"></i>
												</span>
											</div>

											<div class="wrap-input100 validate-input" data-validate = "Subject is required">
												<input class="input100" type="text" name="subject" placeholder="Subject">
												<span class="focus-input100"></span>
												<span class="symbol-input100">
													<i class="fas fa-pencil-alt"></i>
												</span>
											</div>

											<div class="wrap-input100 validate-input" data-validate = "Message is required">
												<textarea class="input100" name="message" placeholder="Message"><?php echo $message; 
												while ($rq = mysqli_fetch_array($q2)) {
												 	echo $rq['komposisi'] ." = ". $rq['jumlah']; ?>
												 <?php } ?></textarea>
												<span class="focus-input100"></span>
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


