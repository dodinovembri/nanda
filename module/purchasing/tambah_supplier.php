		<?php 	
?>
<br><br><br><br>
 		<div class=main-white style="background-color: #e5e5e5;">
			<div class=container> 
          		<div class=row> 
							<div class="bg-contact100" style="background-image: url('assets/img/bg-01.jpg');">
								<div class="container-contact100" style="background: transparent;">
									<div class="wrap-contact100">
										<div class="contact100-pic js-tilt" data-tilt>
											<!--<img src="assets/img/img-01.png" alt="IMG">-->
										</div>
										<form class="contact100-form validate-form" method="post" action="?module=simpan_data_supplier">
											<span class="contact100-form-title">
												Tambah Suplier
											</span>																
											<div class="wrap-input100 validate-input" data-validate = "Id Suplier is required">
												<input class="input100" type="text" list="l_tarip" name="id_suplier" placeholder=" Id Suplier">
												<datalist id="l_tarip">
					                              <?php 
					                              	include 'module/koneksi.php';
					                               	$q = mysqli_query($koneksi,"SELECT * FROM bahan_baku");
					                                while ($row = mysqli_fetch_array($q)) { ?>
					                                      <option value="<?php echo $row['id_bahan_baku']; ?>"><?php echo $row['nama_bahan_baku']; ?></option>  
					                                  <?php
					                                }
					                              ?>                         
					                            </datalist>
												<span class="focus-input100"></span>
												<span class="symbol-input100">
													<i class="fa fa-pencil-alt"></i>
												</span>
											</div>

											<div class="wrap-input100 validate-input" data-validate = "Nama Suplier is required">
												<input class="input100" type="text" list="l_supplier" name="nama_supplier" placeholder="Nama Suplier">
												<datalist id="l_supplier">
					                              <?php 
					                              	include 'module/koneksi.php';
					                               	$q = mysqli_query($koneksi,"SELECT * FROM supplier");
					                                while ($row = mysqli_fetch_array($q)) { ?>
					                                      <option value="<?php echo $row['id_supplier']; ?>"><?php echo $row['nama_supplier']; ?></option>  
					                                  <?php
					                                }
					                              ?>                         
					                            </datalist>
												<span class="focus-input100"></span>
												<span class="symbol-input100">
													<i class="fa fa-pencil-alt"></i>
												</span>
											</div>

											<div class="wrap-input100 validate-input" data-validate = "Email Suplier is required">
												<input class="input100" type="text" name="email_suplier" placeholder="Email Suplier">
												<span class="focus-input100"></span>
												<span class="symbol-input100">
													<i class="fa fa-pencil-alt"></i>
												</span>
											</div>

											<div class="wrap-input100 validate-input" data-validate = "No Hp Suplier is required">
												<input class="input100" type="text" name="no_hp_suplier" placeholder="No Hp Suplier">
												<span class="focus-input100"></span>
												<span class="symbol-input100">
													<i class="fa fa-pencil-alt"></i>
												</span>
											</div>
											
											<div class="wrap-input100 validate-input" data-validate = "Alamat Suplier is required">
												<input class="input100" type="text" name="alamat_suplier" placeholder="Alamat Suplier">
												<span class="focus-input100"></span>
												<span class="symbol-input100">
													<i class="fa fa-pencil-alt"></i>
												</span>
											</div>

											<!-- <div class="wrap-input100 validate-input" data-validate = "Message is required">
												<textarea class="input100" name="message" placeholder="Message"></textarea>
												<span class="focus-input100"></span>
											</div> -->

											<div class="container-contact100-form-btn">
												<button type="submit" class="contact100-form-btn">
													Save
												</button>
											</div>
										</form>
									</div>
								</div>
							</div>
          		</div>
          	</div>
  		</div>


