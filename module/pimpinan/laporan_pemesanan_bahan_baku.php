<?php  
	include 'module/koneksi.php';
	$q = mysqli_query($koneksi, "SELECT * FROM sub_product_keluar");
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
          				<h1 align="center">Pemesanan Bahan Baku</h1><br>            				
								<table class="table">
									<tr id="th">
										<td>No</td>										
										<td>Komposisi</td>										
										<td>Jumlah</td>
										<td>Email Supplier</td>
										<td>Status</td>									
									</tr>
									<?php $no = 1;
									while ($r = mysqli_fetch_array($q)) { ?>
										<tr id="tb">
											<td><?php echo $no++; ?></td>
											<td><?php echo $r['komposisi']; ?></td>
											<td><?php echo $r['jumlah']; ?></td>		
											<td><?php echo $r['email']; ?></td>	
											<td><?php echo $r['status']; ?></td>					
										</tr>
									<?php	} ?>
								</table>
          		</div>
          	</div>
  		</div>