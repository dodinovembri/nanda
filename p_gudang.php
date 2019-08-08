<?php  
	session_start();
	if ($_SESSION['id_role'] != 2) {
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
		include 'module/p_gudang/templates/leftbar.php';		
		
	?>

	<body class="hold-transition skin-blue sidebar-mini"> 
	  <div class="wrapper">
	  	<?php require_once('module/p_gudang/'.$_GET['module'].'.php'); ?>
	  </div> 
	</body>
	<?php 
		include 'module/templates/footer.php'; 		
	?>
<?php } ?> 
