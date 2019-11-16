<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Modern an Admin Panel Category Flat Bootstarp Resposive Website Template | Login :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="<?= base_url()?>assets/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="<?= base_url()?>assets/css/style.css" rel='stylesheet' type='text/css' />
<link href="<?= base_url()?>assets/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="<?= base_url()?>assets/js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="<?= base_url()?>assets/js/bootstrap.min.js"></script>
</head>
<body id="login">
  <div class="login-logo">
    <!-- <a href="index.html"><img src="<?= base_url()?>assets/images/logo.png" alt=""/></a> -->
  </div>
  <h2 class="form-heading">login</h2>
  <?php
	$pesan= $this->session->flashdata('notif');
	if($pesan != null){
		echo '<div class="alert alert-danger">'.$pesan.'</div>';
	}
  ?>
  <div class="app-cam">
  <form class="form-auth-small" action="<?=base_url()?>index.php/Login/login_cek" method="post">
								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">Username</label>
									<input type="text" class="form-control" name="username" placeholder="Username">
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input type="password" class="form-control" name="password" placeholder="Password">
								</div>
								<!-- <div>
									<p>belum punya akun? <a href="<?=base_url()?>index.php/register/index">daftar akun</a></p>
								</div> -->
								<button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
							</form>
  </div>
   <!-- <div class="copy_layout login">
      <p>Copyright &copy; 2015 Modern. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
   </div> -->
</body>
</html>
  