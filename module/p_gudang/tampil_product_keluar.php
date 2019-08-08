<?php  
	include 'module/koneksi.php';
	$q = mysqli_query($koneksi, "SELECT product_keluar.*, product.* FROM product_keluar JOIN product ON product_keluar.id_product = product.id_product");
?>
<br><br><br><br>
 		<div class=main-white style="background-color: #e5e5e5;">
			<div class=container> 
          		<div class=row> 
          				<h1 align="center">Product Keluar</h1>          					
								<table class="table table-striped">
									<tr>
										<td>No</td>										
										<td>Nama Bahan Baku</td>
										<td>Jumlah</td>
										<td>Tanggal</td>
									</tr>
									<?php $no = 1;
									while ($r = mysqli_fetch_array($q)) { ?>
										<tr>
											<td><?php echo $no++; ?></td>								
											<td><?php echo $r['nama_product']; ?></td>
											<td><?php echo $r['jumlah']; ?></td>
											<td><?php echo $r['tanggal']; ?></td>
										</tr>
									<?php	} ?>
								</table>
          		</div>
          	</div>
  		</div>