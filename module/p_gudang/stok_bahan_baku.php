<?php  
	include 'module/koneksi.php';
	$q = mysqli_query($koneksi, "SELECT stock_bahan_baku.*, bahan_baku.* FROM stock_bahan_baku JOIN bahan_baku ON stock_bahan_baku.id_bahan_baku = bahan_baku.id_bahan_baku ORDER BY bahan_baku.id_bahan_baku ASC");
?>
<script type="text/javascript" language="JavaScript">
 function konfirmasi()
 {
 tanya = confirm("Anda Yakin Akan Menghapus Stok ?");
 if (tanya == true) return true;
 else return false;
 }</script>

<br><br><br><br>
 		<div class=main-white style="background-color: #e5e5e5;">
			<div class=container> 
          		<div class=row> 
						  <h1 align="center">Stok Bahan Baku</h1><br>  
						  <a href="?module=tambah_stock_bahan_baku"><i class="fa fa-plus-square"></i> Tambah Stock Bahan Baku</a><br><br>        					          					
								<table class="table">
									<tr id="th">
										<td>No</td>
										<td>ID Bahan Baku</td>
										<td>Nama Bahan Baku</td>										
										<td>Jumlah</td>		
										<td>Satuan</td>		
										<td>Actions</td>		
									</tr>
									<?php $no = 1;
									while ($r = mysqli_fetch_array($q)) { ?>
										<tr id="tb">
											<td><?php echo $no++; ?></td>
											<td><?php echo $r['id_bahan_baku']; ?></td>
											<td><?php echo $r['nama_bahan_baku']; ?></td>
											<td><?php echo $r['jumlah']; ?></td>																					
											<td><?php echo $r['satuan_bahan_baku']; ?></td>	
											<td>
												<a href="?module=update_stok&id_stock=<?php echo $r['id_stock']; ?>"><i class="fas fa-eye"></i> Update</a>												
												<a onclick="return konfirmasi();" href="?module=hapus_stok&id_stock=<?php echo $r['id_stock']; ?>"><i class="fas fa-check"></i> Hapus</a>											
											</td>
										</tr>
									<?php	} ?>
								</table>
          		</div>
          	</div>
  		</div>