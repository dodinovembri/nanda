<?php  
	include 'module/koneksi.php';
	$q = mysqli_query($koneksi, "SELECT * FROM komposisi");
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
          				<h1 align="center">Data Komposisi</h1><br>  
          					<a href="?module=komposisi"><i class="fas fa-plus-circle"></i> Tambah Komposisi</a><br><br>    					
								<table class="table">
									<tr id="th">
										<td>No</td>
										<td>ID Product</td>
										<td>Komposisi</td>										
										<td>Jumlah</td>
										<td>ID Supplier</td>
										<td>Actions</td>
									</tr>
									<?php $no = 1;
									while ($r = mysqli_fetch_array($q)) { ?>
										<tr id="tb">
											<td><?php echo $no++; ?></td>
											<td><?php echo $r['id_product']; ?></td>
											<td><?php echo $r['komposisi']; ?></td>		
											<td><?php echo $r['jumlah']; ?></td>	
											<td><?php echo $r['id_supplier']; ?></td>							
											<td>
												<a href="?module=edit_komposisi&id_komposisi=<?php echo $r['id_komposisi']; ?>"><i class="fas fa-pencil-alt"></i> Ubah</a>
												<a onclick="return konfirmasi();" href="?module=hapus_komposisi&id_komposisi=<?php echo $r['id_komposisi']; ?>"><i class="fa fa-trash"></i> Hapus</a>
											</td>
										</tr>
									<?php	} ?>
								</table>
          		</div>
          	</div>
  		</div>





  		