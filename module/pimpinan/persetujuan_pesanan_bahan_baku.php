<?php  
	include 'module/koneksi.php';
	$q = mysqli_query($koneksi, "SELECT * FROM bahan_baku_masuk WHERE status='B'");
?>
<script type="text/javascript" language="JavaScript">
 function konfirmasi()
 {
 tanya = confirm("Setujui Pemesanan Bahan Baku ?");
 if (tanya == true) return true;
 else return false;
 }</script>

<br><br><br><br>
 		<div class=main-white style="background-color: #e5e5e5;">
			<div class=container> 
          		<div class=row> 
          				<h1 align="center">Pesanan Bahan Baku</h1><br>          					
								<table class="table table-striped">
									<tr>
										<td>No</td>
										<td>ID Bahan Baku</td>
										<td>Nama Supplier</td>
										<td>Tanggal Pemesanan</td>
										<td>Jumlah</td>
										<td>Status</td>
									</tr>
									<?php $no = 1;
									while ($r = mysqli_fetch_array($q)) { ?>
										<tr>
											<td><?php echo $no++; ?></td>
											<td><?php echo $r['id_bahan_baku_masuk']; ?></td>
											<td><?php echo $r['nama_supplier']; ?></td>
											<td><?php echo $r['tanggal']; ?></td>
											<td><?php echo $r['jumlah']; ?></td>
											<td>
												<a onclick="return konfirmasi();" href="?module=update_status&id_pesanan=<?php echo $r['id_pesanan']; ?>">Setujui</a>
											</td>
										</tr>
									<?php	} ?>
								</table>
          		</div>
          	</div>
  		</div>