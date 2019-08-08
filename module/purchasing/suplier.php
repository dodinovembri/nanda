<?php  
	include 'module/koneksi.php';
	$q = mysqli_query($koneksi, "SELECT * FROM supplier");
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
          				<h1 align="center">Data Supplier</h1><br>  
          					<a href="?module=tambah_supplier"><i class="fas fa-plus-circle"></i> Tambah Supplier</a><br><br>    					
								<table class="table">
									<tr id="th">
										<td>No</td>
										<td>ID</td>
										<td>Nama</td>										
										<td>Email</td>
										<td>No HP</td>
										<td>Alamat</td>
										<td>Actions</td>
									</tr>
									<?php $no = 1;
									while ($r = mysqli_fetch_array($q)) { ?>
										<tr id="tb">
											<td><?php echo $no++; ?></td>
											<td><?php echo $r['id_supplier']; ?></td>
											<td><?php echo $r['nama_supplier']; ?></td>		
											<td><?php echo $r['email']; ?></td>	
											<td><?php echo $r['no_hp']; ?></td>							
											<td><?php echo $r['alamat']; ?></td>
											<td>
												<a href="?module=edit_supplier&id_supplier=<?php echo $r['id_supplier']; ?>"><i class="fas fa-pencil-alt"></i> Ubah</a>
												<a onclick="return konfirmasi();" href="?module=hapus_supplier&id_supplier=<?php echo $r['id_supplier']; ?>"><i class="fa fa-trash"></i> Hapus</a>
											</td>
										</tr>
									<?php	} ?>
								</table>
          		</div>
          	</div>
  		</div>





  		