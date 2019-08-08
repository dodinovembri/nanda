<?php  
	include 'module/koneksi.php';

	$id_bahan_baku = $_GET['id_bahan_baku'];
	$q = mysqli_query($koneksi, "SELECT * FROM bahan_baku WHERE id_bahan_baku='$id_bahan_baku'");
	while ($r = mysqli_fetch_array($q)) {
		$id_bahan_baku = $r['id_bahan_baku'];
		$nama_bahan_baku = $r['nama_bahan_baku'];
		$satuan_bahan_baku = $r['satuan_bahan_baku'];
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
                                                  <form class="contact100-form validate-form" method="post" action="?module=simpan_edit_bahan_baku">
                                                       <span class="contact100-form-title">
                                                            Edit Bahan Baku
                                                       </span>                                                                              
                                                       <div class="wrap-input100 validate-input" data-validate = "Nama Barang is required">
                                                            <input class="input100" type="text" list="l_tarip" name="id_bahan_baku" placeholder="Id Bahan Baku" value="<?php echo $id_bahan_baku; ?>" readonly>
                                                            
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
                                                            <input class="input100" type="text" name="nama_bahan_baku" placeholder="Nama Bahan baku" value="<?php echo $nama_bahan_baku; ?>">
                                                            <span class="focus-input100"></span>
                                                            <span class="symbol-input100">
                                                                 <i class="fa fa-pencil-alt"></i>
                                                            </span>
                                                       </div>

                                                       <div class="wrap-input100 validate-input" data-validate = "Jumlah is required">
                                                            <input class="input100" type="text" name="satuan_bahan_baku" placeholder="Satuan Bahan Baku" value="<?php echo $satuan_bahan_baku; ?>">
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



    