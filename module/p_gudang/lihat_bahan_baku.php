<?php  
	include 'module/koneksi.php';

	$id_product_keluar = $_GET['id_product_keluar'];
  // echo $id_product_keluar;
// 	$q = mysqli_query($koneksi, "SELECT * FROM sub_product_keluar WHERE id_trx_product_keluar='$id_product_keluar' AND status='B'");
    $q = mysqli_query($koneksi, "SELECT * FROM sub_product_keluar WHERE id_trx_product_keluar='$id_product_keluar' AND status='S'");
?>
<script type="text/javascript" language="JavaScript">
 function konfirmasi()
 {
 tanya = confirm("Barang Sudah Sampai ?");
 if (tanya == true) return true;
 else return false;
 }</script>

<br><br><br><br>
    <div class=main-white style="background-color: #e5e5e5;">
      <div class=container> 
              <div class=row> 
                  <h1 align="center">Bahan Baku</h1><br>
                <table class="table">
                  <tr id="th">
                    <td>No</td>
                    <td>Komposisi</td>
                    <td>Jumlah</td>
                    <td>Email</td>
                    <td>Actions</td>
                  </tr>
                  <?php $no = 1;
                  while ($r = mysqli_fetch_array($q)) { ?>
                    <tr id="tb">
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $r['komposisi']; ?></td>
                      <td><?php echo $r['jumlah']; ?></td>
                      <td><?php echo $r['email']; ?></td>
                      <td>                      
                        <a onclick="return konfirmasi();" href="?module=update_status_selesai_sub&id_product_keluar=<?php echo $id_product_keluar; ?>&id_sub_product_keluar=<?php echo $r['id_sub_product_keluar']; ?>"><i class="fa fa-check"></i> Selesai</a>
                      </td>
                    </tr>
                  <?php } ?>
                </table>
              </div>
            </div>
      </div>
      