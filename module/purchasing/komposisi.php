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
										<form class="contact100-form validate-form" method="post" action="?module=simpan_komposisi">
											<span class="contact100-form-title">
												Komposisi
											</span>																
											<div class="wrap-input100 validate-input" data-validate = "Nama Barang is required">
												<input class="input100" type="text" list="l_tarip" name="id_product" placeholder="Nama Product">
												<datalist id="l_tarip">
					                              <?php 
					                              	include 'module/koneksi.php';
					                               	$q = mysqli_query($koneksi,"SELECT * FROM product");
					                                while ($row = mysqli_fetch_array($q)) { ?>
					                                      <option value="<?php echo $row['id_product']; ?>"><?php echo $row['nama_product']; ?></option>  
					                                  <?php
					                                }
					                              ?>                         
					                            </datalist>
												<span class="focus-input100"></span>
												<span class="symbol-input100">
													<i class="fa fa-pencil-alt"></i>
												</span>
											</div>

											<div class="wrap-input100 validate-input" data-validate = "Suplier is required">
												<input class="input100" type="text" list="l_supplier" name="id_bahan_baku" placeholder="Nama Bahan Baku">
												<datalist id="l_supplier">
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


											<div class="wrap-input100 validate-input" data-validate = "Jumlah is required">
												<input class="input100" type="text" name="jumlah" placeholder="Jumlah">
												<span class="focus-input100"></span>
												<span class="symbol-input100">
													<i class="fa fa-pencil-alt"></i>
												</span>
											</div>
											
											<div class="wrap-input100 validate-input" data-validate = "Suplier is required">
											<input class="input100" type="text" list="ll" name="id_supplier" placeholder="Nama Bahan Baku">
											<datalist id="ll">
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

											<!-- <div class="wrap-input100 validate-input" data-validate = "Message is required">
												<textarea class="input100" name="message" placeholder="Message"></textarea>
												<span class="focus-input100"></span>
											</div> -->

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


