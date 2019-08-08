<?php  
	include 'module/koneksi.php';

	$id_bahan_baku = $_GET['id_bahan_baku'];
	$q = mysqli_query($koneksi, "SELECT * FROM bahan_baku WHERE id_bahan_baku='$id_bahan_baku'");
	while ($r = mysqli_fetch_array($q)) {
		$id_bahan_baku = $r['id_bahan_baku'];
		$nama_bahan_baku = $r['nama_bahan_baku'];
		$satuan_bahan_baku = $r['satuan_bahan_baku'];
	}
?>




<style type="text/css">
  
*{margin: 0; padding: 0}
@keyframes autopopup {
    from {opacity: 0;margin-top:-200px;}
    to {opacity: 1;}
}
#close {
    background-color: rgba(64, 68, 65, 0.5);
    position: fixed;
    top:0;
    left:0;
    right:0;
    bottom:0;
    animation:autopopup 1s;
}
#close:target {
    -webkit-transition:all 1s;
    -moz-transition:all 1s;
    transition:all 1s;
    opacity: 0;
    visibility: hidden;
}

@media (min-width: 768px){
    .container-popup {
        width:30%;
    }
}
@media (max-width: 767px){
    .container-popup {
        width:30%;
    }
}
.container-popup {
    position: relative;
    margin: 10% auto;
    padding: 4px 3px;
    background-color: #797979;
    color: #333;
    border-radius: 8px;
}
.container-popup img {
    width: 100%
}
.close {
    position: absolute;
    top:3px;
    right:3px;
    background-color: #33898B;
    padding:7px 10px;
    font-size: 15px;
    text-decoration: none;
    line-height: 1;
    color:#fff;
}

  .button {
  height: 100px;
  width: 100px;
  margin: 50px;
  color: white;
  text-align: center;
  line-height: 100px;
   
  /*Rounded Corners and Shadows*/
  -webkit-border-radius: 100px;
  -moz-border-radius: 100px;
  border-radius: 100px;
  -webkit-box-shadow: 2px 2px 4px rgba(0,0,0,0.4);
  -moz-box-shadow: 2px 2px 4px rgba(0,0,0,0.4);
  box-shadow: 2px 2px 4px rgba(0,0,0,0.4);
 
  /*Ridiculous Gradient Syntax*/
  background: #e51d16; /* Old browsers */
  background: -moz-linear-gradient(top,  #e51d16 0%, #b21203 100%); /* FF3.6+ */
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#e51d16), color-stop(100%,#b21203)); /* Chrome,Safari4+ */
  background: -webkit-linear-gradient(top,  #4286f4 0%,#03b229 100%); /* Chrome10+,Safari5.1+ */
  background: -o-linear-gradient(top,  #e51d16 0%,#b21203 100%); /* Opera 11.10+ */
  background: -ms-linear-gradient(top,  #e51d16 0%,#b21203 100%); /* IE10+ */
  background: linear-gradient(top,  #e51d16 0%,#b21203 100%); /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e51d16', endColorstr='#b21203',GradientType=0 ); /* IE6-9 */
}
</style>
<div id="close">
        <div class="container-popup">
            <form action="" method="post" class="popup-form"><br><br>
            <center><h1>Detail Bahan</h1></center>
            <br>
              <center>
              	ID Bahan Baku<br>
              	<a class="btn btn-lg btn-default"><span style="color: black"><?php echo $id_bahan_baku; ?></span></a>
              </center><br>
              <center>
              	Nama Bahan Baku<br>
              	<a class="btn btn-lg btn-default"><span style="color: black"><?php echo $nama_bahan_baku; ?></span></a>
              </center><br>
              <center>
              	Satuan Bahan Baku<br>
              	<a class="btn btn-lg btn-default"><span style="color: black"><?php echo $satuan_bahan_baku; ?></span></a>
              </center><br>
            <br><br>
            </form>
            <a class="close" href="?module=tampil_bahan_baku">X</a>
        </div>
    </div>

    