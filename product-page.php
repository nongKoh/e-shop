<?php session_start();
      include_once('connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap" rel="stylesheet">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>E-SHOP HTML Template</title>
	<link href="https://fonts.googleapis.com/css?family=Pridi&display=swap" rel="stylesheet">
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

	

	<!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li><a href="#">Products</a></li>
				<li><a href="#">Category</a></li>
				<li class="active">Product Name Goes Here</li>
			</ul>
		</div>
	</div>
	<!-- /BREADCRUMB -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!--  Product Details -->
				<div class="product product-details clearfix">
					<div class="col-md-6">
						<div id="product-main-view">
							<div class="product-view">
								<img src="./img/main-product01.jpg" alt="">
							</div>
							<div class="product-view">
								<img src="./img/main-product02.jpg" alt="">
							</div>
							<div class="product-view">
								<img src="./img/main-product03.jpg" alt="">
							</div>
							<div class="product-view">
								<img src="./img/main-product04.jpg" alt="">
							</div>
						</div>
						<div id="product-view">
							<div class="product-view">
								<img src="./img/thumb-product01.jpg" alt="">
							</div>
							<div class="product-view">
								<img src="./img/thumb-product02.jpg" alt="">
							</div>
							<div class="product-view">
								<img src="./img/thumb-product03.jpg" alt="">
							</div>
							<div class="product-view">
								<img src="./img/thumb-product04.jpg" alt="">
							</div>
						</div>
						<div style="margin-top:10px;">
									<strong>favorite(89) </strong>
									<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
									<strong>แชร์ : </strong>
									<button class="main-btn icon-btn"><i class="fa fa-facebook"></i></button>
									<button class="main-btn icon-btn"><i class="fa fa-twitter"></i></button>
									<button class="main-btn icon-btn"><i class="fa fa-google-plus"></i></button>
								</div>
					</div>
					<div class="col-md-6">
						<div class="product-body">
							<div class="product-label">
								<span>New</span>
								<span class="sale">-20%</span>
							</div>
							<h2 class="product-name">ชื่อสินค้า</h2>
							<h3 class="product-price">฿80 <del class="product-old-price">฿100</del></h3>
							<div>
								<div class="product-rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o empty"></i>
								</div>
								<a href="#">3 Review(s) / Add Review</a>
							</div>
							<p><strong>จำนวนสินค้า:</strong> 7ชิ้น</p>
							<p><strong>ขายแล้ว:</strong> 6 ชิ้น</p>
							<p style="color:#f8694a"><strong>การจัดส่ง: </strong><i class="fa fa-truck"></i> จัดส่งฟรี เมื่อสั่งซื้อขั้นต่ำ ฿400</p>
							<p style="margin-left: 85px;">ค่าจัดส่ง : ฿0-฿40</P>
							<div class="product-options">
								<ul class="size-option">
									<li><span class="text-uppercase">Size:</span></li>
									<li class="active"><a href="#">S</a></li>
									<li><a href="#">XL</a></li>
									<li><a href="#">SL</a></li>
								</ul>
								<ul class="color-option">
									<li><span class="text-uppercase">Color:</span></li>
									<li class="active"><a href="#" style="background-color:#475984;"></a></li>
									<li><a href="#" style="background-color:#8A2454;"></a></li>
									<li><a href="#" style="background-color:#BF6989;"></a></li>
									<li><a href="#" style="background-color:#9A54D8;"></a></li>
								</ul>
							</div>

							<div class="product-btns">
								<div class="qty-input">
									<span class="text-uppercase">QTY: </span>
									<input class="input" type="number">
								</div>
								<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> เพิ่มไปยังรถเข็น</button>
								
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="product-tab">
							<ul class="tab-nav">
								<li class="active"><a data-toggle="tab" href="#tab1">ข้อมูลสินค้า</a></li>
								<li><a data-toggle="tab" href="#tab0">ข้อมูลร้านค้า</a></li>
								<li><a data-toggle="tab" href="#tab2">Reviews (3)</a></li>
							</ul>
							<div class="tab-content">
								<div id="tab0" class="tab-pane fade in detail">
									<div class="row">
										<div class="col-md-4 col-sm-4">
											<div class="row">
												<div class="col-md-4 ">
													<img src="category/Man-1-icon.png" alt="" class="img-shop">
												</div>
												<div class="col-md-8">
													<div class="shp-dt">
														<div class="shop-name">SHOP NAME</div>
														<div class="btn-shop">
															<button type="button" class="btn" style="color: green; border-color: green; background-color: white;"><i class="fa fa-commenting-o"></i> แชท</button>
															<button type="button" class="btn" style="color: #f8694a; border-color: #f8694a; background-color: white;"><i class="fa fa-shopping-bag"></i> ดูร้านค้า</button>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div Class="col-md-8">
											<div class="row">
												<div class="col-md-4">
													<div style="margin:10px">คะแนน :</div>
													<div style="margin:10px">รายการสินค้า :</div>
												</div>
												<div class="col-md-4">
													<div style="margin:10px">เรทการตอบกลับ :</div>
													<div style="margin:10px">เวลาในการตอบกลับ :</div>
												</div>
												<div class="col-md-4">
													<div style="margin:10px">เข้าร่วมเมื่อ :</div>
													<div style="margin:10px">ผู้ติดตาม :</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div id="tab1" class="tab-pane fade in active">
									<h4>รายละเอียดของสินค้า</h4>
									<p>คำอธิบาย</p>
								</div>
								<div id="tab2" class="tab-pane fade in">

									<div class="row">
										<div class="col-md-6">
											<div class="product-reviews">
												<div class="single-review">
													<div class="review-heading">
														<div><a href="#"><i class="fa fa-user-o"></i> ชื่อ user</a></div>
														<div><a href="#"><i class="fa fa-clock-o"></i> วันเวลาที่ทำการ review</a></div>
														<div><a href="#"><i class="fa fa-thumbs-up"></i> มีประโยชน์กับคุณ?</a></div>

														<div class="review-rating pull-right">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o empty"></i>
														</div>
													</div>
													<div class="review-body">
														<p>ข้อความ</p>
													</div>
												</div>

												<div class="single-review">
													<div class="review-heading">
														<div><a href="#"><i class="fa fa-user-o"></i> John</a></div>
														<div><a href="#"><i class="fa fa-clock-o"></i> 27 DEC 2017 / 8:0 PM</a></div>
														<div class="review-rating pull-right">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o empty"></i>
														</div>
													</div>
													<div class="review-body">
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute
															irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
													</div>
												</div>

												<div class="single-review">
													<div class="review-heading">
														<div><a href="#"><i class="fa fa-user-o"></i> John</a></div>
														<div><a href="#"><i class="fa fa-clock-o"></i> 27 DEC 2017 / 8:0 PM</a></div>
														<div class="review-rating pull-right">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o empty"></i>
														</div>
													</div>
													<div class="review-body">
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute
															irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
													</div>
												</div>

												<ul class="reviews-pages">
													<li class="active">1</li>
													<li><a href="#">2</a></li>
													<li><a href="#">3</a></li>
													<li><a href="#"><i class="fa fa-caret-right"></i></a></li>
												</ul>
											</div>
										</div>
										<div class="col-md-6">
											<h4 class="text-uppercase">Write Your Review</h4>
											<p>Your email address will not be published.</p>
											<form class="review-form">
												<div class="form-group">
													<input class="input" type="text" placeholder="Your Name" />
												</div>
												<div class="form-group">
													<input class="input" type="email" placeholder="Email Address" />
												</div>
												<div class="form-group">
													<textarea class="input" placeholder="Your review"></textarea>
												</div>
												<div class="form-group">
													<div class="input-rating">
														<strong class="text-uppercase">Your Rating: </strong>
														<div class="stars">
															<input type="radio" id="star5" name="rating" value="5" /><label for="star5"></label>
															<input type="radio" id="star4" name="rating" value="4" /><label for="star4"></label>
															<input type="radio" id="star3" name="rating" value="3" /><label for="star3"></label>
															<input type="radio" id="star2" name="rating" value="2" /><label for="star2"></label>
															<input type="radio" id="star1" name="rating" value="1" /><label for="star1"></label>
														</div>
													</div>
												</div>
												<button class="primary-btn">Submit</button>
											</form>
										</div>
									</div>



								</div>
							</div>
						</div>
					</div>

				</div>
				<!-- /Product Details -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

	<!-- section -->
	<div class="sction">
		<div class="cor">
			<!-- container -->
			<div class="container"> 
				<div class="row box-pro-text-heard">
					<div class="more-detail">
					<h4 style="padding-left:15px;">สินค้าขายดีประจำร้าน</h4>
					<span><a href="#">ดูทั้งหมด <i class="fa fa-angle-right"></i></a><span>
				</div>
				</div>				
				<!-- ROW -->
				<div class="box-flex">
					<div class="card-flex">
						<div class="img-flex">
							<img class="img-flex" src="img/download.jpg" alt="">
						</div>
						<div class="item-detail">
							<div class="item-title">
								<h6>ชื่อผลิตภัณฑ์</h6>
							</div>
							<div class="item-price">
								<strong>ราคา :</strong><p>฿ 200</p>
							</div>
						</div>
					</div>
					
					<div class="card-flex">
						<div class="img-flex">
							<img class="img-flex" src="img/AH23C-y.jpg" alt="">
						</div>
						<div class="item-detail">
							<div class="item-title">
								<h6>ชื่อผลิตภัณฑ์</h6>
							</div>
							<div class="item-price">
								<strong>ราคา :</strong><p>฿ 200</p>
							</div>
						</div>
					</div>

					<div class="card-flex">
						<div class="img-flex">
							<img class="img-flex" src="img/download.jpg" alt="">
						</div>
						<div class="item-detail">
							<div class="item-title">
								<h6>ชื่อผลิตภัณฑ์</h6>
							</div>
							<div class="item-price">
								<strong>ราคา :</strong><p>฿ 200</p>
							</div>
						</div>
					</div>

					<div class="card-flex">
						<div class="img-flex">
							<img class="img-flex" src="img/AH23C-y.jpg" alt="">
						</div>
						<div class="item-detail">
							<div class="item-title">
								<h6>ชื่อผลิตภัณฑ์</h6>
							</div>
							<div class="item-price">
								<strong>ราคา :</strong><p>฿ 200</p>
							</div>
						</div>
					</div>

					<div class="card-flex">
						<div class="img-flex">
							<img class="img-flex" src="img/download.jpg" alt="">
						</div>
						<div class="item-detail">
							<div class="item-title">
								<h6>ชื่อผลิตภัณฑ์</h6>
							</div>
							<div class="item-price">
								<strong>ราคา :</strong><p>฿ 200</p>
							</div>
						</div>
					</div>

					<div class="card-flex">
						<div class="img-flex">
							<img class="img-flex" src="img/AH23C-y.jpg" alt="">
						</div>
						<div class="item-detail">
							<div class="item-title">
								<h6>ชื่อผลิตภัณฑ์</h6>
							</div>
							<div class="item-price">
								<strong>ราคา :</strong><p>฿ 200</p>
							</div>
						</div>
					</div>

				<!-- <div id="flex-container">
					<img class="flex-item" src="img/download.jpg" alt="Card image cap">		
					<img class="flex-item" src="img/download.jpg" alt="Card image cap">		
					<img class="flex-item" src="img/download.jpg" alt="Card image cap">		
					<img class="flex-item" src="img/download.jpg" alt="Card image cap">		
				</div> -->
				
			</div>		
			<!-- container  -->
		</div>	
	</div>
	<!-- section -->

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

</body>

</html>
