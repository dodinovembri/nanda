<?php  
	include 'module/koneksi.php';
// 	$q = mysqli_query($koneksi, "SELECT sub_product_keluar.*, product_keluar.* FROM sub_product_keluar JOIN product_keluar ON sub_product_keluar.id_product_keluar = product_keluar.id_product  WHERE sub_product_keluar.status='B'");
    $q = mysqli_query($koneksi, "SELECT sub_product_keluar.status as status, product_keluar.id_product_keluar as id_product_keluar, product_keluar.tanggal as tanggal, product_keluar.tanggal_pesan_kembali as tgl_pesan FROM sub_product_keluar JOIN product_keluar ON sub_product_keluar.id_product_keluar = product_keluar.id_product  WHERE sub_product_keluar.status='B' GROUP BY sub_product_keluar.status, product_keluar.id_product_keluar");
//  	$q = mysqli_query($koneksi, "SELECT * FROM product_keluar WHERE status='B'");
?>
<script type="text/javascript" language="JavaScript">
 function konfirmasi()
 {
 tanya = confirm("Anda Yakin Akan Menghapus Data ?");
 if (tanya == true) return true;
 else return false;
 }</script>

<br><br><br><br>
 		<div class=main-white style="background-color: #e5e5e5;">
			<div class=container> 
          		<div class=row> 
          				<h1 align="center">Pesanan Bahan Baku</h1><br>
								<table class="table">
									<tr id="th">
										<td>No</td>										
										<td>Tanggal Pesanan</td>
										<td>Tanggal Pesanan Kembali</td>
										<td>Actions</td>
									</tr>
									<?php $no = 1;
									while ($r = mysqli_fetch_array($q)) { ?>
										<tr id="tb">
											<td><?php echo $no++; ?></td>								
											<td><?php echo $r['tanggal']; ?></td>
											<td><?php echo $r['tgl_pesan']; ?></td>
											<td>
												<a href="?module=detail&id_product_keluar=<?php echo $r['id_product_keluar']; ?>"><i class="fas fa-eye"></i> Detail</a>
												<!--<a href="?module=pesan_sekarang&id_product_keluar=<?php echo $r['id_product_keluar']; ?>"><span ><i class="far fa-envelope"></i> Pesan Sekarang</span></i></a>-->
											</td> 											
										</tr>
									<?php	} ?>
								</table>
          		</div>
          	</div>
  		</div> 