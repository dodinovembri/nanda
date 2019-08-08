<?php 
include 'module/templates/head.php';
?>

<!-- <!DOCTYPE html> 
<html>  
<body>  -->
		 		<!-- Awal halaman login --> 
			<div class="modal-dialog login animated"> 
				<div class=modal-content> 
					<div class=modal-header> 
						<button type=button class=close data-dismiss=modal aria-hidden=true>&times;</button> 
						<h4 class=modal-title><center><h1>LOGIN</h1></center></h4> 
					</div> 
					<div class=modal-body> 
						<div class=box> 
							<div class=content>  
								<div class=division> 
									<img src="assets/img/judul.png">
								</div> 
								<div class="error inside-alert">
								</div> 
								<div class="form loginBox"> 
									<form method="post" action="module/login.php">
										<input name=utf8 type=hidden value="&#x2713;"/> 
										<input name=username class=form-control placeholder=Username required /> <br>
										<input type=password name=password class=form-control placeholder=Password required /> 
										
										<input type=submit name=commit value=Login class="btn btn-default btn-login" data-disable-with=Login /> 
									</form> 
								</div> 
							</div> 
						</div>  
					</div>
				</div> 
			</div> 
		 <!-- akhir halaman login -->