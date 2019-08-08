<?php  
	include 'module/koneksi.php';
	$q = mysqli_query($koneksi, "SELECT * FROM bahan_baku");
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
          				<h1 align="center">Bahan Baku</h1>
          					<a href="?module=tambah_bahan_baku">Tambah Bahan Baku</a><br><br>
								<table class="table table-striped">
									<tr>
										<td>No</td>
										<td>ID Bahan Baku</td>
										<td>Nama Bahan Baku</td>
										<td>Satuan</td>
										<td>Actions</td>
									</tr>
									<?php $no = 1;
									while ($r = mysqli_fetch_array($q)) { ?>
										<tr>
											<td><?php echo $no++; ?></td>
											<td><?php echo $r['id_bahan_baku']; ?></td>
											<td><?php echo $r['nama_bahan_baku']; ?></td>
											<td><?php echo $r['satuan_bahan_baku']; ?></td>
											<td>
												<a href="?module=lihat_bahan_baku&id_bahan_baku=<?php echo $r['id_bahan_baku']; ?>">Lihat</a>
												<a href="?module=edit_bahan_baku&id_bahan_baku=<?php echo $r['id_bahan_baku']; ?>">Edit</a>												
											</td>
										</tr>
									<?php	} ?>
								</table>
          		</div>
          	</div>
  		</div>