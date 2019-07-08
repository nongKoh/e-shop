<?php session_start();
      include_once('connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
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

	<!-- HOME -->
	<div id="home">
		<!-- container -->
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="row">
						<div class="promo-add">
							<div class="banner2 banner-1">
								<img src="./img/de664ef99361f4a14051d67aa9df247d.jpg" alt="">
							</div>	
						</div>
						
					</div>	
					<div class="row">
						<div class="promo-add">
							<div class="banner2 banner-1">
								<img src="./img/de664ef99361f4a14051d67aa9df247d.jpg" alt="">
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-8">
					<!-- home wrap -->
				<div class="home-wrap">
					<!-- home slick -->
					<div id="home-slick">
						<!-- banner -->
						<div class="banner banner-1">
							<img src="./img/banner01.jpg" alt="">
							<div class="banner-caption text-center">
								<h1>Bags sale</h1>
								<h3 class="white-color font-weak">Up to 50% Discount</h3>
								<button class="primary-btn">Shop Now</button>
							</div>
						</div>
						<!-- /banner -->

						<!-- banner -->
						<div class="banner banner-1">
							<img src="./img/banner02.jpg" alt="">
							<div class="banner-caption">
								<h1 class="primary-color">HOT DEAL<br><span class="white-color font-weak">Up to 50% OFF</span></h1>
								<button class="primary-btn">Shop Now</button>
							</div>
						</div>
						<!-- /banner -->

						<!-- banner -->
						<div class="banner banner-1">
							<img src="./img/banner03.jpg" alt="">
							<div class="banner-caption">
								<h1 class="white-color">New Product <span>Collection</span></h1>
								<button class="primary-btn">Shop Now</button>
							</div>
						</div>
						<!-- /banner -->
					</div>
					<!-- /home slick -->
				</div>
			<!-- /home wrap -->		
				</div>					
			</div>
		</div>
		<!-- /container -->
	</div>
	<!-- /HOME -->
	<section class="section-catagory">
		<div class="container">
			<div class="row">
				<div class="col-md-12 line">
					
					<h2 class="title">หมวดหมู่</h2>
				</div>
			</div>
			<!-- Row -->
			<!-- Catagory -->
			<div class="felx-row">
				<div class="box-catagory">
				
					<a href=""><div class="flex col-lg-1 col-sm-1 col-md-1">
						<img src="category/Man-1-icon.png" alt="" class="img-catgory">
						<p>เสื้อผ้าแฟชั่นผู้ชาย</p>
					</div></a>

					<a href=""><div class="flex col-lg-1 col-sm-1 col-md-1">
						<img src="category/Sneakers-2-icon.png" alt="" class="img-catgory">
						<p>รองเท้าชาย</p>
					</div></a>

					<a href=""><div class="flex col-lg-1 col-sm-1 col-md-1">
					<img src="category/Mobile-Smartphone-icon.png" alt="" class="img-catgory">
						<p>มือถือและอุปกรณ์เสริม</p>
					</div></a>

					<a href=""><div class="flex col-lg-1 col-sm-1 col-md-1">
					<img src="category/medicine-box-2-icon.png" alt="" class="img-catgory">
						<p>อาหารเสรืม</p>
					</div></a>

					<a href=""><div class="flex col-lg-1 col-sm-1 col-md-1">
					<img src="category/clock-flat.png" alt="" class="img-catgory">
						<p>นาฬิกา</p>
					</div></a>

					<a href=""><div class="flex col-lg-1 col-sm-1 col-md-1">
					<img src="category/iMac-icon.png" alt="" class="img-catgory">
						<p>คอมพิวเตอร์และIT</p>
					</div></a>

					<a href=""><div class="flex col-lg-1 col-sm-1 col-md-1">
					<img src="category/Camera-Front-icon.png" alt="" class="img-catgory">
						<P>กล้องถ่ายรูป</P>
					</div></a>

					<a href=""><div class="flex col-lg-1 col-sm-1 col-md-1">
					<img src="category/792742_sport_512x512.png " alt="sport" class="img-catgory">
						<p>กีฬา</p>
					</div></a>

					<a href=""><div class="flex col-lg-1 col-sm-1 col-md-1">
					<img src="category/Video-Game-Controller-Icon.svg.png" alt="" class="img-catgory">
						<p>เกมแล้วอุปกรณ์</p>
					</div></a>

					<a href=""><div class="flex col-lg-1 col-sm-1 col-md-1">
					<img src="category/Old-Car-2-icon.png" alt="" class="img-catgory">
						<p>ยานยนต์</p>
					</div></a>

					<a href=""><div class="flex col-lg-1 col-sm-1 col-md-1">
					<img src="category/Woman-9-icon.png" alt="" class="img-catgory">
						<p>เสื้อผ้าผู้หญิง</p>
					</div></a>

					<a href=""><div class="flex col-lg-1 col-sm-1 col-md-1">
					<img src="category/images.png" alt="" class="img-catgory">
						<p>ร้องเท้าผู้หญิง</p>
					</div></a>

					<a href=""><div class="flex col-lg-1 col-sm-1 col-md-1">
					<img src="category/Makeup-icon.png" alt="" class="img-catgory">
						<p>ความงาน</p>
					</div></a>

					<a href=""><div class="flex col-lg-1 col-sm-1 col-md-1">
					<img src="category/Baby-Mobile-icon.png" alt="" class="img-catgory">
						<p>แม่และเด็ก</p>
					</div></a>

					<a href=""><div class="flex col-lg-1 col-sm-1 col-md-1">
					<img src="category/home-icon.png" alt="" class="img-catgory">
						<P>บ้านและสวน</P>
					</div></a>

					<a href=""><div class="flex col-lg-1 col-sm-1 col-md-1">
					<img src="category/Bag-Present-icon.png" alt="" class="img-catgory">
						<P>กระเป๋า</P>
					</div></a>

					<a href=""><div class="flex col-lg-1 col-sm-1 col-md-1">
					<img src="category/Engagement-Ring-icon.png" alt="" class="img-catgory">
						<p>เครื่องประดับ</p>
					</div></a>

					<a href=""><div class="flex col-lg-1 col-sm-1 col-md-1">
					<img src="category/drink-4-icon.png" alt="" class="img-catgory">
						<p>อาหารและเครื่องดื่ม</p>
					</div></a>

					<a href=""><div class="flex col-lg-1 col-sm-1 col-md-1">
					<img src="category/img2.png" alt="" class="img-catgory">
						<p>สัตว์เลี้ยง</p>
					</div></a>

					<a href=""><div class="flex col-lg-1 col-sm-1 col-md-1">
					<img src="category/Spongebob-icon.png" alt="" class="img-catgory">
						<p>อื่นๆ</p>
					</div></a>
				
				</div>	
			</div>
		<!-- /Catagory -->
		</div><!-- container -->
	</section><!-- section -->
	
	<!-- section -->
	<div class="sction">
		<div class="cor">
			<!-- container -->
			<div class="container"> 
				<div class="row box-pro-text-heard">
					<h2 style="padding-left:15px;">สินค้าแนะนำ</h2>
				</div>				
				<!-- ROW -->
				<div class="row  " style=" margin-bottom: 30px;" >


					<!-- col-md-2 card-pro-show-->
					<a href="product-page.php">
					<div class="col-md-2 card-pro-show">						
						<img class="img-size " src="img/banner13.jpg" alt="">
						<!-- f-->
						<div class="f">
							Lotus ที่นอน รุ่น Evan หนา 8 นิ้ว ของแถม 10 รายการ ส่งฟรี
						</div>
						<!-- /f-->
						<!-- style="   margin-top: 8px;  margin-left: 3px;"-->
						<div style="   margin-top: 8px;  margin-left: 3px;">
							<!-- จัดส่งฟรี -->
							<span style="font-size: 11px; padding-top: 24px; color: #cc2424;" >
								<i class="fa fa-truck"></i> จัดส่งฟรี เมื่อสั่งซื้อขั้นต่ำ ฿400
							</span>
							<!-- /จัดส่งฟรี -->
						</div>
						<!--/ style="   margin-top: 8px;  margin-left: 3px;"-->
						<!-- div -->
						<div >
							<span ><strong class="tex-pr">฿</strong></span><span class="tex-p">200</span>
						</div>
						<!-- /div -->
					</div>
					</a>
					<!-- col-md-2 card-pro-show-->

					<!-- col-md-2 card-pro-show-->
					<div class="col-md-2 card-pro-show">						
						<img class="img-size " src="img/banner13.jpg" alt="">
						<!-- f-->
						<div class="f">
							Lotus ที่นอน รุ่น Evan หนา 8 นิ้ว ของแถม 10 รายการ ส่งฟรี
						</div>
						<!-- /f-->
						<!-- style="   margin-top: 8px;  margin-left: 3px;"-->
						<div style="   margin-top: 8px;  margin-left: 3px;">
							<!-- จัดส่งฟรี -->
							<span style="font-size: 11px; padding-top: 24px; color: #cc2424;" >
								<i class="fa fa-truck"></i> จัดส่งฟรี เมื่อสั่งซื้อขั้นต่ำ ฿400
							</span>
							<!-- /จัดส่งฟรี -->
						</div>
						<!--/ style="   margin-top: 8px;  margin-left: 3px;"-->
						<!-- div -->
						<div >
							<span ><strong class="tex-pr">฿</strong></span><span class="tex-p">200</span>
						</div>
						<!-- /div -->
					</div>
					<!-- col-md-2 card-pro-show-->

					<!-- col-md-2 card-pro-show-->
					<div class="col-md-2 card-pro-show">						
						<img class="img-size " src="img/banner13.jpg" alt="">
						<!-- f-->
						<div class="f">
							Lotus ที่นอน รุ่น Evan หนา 8 นิ้ว ของแถม 10 รายการ ส่งฟรี
						</div>
						<!-- /f-->
						<!-- style="   margin-top: 8px;  margin-left: 3px;"-->
						<div style="   margin-top: 8px;  margin-left: 3px;">
							<!-- จัดส่งฟรี -->
							<span style="font-size: 11px; padding-top: 24px; color: #cc2424;" >
								<i class="fa fa-truck"></i> จัดส่งฟรี เมื่อสั่งซื้อขั้นต่ำ ฿400
							</span>
							<!-- /จัดส่งฟรี -->
						</div>
						<!--/ style="   margin-top: 8px;  margin-left: 3px;"-->
						<!-- div -->
						<div >
							<span ><strong class="tex-pr">฿</strong></span><span class="tex-p">200</span>
						</div>
						<!-- /div -->
					</div>
					<!-- col-md-2 card-pro-show-->

					<!-- col-md-2 card-pro-show-->
					<div class="col-md-2 card-pro-show">						
						<img class="img-size " src="img/banner13.jpg" alt="">
						<!-- f-->
						<div class="f">
							Lotus ที่นอน รุ่น Evan หนา 8 นิ้ว ของแถม 10 รายการ ส่งฟรี
						</div>
						<!-- /f-->
						<!-- style="   margin-top: 8px;  margin-left: 3px;"-->
						<div style="   margin-top: 8px;  margin-left: 3px;">
							<!-- จัดส่งฟรี -->
							<span style="font-size: 11px; padding-top: 24px; color: #cc2424;" >
								<i class="fa fa-truck"></i> จัดส่งฟรี เมื่อสั่งซื้อขั้นต่ำ ฿400
							</span>
							<!-- /จัดส่งฟรี -->
						</div>
						<!--/ style="   margin-top: 8px;  margin-left: 3px;"-->
						<!-- div -->
						<div >
							<span ><strong class="tex-pr">฿</strong></span><span class="tex-p">200</span>
						</div>
						<!-- /div -->
					</div>
					<!-- col-md-2 card-pro-show-->

					<!-- col-md-2 card-pro-show-->
					<div class="col-md-2 card-pro-show">						
						<img class="img-size " src="img/banner13.jpg" alt="">
						<!-- f-->
						<div class="f">
							Lotus ที่นอน รุ่น Evan หนา 8 นิ้ว ของแถม 10 รายการ ส่งฟรี
						</div>
						<!-- /f-->
						<!-- style="   margin-top: 8px;  margin-left: 3px;"-->
						<div style="   margin-top: 8px;  margin-left: 3px;">
							<!-- จัดส่งฟรี -->
							<span style="font-size: 11px; padding-top: 24px; color: #cc2424;" >
								<i class="fa fa-truck"></i> จัดส่งฟรี เมื่อสั่งซื้อขั้นต่ำ ฿400
							</span>
							<!-- /จัดส่งฟรี -->
						</div>
						<!--/ style="   margin-top: 8px;  margin-left: 3px;"-->
						<!-- div -->
						<div >
							<span ><strong class="tex-pr">฿</strong></span><span class="tex-p">200</span>
						</div>
						<!-- /div -->
					</div>
					<!-- col-md-2 card-pro-show-->

					<!-- col-md-2 card-pro-show-->
					<div class="col-md-2 card-pro-show">						
						<img class="img-size " src="img/banner13.jpg" alt="">
						<!-- f-->
						<div class="f">
							Lotus ที่นอน รุ่น Evan หนา 8 นิ้ว ของแถม 10 รายการ ส่งฟรี
						</div>
						<!-- /f-->
						<!-- style="   margin-top: 8px;  margin-left: 3px;"-->
						<div style="   margin-top: 8px;  margin-left: 3px;">
							<!-- จัดส่งฟรี -->
							<span style="font-size: 11px; padding-top: 24px; color: #cc2424;" >
								<i class="fa fa-truck"></i> จัดส่งฟรี เมื่อสั่งซื้อขั้นต่ำ ฿400
							</span>
							<!-- /จัดส่งฟรี -->
						</div>
						<!--/ style="   margin-top: 8px;  margin-left: 3px;"-->
						<!-- div -->
						<div >
							<span ><strong class="tex-pr">฿</strong></span><span class="tex-p">200</span>
						</div>
						<!-- /div -->
					</div>
					<!-- col-md-2 card-pro-show-->

					<!-- col-md-2 card-pro-show-->
					<div class="col-md-2 card-pro-show">						
						<img class="img-size " src="img/banner13.jpg" alt="">
						<!-- f-->
						<div class="f">
							Lotus ที่นอน รุ่น Evan หนา 8 นิ้ว ของแถม 10 รายการ ส่งฟรี
						</div>
						<!-- /f-->
						<!-- style="   margin-top: 8px;  margin-left: 3px;"-->
						<div style="   margin-top: 8px;  margin-left: 3px;">
							<!-- จัดส่งฟรี -->
							<span style="font-size: 11px; padding-top: 24px; color: #cc2424;" >
								<i class="fa fa-truck"></i> จัดส่งฟรี เมื่อสั่งซื้อขั้นต่ำ ฿400
							</span>
							<!-- /จัดส่งฟรี -->
						</div>
						<!--/ style="   margin-top: 8px;  margin-left: 3px;"-->
						<!-- div -->
						<div >
							<span ><strong class="tex-pr">฿</strong></span><span class="tex-p">200</span>
						</div>
						<!-- /div -->
					</div>
					<!-- col-md-2 card-pro-show-->

					<!-- col-md-2 card-pro-show-->
					<div class="col-md-2 card-pro-show">						
						<img class="img-size " src="img/banner13.jpg" alt="">
						<!-- f-->
						<div class="f">
							Lotus ที่นอน รุ่น Evan หนา 8 นิ้ว ของแถม 10 รายการ ส่งฟรี
						</div>
						<!-- /f-->
						<!-- style="   margin-top: 8px;  margin-left: 3px;"-->
						<div style="   margin-top: 8px;  margin-left: 3px;">
							<!-- จัดส่งฟรี -->
							<span style="font-size: 11px; padding-top: 24px; color: #cc2424;" >
								<i class="fa fa-truck"></i> จัดส่งฟรี เมื่อสั่งซื้อขั้นต่ำ ฿400
							</span>
							<!-- /จัดส่งฟรี -->
						</div>
						<!--/ style="   margin-top: 8px;  margin-left: 3px;"-->
						<!-- div -->
						<div >
							<span ><strong class="tex-pr">฿</strong></span><span class="tex-p">200</span>
						</div>
						<!-- /div -->
					</div>
					<!-- col-md-2 card-pro-show-->

					<!-- col-md-2 card-pro-show-->
					<div class="col-md-2 card-pro-show">						
						<img class="img-size " src="img/banner13.jpg" alt="">
						<!-- f-->
						<div class="f">
							Lotus ที่นอน รุ่น Evan หนา 8 นิ้ว ของแถม 10 รายการ ส่งฟรี
						</div>
						<!-- /f-->
						<!-- style="   margin-top: 8px;  margin-left: 3px;"-->
						<div style="   margin-top: 8px;  margin-left: 3px;">
							<!-- จัดส่งฟรี -->
							<span style="font-size: 11px; padding-top: 24px; color: #cc2424;" >
								<i class="fa fa-truck"></i> จัดส่งฟรี เมื่อสั่งซื้อขั้นต่ำ ฿400
							</span>
							<!-- /จัดส่งฟรี -->
						</div>
						<!--/ style="   margin-top: 8px;  margin-left: 3px;"-->
						<!-- div -->
						<div >
							<span ><strong class="tex-pr">฿</strong></span><span class="tex-p">200</span>
						</div>
						<!-- /div -->
					</div>
					<!-- col-md-2 card-pro-show-->

					
					
					
				</div>	
				<!-- ROW -->
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



	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">Latest Products</h2>
					</div>
				</div>
				<!-- section title -->

				<!-- Product Single -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="product product-single">
						<div class="product-thumb">
							<a href="product-page.php"><button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button></a>
							<img src="./img/product01.jpg" alt="">
						</div>
						<div class="product-body">
							<h3 class="product-price">$32.50</h3>
							<div class="product-rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o empty"></i>
							</div>
							<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
							<div class="product-btns">
								<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
								<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
								<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /Product Single -->

				<!-- Product Single -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="product product-single">
						<div class="product-thumb">
							<div class="product-label">
								<span>New</span>
								<span class="sale">-20%</span>
							</div>
							<a href="product-page.php"><button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button></a>
							<img src="./img/product02.jpg" alt="">
						</div>
						<div class="product-body">
							<h3 class="product-price">$32.50 <del class="product-old-price">$45.00</del></h3>
							<div class="product-rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o empty"></i>
							</div>
							<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
							<div class="product-btns">
								<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
								<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
								<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /Product Single -->

				<!-- Product Single -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="product product-single">
						<div class="product-thumb">
							<div class="product-label">
								<span>New</span>
								<span class="sale">-20%</span>
							</div>
							<a href="product-page.php"><button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button></a>
							<img src="./img/product03.jpg" alt="">
						</div>
						<div class="product-body">
							<h3 class="product-price">$32.50 <del class="product-old-price">$45.00</del></h3>
							<div class="product-rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o empty"></i>
							</div>
							<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
							<div class="product-btns">
								<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
								<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
								<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /Product Single -->

				<!-- Product Single -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="product product-single">
						<div class="product-thumb">
							<div class="product-label">
								<span>New</span>
							</div>
							<a href="product-page.php"><button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button></a>
							<img src="./img/product04.jpg" alt="">
						</div>
						<div class="product-body">
							<h3 class="product-price">$32.50</h3>
							<div class="product-rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o empty"></i>
							</div>
							<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
							<div class="product-btns">
								<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
								<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
								<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /Product Single -->
			</div>
			<!-- /row -->

			<!-- row -->
			<div class="row">
				<!-- banner -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="banner banner-2">
						<img src="./img/banner15.jpg" alt="">
						<div class="banner-caption">
							<h2 class="white-color">NEW<br>COLLECTION</h2>
							<button class="primary-btn">Shop Now</button>
						</div>
					</div>
				</div>
				<!-- /banner -->

				<!-- Product Single -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="product product-single">
						<div class="product-thumb">
							<div class="product-label">
								<span>New</span>
								<span class="sale">-20%</span>
							</div>
							<a href="product-page.php"><button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button></a>
							<img src="./img/product07.jpg" alt="">
						</div>
						<div class="product-body">
							<h3 class="product-price">$32.50 <del class="product-old-price">$45.00</del></h3>
							<div class="product-rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o empty"></i>
							</div>
							<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
							<div class="product-btns">
								<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
								<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
								<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /Product Single -->

				<!-- Product Single -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="product product-single">
						<div class="product-thumb">
							<div class="product-label">
								<span>New</span>
								<span class="sale">-20%</span>
							</div>
							<a href="product-page.php"><button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button></a>
							<img src="./img/product06.jpg" alt="">
						</div>
						<div class="product-body">
							<h3 class="product-price">$32.50 <del class="product-old-price">$45.00</del></h3>
							<div class="product-rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o empty"></i>
							</div>
							<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
							<div class="product-btns">
								<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
								<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
								<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /Product Single -->

				<!-- Product Single -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="product product-single">
						<div class="product-thumb">
							<div class="product-label">
								<span>New</span>
								<span class="sale">-20%</span>
							</div>
							<a href="product-page.php"><button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button></a>
							<img src="./img/product05.jpg" alt="">
						</div>
						<div class="product-body">
							<h3 class="product-price">$32.50 <del class="product-old-price">$45.00</del></h3>
							<div class="product-rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o empty"></i>
							</div>
							<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
							<div class="product-btns">
								<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
								<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
								<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /Product Single -->
			</div>
			<!-- /row -->

			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">Picked For You</h2>
					</div>
				</div>
				<!-- section title -->

				<!-- Product Single -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="product product-single">
						<div class="product-thumb">
							<a href="product-page.php"><button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button></a>
							<img src="./img/product04.jpg" alt="">
						</div>
						<div class="product-body">
							<h3 class="product-price">$32.50</h3>
							<div class="product-rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o empty"></i>
							</div>
							<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
							<div class="product-btns">
								<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
								<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
								<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /Product Single -->

				<!-- Product Single -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="product product-single">
						<div class="product-thumb">
							<div class="product-label">
								<span>New</span>
							</div>
							<a href="product-page.php"><button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button></a>
							<img src="./img/product03.jpg" alt="">
						</div>
						<div class="product-body">
							<h3 class="product-price">$32.50</h3>
							<div class="product-rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o empty"></i>
							</div>
							<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
							<div class="product-btns">
								<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
								<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
								<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /Product Single -->

				<!-- Product Single -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="product product-single">
						<div class="product-thumb">
							<div class="product-label">
								<span class="sale">-20%</span>
							</div>
							<a href="product-page.php"><button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button></a>
							<img src="./img/product02.jpg" alt="">
						</div>
						<div class="product-body">
							<h3 class="product-price">$32.50 <del class="product-old-price">$45.00</del></h3>
							<div class="product-rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o empty"></i>
							</div>
							<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
							<div class="product-btns">
								<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
								<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
								<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /Product Single -->

				<!-- Product Single -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="product product-single">
						<div class="product-thumb">
							<div class="product-label">
								<span>New</span>
								<span class="sale">-20%</span>
							</div>
							<a href="product-page.php"><button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button></a>
							<img src="./img/product01.jpg" alt="">
						</div>
						<div class="product-body">
							<h3 class="product-price">$32.50 <del class="product-old-price">$45.00</del></h3>
							<div class="product-rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o empty"></i>
							</div>
							<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
							<div class="product-btns">
								<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
								<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
								<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /Product Single -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

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
	<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
</body>

</html>
