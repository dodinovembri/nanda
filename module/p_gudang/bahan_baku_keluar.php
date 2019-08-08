<?php  
	include 'module/koneksi.php';
// 	$q = mysqli_query($koneksi, "SELECT * FROM product_keluar WHERE status='S'");
    $q = mysqli_query($koneksi, "SELECT sub_product_keluar.status as status, product_keluar.id_product_keluar as id_product_keluar, product_keluar.tanggal as tanggal FROM sub_product_keluar JOIN product_keluar ON sub_product_keluar.id_product_keluar = product_keluar.id_product  WHERE sub_product_keluar.status='S' GROUP BY sub_product_keluar.status");
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
										<td>ID Transaksi</td>
										<td>Tanggal</td>
										<td>Actions</td>
									</tr>
									<?php $no = 1;
									while ($r = mysqli_fetch_array($q)) { ?>
										<tr id="tb">
											<td><?php echo $no++; ?></td>
											<td><?php echo $r['id_product_keluar']; ?></td>
											<td><?php echo $r['tanggal']; ?></td>
											<td>
												<a href="?module=lihat_bahan_baku&id_product_keluar=<?php echo $r['id_product_keluar']; ?>"><i class="fa fa-eye"></i> Lihat</a>
												<a onclick="return konfirmasi();" href="?module=update_status_selesai&id_product_keluar=<?php echo $r['id_product_keluar']; ?>"><i class="fa fa-check"></i>Selesai</i></a>
											</td>
										</tr>
									<?php	} ?>
								</table>
          		</div>
          	</div>
  		</div>
  		