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
						<a class="logo" href="#">
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
						<li class="header-account dropdown default-dropdown">
							<div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
								<div class="header-btns-icon">
									<i class="fa fa-user-o"></i>
								</div>
								<strong class="text-uppercase">My Account <i class="fa fa-caret-down"></i></strong>
							</div>
							<a id="btnSignin" class="text-uppercase">Login</a> / <a href="#" class="text-uppercase">Join</a>
							<!-- องค์ประกอบของ Modal -->
							<div id="modalSignin" class="modal fade">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">สมาชิกเข้าสู่ระบบ</h5>
											<button class="close" data-dismiss="modal">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<form>
												<div class="form-group">
													<label for="login">Login:</label>
													<input  type="text" id="login"
															class="form-control">
												</div>
												<div class="form-group">
													<label for="pswd">Password:</label>
													<input  type="password" id="pswd" 
														class="form-control">
												</div>
											</form>
										</div>
										<div class="modal-footer">
											<button class="btn btn-primary">เข้าสู่ระบบ</button>
											<button class="btn btn-warning">ลืมรหัสผ่าน</button>
											<button class="btn btn-info">สมัครสมาชิก</button>
										</div>
									</div>
								</div>
							</div>
							<!-- /องค์ประกอบของ Modal -->
 
							<ul class="custom-menu">
								<li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
								<li><a href="#"><i class="fa fa-heart-o"></i> My Wishlist</a></li>
								<li><a href="#"><i class="fa fa-exchange"></i> Compare</a></li>
								<li><a href="#"><i class="fa fa-check"></i> Checkout</a></li>
								<li><a href="#"><i class="fa fa-unlock-alt"></i> Login</a></li>
								<li><a href="#"><i class="fa fa-user-plus"></i> Create An Account</a></li>
							</ul>
						</li>
						<!-- /Account -->

						<!-- Cart -->
						<li class="header-cart dropdown default-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
								<div class="header-btns-icon">
									<i class="fa fa-shopping-cart"></i>
									<span class="qty">3</span>
								</div>
								<strong class="text-uppercase">My Cart:</strong>
								<br>
								<span>35.20$</span>
							</a>
							<div class="custom-menu">
								<div id="shopping-cart">
									<div class="shopping-cart-list">
										<div class="product product-widget">
											<div class="product-thumb">
												<img src="./img/thumb-product01.jpg" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-price">$32.50 <span class="qty">x3</span></h3>
												<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
											</div>
											<button class="cancel-btn"><i class="fa fa-trash"></i></button>
										</div>
										<div class="product product-widget">
											<div class="product-thumb">
												<img src="./img/thumb-product01.jpg" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-price">$32.50 <span class="qty">x3</span></h3>
												<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
											</div>
											<button class="cancel-btn"><i class="fa fa-trash"></i></button>
										</div>
									</div>
									<div class="shopping-cart-btns">
										<button class="main-btn">View Cart</button>
										<button class="primary-btn">Checkout <i class="fa fa-arrow-circle-right"></i></button>
									</div>
								</div>
							</div>
						</li>
						<!-- /Cart -->

						
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
			<h1>Edit Profile</h1>
			  <hr>
			  <div class="row">
					<!-- left column -->
					<div class="col-md-3">
					  <div class="text-center">
						<img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
						<h6>Upload a different photo...</h6>
						
						<input type="file" class="form-control">
					  </div>
					</div>
					<div class="col-md-9 personal-info">
						<div>
							<label class="col-lg-2 control-label"></label>
							<h3>Personal info</h3>
							<label class="col-lg-2 control-label"></label>
							<h5>Manage your personal information</h5>	
						</div>
						<form class="form-horizontal" role="form">
								<div class="form-group">
								<label class="col-lg-3 control-label">First name:</label>
								<div class="col-lg-8">
									<input class="form-control" type="text" value="">
								</div>
								</div>
								<div class="form-group">
								<label class="col-lg-3 control-label">Last name:</label>
								<div class="col-lg-8">
									<input class="form-control" type="text" value="">
								</div>
								</div>
								<div class="form-group">
									<label class="col-lg-3 control-label">Address:</label>
									<div class="col-lg-8">
										<input class="form-control" type="text" value="">
									</div>
									</div>
								<div class="form-group">
								<label class="col-lg-3 control-label">Tel:</label>
								<div class="col-lg-8">
									<input class="form-control" type="text" value="">
								</div>
								</div>
								<div class="form-group">
								<label class="col-md-3 control-label">Password:</label>
								<div class="col-md-8">
									<input class="form-control" type="password" value="">
								</div>
								</div>
								<div class="form-group">
								<label class="col-md-3 control-label">Confirm password:</label>
								<div class="col-md-8">
									<input class="form-control" type="password" value="">
								</div>
								</div>
								<div class="form-group">
								<label class="col-md-3 control-label"></label>
								<div class="col-md-8">
									<a href="profile.php"><input type="button" class="btn btn-danger" value="Save Changes"></a>
									
									
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
							<a class="logo" href="#">
		            <img src="./img/logo.png" alt="">
		          </a>
						</div>
						<!-- /footer logo -->

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>

						<!-- footer social -->
						<ul class="footer-social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						</ul>
						<!-- /footer social -->
					</div>
				</div>
				<!-- /footer widget -->

				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h3 class="footer-header">My Account</h3>
						<ul class="list-links">
							<li><a href="#">My Account</a></li>
							<li><a href="#">My Wishlist</a></li>
							<li><a href="#">Compare</a></li>
							<li><a href="#">Checkout</a></li>
							<li><a href="#">Login</a></li>
						</ul>
					</div>
				</div>
				<!-- /footer widget -->

				<div class="clearfix visible-sm visible-xs"></div>

				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h3 class="footer-header">Customer Service</h3>
						<ul class="list-links">
							<li><a href="#">About Us</a></li>
							<li><a href="#">Shiping & Return</a></li>
							<li><a href="#">Shiping Guide</a></li>
							<li><a href="#">FAQ</a></li>
						</ul>
					</div>
				</div>
				<!-- /footer widget -->

				<!-- footer subscribe -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h3 class="footer-header">Stay Connected</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
						<form>
							<div class="form-group">
								<input class="input" placeholder="Enter Email Address">
							</div>
							<button class="primary-btn">Join Newslatter</button>
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