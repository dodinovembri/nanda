<?php  
	session_start();
	if ($_SESSION['id_role'] != 1) {
		header("location: index.php");
	}
	else
	{
		if (!isset($_GET['module']) || $_GET['module']==''){
			$_GET['module']='home'; 
		}	
	?>

	<?php 
		include 'module/templates/head.php'; 
		include 'module/templates/header.php';
		include 'module/purchasing/templates/leftbar.php';
	?>

	<body class="hold-transition skin-blue sidebar-mini"> 
	  <div class="wrapper">
	  	<?php require_once('module/purchasing/'.$_GET['module'].'.php'); ?>
	  </div> 
	</body>
	<?php
	include 'module/templates/footer.php';
	?>

<?php } ?> 