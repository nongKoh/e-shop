<?php session_start();
include_once('connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags must come first in the head; any other head content must come after these tags -->

	<title>E-SHOP HTML Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="css/slick.css" />
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!--Css-->
	<link type="text/css" rel="stylesheet" href="style.css" />
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<!-- HEADER -->
	<header>
		<!-- header -->
		<div id="header menu-head">
			<div class="container">
				<div class="pull-left">
					<!-- Logo -->
					<div class="header-logo">
					<a class="logo" href="index.php">
							<img src="./img/logo.png" alt="">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Search -->
					<div class="header-search">
						<form>
							<input class="input search-input" type="text" placeholder="Enter your keyword">
							<button class="search-btn"><i class="fa fa-search"></i></button>
						</form>
					</div>
					<!-- /Search -->
				</div>
				<div class="pull-right">
					<ul class="header-btns">
							<!-- Account -->
								<?php
								    if (isset($_SESSION['mname'])=='') { 
										include('head-befor.php');
									  }else{
										include('head-after.php');
									  }
								?>
						<!-- /Account -->

					</ul>
				</div>
			</div>
			<!-- header -->
		</div>
		<!-- container -->
	</header>
	<!-- /HEADER -->
	<div class="border-head">

	</div>

	<!-- HOME -->
<div id="home">	


<div class="container">
			<h1>Profile</h1>
			  <hr>
			  <div class="row">
					<!-- left column -->
					<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3">
					  <div class="text-center">
						<img src="img/lingard.jpg" class="avatar img-circle" alt="avatar" style="width:100%">
						
					  </div>
					</div>
					<div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-9 personal-info">
						<div>
							<label class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-2 control-label"></label>
							<h3>My profile</h3>
							
						</div>
						<form class="form-horizontal" role="form">
								<div class="form-group">
									<label class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 control-label">ชื่อ-นามสกุล :</label>
									<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-8">
										<p style="margin-top:7px;">
										<?php
											echo $_SESSION['mname'];
										?>
										</p>
									</div>
								</div>
								<div class="form-group">
									<label class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 control-label">Username :</label>
									<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-8">
										<p style="margin-top:7px;">
										<?php
											echo $_SESSION['uname'];
										?>									
										</p>
									</div>
								</div>
								<div class="form-group">
									<label class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 control-label">E-mail :</label>
									<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-8">
										<p style="margin-top:7px;">
										<?php
											echo $_SESSION['email'];
										?>
										</p>
									</div>
								</div>
								<div class="form-group">
									<label class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 control-label">เพศ :</label>
									<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-8">
										<p style="margin-top:7px;">
										<?php
											echo $_SESSION['gender'];
										?>
										</p>
									</div>
								</div>
								<div class="form-group">
									<label class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 control-label">ที่อยู่ :</label>
									<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-8">
										<p style="margin-top:7px;">
										<?php
											echo $_SESSION['address'];
										?>
										</p>
									</div>
								</div>
								<div class="form-group">
									<label class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 control-label">เบอร์โทร :</label>
									<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-8">
										<p style="margin-top:7px;">
										<?php
											echo $_SESSION['tel'];
										?>
										</p>
									</div>
								</div>
								<div class="form-group">
									<label class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 control-label">Line :</label>
										<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3">
											<p style="margin-top:7px;">
											<?php
												echo $_SESSION['line'];
											?>
											</p>
										</div>
								</div>
								
								<div class="form-group">
								<label class="col-md-3 control-label"></label>
								<div class="col-md-8">
                                <a href="edit-profile.php"><input type="button" class="btn btn-danger" value="Edit Profile"></a>
								</div>
								</div>
							</form>
						</div>
				</div>	
	</div>



</div>
	<!-- /HOME -->
<div class="border-edit">

</div>

		<!-- FOOTER -->
		<footer id="footer" class="section section-grey">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<!-- footer logo -->
						<div class="footer-logo">
							<!-- <a class="logo" href="#">
		            <img src="./img/logo.png" alt=""> -->
		          <!-- </a> -->
						</div>
						<!-- /footer logo -->

						<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p> -->

						<!-- footer social -->
						<!-- <ul class="footer-social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						</ul> -->
						<!-- /footer social -->
					</div>
				</div>
				<!-- /footer widget -->

				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<!-- <div class="footer">
						<h3 class="footer-header">My Account</h3>
						<ul class="list-links">
							<li><a href="#">My Account</a></li>
							<li><a href="#">My Wishlist</a></li>
							<li><a href="#">Compare</a></li>
							<li><a href="#">Checkout</a></li>
							<li><a href="#">Login</a></li>
						</ul>
					</div> -->
				</div>
				<!-- /footer widget -->

				<div class="clearfix visible-sm visible-xs"></div>

				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<!-- <h3 class="footer-header">Customer Service</h3>
						<ul class="list-links">
							<li><a href="#">About Us</a></li>
							<li><a href="#">Shiping & Return</a></li>
							<li><a href="#">Shiping Guide</a></li>
							<li><a href="#">FAQ</a></li>
						</ul> -->
					</div>
				</div>
				<!-- /footer widget -->

				<!-- footer subscribe -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<!-- <h3 class="footer-header">Stay Connected</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p> -->
						<form>
							<!-- <div class="form-group">
								<input class="input" placeholder="Enter Email Address">
							</div>
							<button class="primary-btn">Join Newslatter</button> -->
						</form>
					</div>
				</div>
				<!-- /footer subscribe -->
			</div>
			<!-- /row -->
			<hr>
			<!-- row -->
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<!-- footer copyright -->
					<div class="footer-copyright">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</div>
					<!-- /footer copyright -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</footer>
	<!-- /FOOTER -->

	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/main.js"></script>
	<script src="script.js"></script>
</body>

</html>