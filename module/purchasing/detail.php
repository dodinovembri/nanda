<script type="text/javascript" language="JavaScript">
 function konfirmasi()
 {
 tanya = confirm("Anda Yakin Akan Memesan Barang Ini ?");
 if (tanya == true) return true;
 else return false;
 }</script>

<?php  
  include 'module/koneksi.php';
  $id_product_keluar = $_GET['id_product_keluar'];
  $q2 = mysqli_query($koneksi, "SELECT * FROM sub_product_keluar WHERE id_trx_product_keluar='$id_product_keluar' AND status='B' GROUP BY email"); 

?>
 
<br><br><br><br>
    <div class=main-white style="background-color: #e5e5e5;">
      <div class=container> 
              <div class=row> 
                <h1 align="center">Pesanan Bahan Baku</h1><br>
                <!--<a href="?module=pesan_sekarang&id_product_keluar=<?php echo $id_product_keluar; ?>"><i class="far fa-envelope fa-2x"></i><br>Pesan Sekarang</a>-->
                <table class="table">
                  <tr id="th">
                    <td>No</td>                   
                    <td>Nama Pesanan</td>
                    <td>Jumlah</td>
                    <td>Supplier</td>
                    <td>Action</td>
                  </tr>
                  <?php $no = 1;
                  while ($r = mysqli_fetch_array($q2)) { 
                    $no++;
                    ?>
                     <tr id="tb">
                      <td><?php echo $no; ?></td>
                      <td><?php echo $r['komposisi']; ?></td>
                      <td><?php echo $r['jumlah']; ?></td>
                      <td><?php echo $r['email']; ?></td>
                      <td>
						    <a href="?module=pesan_sekarang_detail&id_supplier=<?php echo $r['email']; ?>&id_trx_product_keluar=<?php echo $id_product_keluar; ?>"><span ><i class="far fa-envelope"></i> Pesan Sekarang</span></i></a>
						    <a href="?module=detail_email&id_trx_pk=<?php echo $r['id_trx_product_keluar']; ?>" target="_blank"><i class="fas fa-eye"></i> Lihat</a>
                      </td>
                    </tr>
                  <?php } ?>
                </table>
              </div>
            </div>
      </div> 