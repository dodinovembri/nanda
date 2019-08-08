<script type="text/javascript" language="JavaScript">
 function konfirmasi()
 {
 tanya = confirm("Anda Yakin Akan Memesan Barang Ini ?");
 if (tanya == true) return true;
 else return false;
 }</script>


<br><br><br><br><br><br>
<?php  
  include 'module/koneksi.php';
  $id_trx_pk = $_GET['id_trx_pk'];
  $q2 = mysqli_query($koneksi, "SELECT * FROM sub_product_keluar WHERE id_trx_product_keluar='$id_trx_pk'"); 
//   while($r_a = mysqli_fetch_array($q2)){
//         $id_product_keluar = $r_a['id_product_keluar'];
//     }
?>
    <div class=main-white style="background-color: #e5e5e5;">
      <div class=container> 
              <div class=row> 
                <h1 align="center">Pesanan Bahan Baku</h1><br>
                <!--<a href="?module=pesan_sekarang&id_product_keluar=<?php echo $id_product_keluar; ?>"><i class="far fa-envelope fa-2x"></i><br>Pesan Sekarang</a>-->
                <table class="table">
                  <tr id="th">
                    <td>No</td>                   
                    <td>ID Product Keluar</td>
                    <td>Komposisi</td>
                    <td>Jumlah</td>
                    <td>Email</td>
                  </tr>
                  <?php $no = 1;
                  while ($r = mysqli_fetch_array($q2)) { 
                    $no++;
                    ?>
                     <tr id="tb">
                      <td><?php echo $no; ?></td>
                      <td><?php echo $r['id_product_keluar']; ?></td>
                      <td><?php echo $r['komposisi']; ?></td>
                      <td><?php echo $r['jumlah']; ?></td>
                      <td><?php echo $r['email']; ?></td>
                    </tr>
                  <?php } ?>
                </table>
              </div>
            </div>
      </div> 