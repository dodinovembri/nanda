<?php  
	include 'module/koneksi.php';

	$id_supplier = $_GET['id_supplier'];
	$q = mysqli_query($koneksi, "SELECT * FROM supplier WHERE id_supplier='$id_supplier'");
	while ($r = mysqli_fetch_array($q)) {
		$nama_supplier = $r['nama_supplier'];
		$email = $r['email'];
		$no_hp = $r['no_hp'];
		$alamat = $r['alamat'];
	}
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
                                                  <form class="contact100-form validate-form" method="post" action="?module=simpan_edit_data_supplier">
                                                       <span class="contact100-form-title">
                                                            Edit Suplier
                                                       </span>                                                                              
                                                       <div class="wrap-input100 validate-input" data-validate = "Nama Barang is required">
                                                            <input class="input100" type="text" name="id_supplier" value="<?php echo $id_supplier; ?>" placeholder="Id Suplier" readonly >
                                                            
                                                            <span class="focus-input100"></span>
                                                            <span class="symbol-input100">
                                                            <i class="fa fa-pencil-alt"></i>
                                                            </span>
                                                       </div>

                                                  <!--      <div class="wrap-input100 validate-input" data-validate = "Suplier is required">
                                                            <input class="input100" type="text" name="nama_supplier" placeholder="Suplier">
                                                            <span class="focus-input100"></span>
                                                            <span class="symbol-input100">
                                                                 <i class="fa fa-pencil"></i>
                                                            </span>
                                                       </div> -->

                                                       <div class="wrap-input100 validate-input" data-validate = "Tanggal is required">
                                                            <input class="input100" type="text" name="nama_supplier" value="<?php echo $nama_supplier; ?>" placeholder="Nama Suplier">
                                                            <span class="focus-input100"></span>
                                                            <span class="symbol-input100">
                                                                 <i class="fa fa-pencil-alt"></i>
                                                            </span>
                                                       </div>

                                                       <div class="wrap-input100 validate-input" data-validate = "Jumlah is required">
                                                            <input class="input100" type="text" name="email_supplier" value="<?php echo $email; ?>" placeholder="Email Suplier">
                                                            <span class="focus-input100"></span>
                                                            <span class="symbol-input100">
                                                                 <i class="fa fa-pencil-alt"></i>
                                                            </span>
                                                       </div>

                                                       <div class="wrap-input100 validate-input" data-validate = "Jumlah is required">
                                                            <input class="input100" type="text" name="no_hp_supplier" value="<?php echo $no_hp; ?>">
                                                            <span class="focus-input100"></span>
                                                            <span class="symbol-input100">
                                                                 <i class="fa fa-pencil-alt"></i>
                                                            </span>
                                                       </div>

                                                       <div class="wrap-input100 validate-input" data-validate = "Jumlah is required">
                                                            <input class="input100" type="text" name="alamat_supplier" value="<?php echo $alamat ?>">
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
                                                                 Simpan
                                                            </button>
                                                       </div>
                                                  </form>
                                             </div>
                                        </div>
                                   </div>
                    </div>
               </div>
          </div>



    

    