<?php  
	include 'module/koneksi.php';
	$q = mysqli_query($koneksi, "SELECT * FROM bahan_baku_masuk");
?>
<br><br><br><br>
 		<div class=main-white style="background-color: #e5e5e5;">
			<div class=container> 
          		<div class=row> 
          				<h1 align="center">Bahan Baku Masuk</h1><br>          					
          					<a href="?module=bahan_baku_masuk_dari_supplier">Tambah Bahan Baku Masuk</a><br><br>
								<table class="table table-striped">
									<tr>
										<td>No</td>
										<td>ID Bahan Baku</td>
										<td>Nama Supplier</td>
										<td>Tanggal Pemesanan</td>
										<td>Jumlah</td>										
									</tr>
									<?php $no = 1;
									while ($r = mysqli_fetch_array($q)) { ?>
										<tr>
											<td><?php echo $no++; ?></td>
											<td><?php echo $r['id_bahan_baku_masuk']; ?></td>
											<td><?php echo $r['id_supplier']; ?></td>
											<td><?php echo $r['tanggal']; ?></td>
											<td><?php echo $r['jumlah']; ?></td>											
										</tr>
									<?php	} ?>
								</table>
          		</div>
          	</div>
  		</div>