<!DOCTYPE html>
	<html class="no-js">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>[Sign-in] - Integrasi Presisi Indiehome</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FreeHTML5.co" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url()?>assets/images/Indihome_Icon.png"/>

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/animate.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/form.css">


	<!-- Modernizr JS -->
	<script src="<?php echo base_url()?>assets/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body class="style-3 " style="background: #ffffff url(assets/images/hitam.jpg) repeat;">
	
		<div class="container">
			<div class="row">
					<!-- Start Sign In Form -->
				<div class="col-md-8 col-xs-12" style="margin-top: 100px">

    					<!--<style="height:200px; background: black"> -->
    					<img style="width: 100%; max-width: 550px; height: auto;" src="<?php echo base_url()?>assets/images/Indihome_Fiber2.png">

				</div>
				<div class="col-md-4 col-xs-12" style="margin-top: 100px">
					<form action=<?php echo base_url('Auth/loginadmin')?> class="fh5co-form animate-box" data-animate-effect="fadeInRight" method="post">
						<h2>Sign In</h2>
						<div class="form-group" >
							<label for="username" class="sr-only">Username</label>
							<input type="text" name="username" class="form-control" id="username" placeholder="Username" autocomplete="off">
						</div>
						<div class="form-group">
							<label for="password" class="sr-only">Password</label>
							<input type="password" name="password" class="form-control" id="password" placeholder="Password" autocomplete="off">
						</div>
						<div class="form-group">
							<label for="remember"><input type="checkbox" id="remember"> Remember Me</label>
						</div>
						<div class="form-group">
							<p><?php if(isset($alert)) echo "<div style ='text-align: center;'class='alert alert-danger alert-dismissable'>
                            <button style ='text-align: center; type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                            <h4>Username atau Password salah</h4>
                            </div>";?></p>
						</div>
						<div class="form-group">
							<input type="submit" value="Sign In" class="btn btn-primary">
						</div>
					</form>
					<!-- END Sign In Form -->


				</div>
			</div>
		</div>

	<!-- jQuery -->
	<script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
	<!-- Placeholder -->
	<script src="<?php echo base_url()?>assets/js/jquery.placeholder.min.js"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url()?>assets/js/jquery.waypoints.min.js"></script>
	<!-- Main JS -->
	<script src="<?php echo base_url()?>assets/js/main.js"></script>

	</body>
</html>
