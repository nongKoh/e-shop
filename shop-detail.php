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
				<li class="active">หน้าร้านค้า</li>
			</ul>
		</div>
	</div>
    <!-- /BREADCRUMB -->


<!-- /SHOPHEAD -->
<div class="container">
    <div class="shop-head">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="row card-shop">
                    <div class="card-detail">
                    <div class="col-md-4 ">
                        <p class="shpimg"><img src="category/Man-1-icon.png" alt="" class="img-shop1"></p>
                    </div>
                    <div class="col-md-8">
                        <div class="shp-dt">
                            <div class="shop-name"><strong>SHOP NAME</strong></div>
                            <div class="btn-shop">
                                <button type="button" class="btn" style="color: green; border-color: green; background-color: white;"><i class="fa fa-commenting-o"></i> แชท</button>
                                <button type="button" class="btn" style="color: #f8694a; border-color: #f8694a; background-color: white;"><i class="fa fa-plus"></i> ติดตาม</button>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div Class="col-md-8">
                <div class="row">
                    <div class="status">
                        <div class="col-md-4">
                            <div style="margin:10px"><i class="fa fa-star"></i> คะแนน :</div>
                            <div style="margin:10px"><i class="fa fa-shopping-bag"></i> รายการสินค้า :</div>
                        </div>
                        <div class="col-md-4">
                            <div style="margin:10px"><i class="fa fa-commenting-o"></i> เรทการตอบกลับ :</div>
                            <div style="margin:10px"><i class="fa fa-users"></i> ผู้ติดตาม :</div>
                        </div>
                        <div class="col-md-4">
                            <div style="margin:10px"><i class="fa fa-check-circle-o"></i> เข้าร่วมเมื่อ :</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /SHOPHEAD -->


<!-- /SHOPDETAIL -->
<div class="container">
    <div class="shop-detail">                           
            <strong>เกี่ยวกับร้านค้า</strong>
            
            <div class="shop-detail-items">    
            <!-- Image Slide -->
            <div class="shop-detail-item">
                <div class="shop-slide">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                        <div class="item active">
                            <img src="img/banner01.jpg" alt="Los Angeles" style="width:100%;">
                        </div>

                        <div class="item">
                            <img src="img/banner02.jpg" alt="Chicago" style="width:100%;">
                        </div>
                        
                        <div class="item">
                            <img src="img/banner03.jpg" alt="New york" style="width:100%;">
                        </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <i class="fa fa-angle-left" style="margin-top: 165%;"></i>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <i class="fa fa-angle-right" style="margin-top: 165%;"></i>
                        </a>
                    </div>
                </div>
            </div>   
            <!-- Image Slide -->

            <!-- Shop detail -->
            <div class="shop-detail-item">
                <div class="detail1">
                    <strong>SHOP NAME</strong>
                </div>
                <div class="detail2">
                    <span>
                        #รองรับการชำระเงินปลายทาง
                        [[ โค้ดสำหรับลูกค้าใหม่ ]] สั่งผ่านแอพ Shopee ครั้งแรก!!
                        ⚡ใส่โค้ด "NEWPBHRP" ลด 80 บ. (เมื่อสั่งซื้อขั้นต่ำ 200 บ.)
                        สินค้ามีพร้อมส่งจ้า🔥
                        ฟรีไซต์ มีสีดำ กรม เทาเข้ม เทาอ่อน เทาควัน  แดง น้ำตาลเข้ม น้ำตาลอ่อน น้ำเงิน กากี เขียวทหาร 
                        📍อยากได้สีไหนกดสั่งทีละสี ระบบจะรวมเป็น 1 ออเดอร์ให้อัตโนมัติจ้า 
                        👉🏻แนะนำสั่งซื้อขั้นต่ำ 300 บาท รับส่วนลด 40 บาทจากเคอรี่เลยจ้า❗️❗️
                    </span>
                </div>
            </div>
            <!-- Shop detail -->
            </div>

    </div>
</div>

<!-- /SHOPDETAIL -->


<!-- section สินค้าแนะนำ -->
<div class="sction">
		<div class="cor">
			<!-- container -->
			<div class="container"> 
				<div class="row box-pro-text-heard">
					<h3 style="padding-left:15px;">โปรโมชั่นลดราคา</h3>
				</div>				
				<!-- ROW -->
				<div class="row  " style=" margin-bottom: 30px;" >


					<div class="flex-into">

						
						<div class="box-flex">
								<span class="discount"><span class="text-dis-white">ส่วนลด<br> </span>30%</span>
								<img class="img-size " src="img/banner13.jpg" alt="">
								<!-- f-->
								<div class="f">
									Lotus ที่นอน รุ่น Evan หนา 8 นิ้ว ของแถม 10 รายการ ส่งฟรี
								</div>
								<!-- /f-->
								<!-- style="   margin-top: 8px;  margin-left: 3px;"-->
								<div style="   margin-top: 8px;  margin-left: 3px;">
									<!-- จัดส่งฟรี -->
									<span class="font-1-2-1"  >
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

						<div class="box-flex">
								<span class="discount"><span class="text-dis-white">ส่วนลด<br> </span>30%</span>
								<img class="img-size " src="img/banner13.jpg" alt="">
								<!-- f-->
								<div class="f">
									Lotus ที่นอน รุ่น Evan หนา 8 นิ้ว ของแถม 10 รายการ ส่งฟรี
								</div>
								<!-- /f-->
								<!-- style="   margin-top: 8px;  margin-left: 3px;"-->
								<div style="   margin-top: 8px;  margin-left: 3px;">
									<!-- จัดส่งฟรี -->
									<span class="font-1-2-1"  >
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

						<div class="box-flex">
								<span class="discount"><span class="text-dis-white">ส่วนลด<br> </span>30%</span>
								<img class="img-size " src="img/banner13.jpg" alt="">
								<!-- f-->
								<div class="f">
									Lotus ที่นอน รุ่น Evan หนา 8 นิ้ว ของแถม 10 รายการ ส่งฟรี
								</div>
								<!-- /f-->
								<!-- style="   margin-top: 8px;  margin-left: 3px;"-->
								<div style="   margin-top: 8px;  margin-left: 3px;">
									<!-- จัดส่งฟรี -->
									<span class="font-1-2-1"  >
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

						<div class="box-flex">
								<span class="discount"><span class="text-dis-white">ส่วนลด<br> </span>30%</span>
								<img class="img-size " src="img/banner13.jpg" alt="">
								<!-- f-->
								<div class="f">
									Lotus ที่นอน รุ่น Evan หนา 8 นิ้ว ของแถม 10 รายการ ส่งฟรี
								</div>
								<!-- /f-->
								<!-- style="   margin-top: 8px;  margin-left: 3px;"-->
								<div style="   margin-top: 8px;  margin-left: 3px;">
									<!-- จัดส่งฟรี -->
									<span class="font-1-2-1"  >
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

						<div class="box-flex">
								<span class="discount"><span class="text-dis-white">ส่วนลด<br> </span>30%</span>
								<img class="img-size " src="img/banner13.jpg" alt="">
								<!-- f-->
								<div class="f">
									Lotus ที่นอน รุ่น Evan หนา 8 นิ้ว ของแถม 10 รายการ ส่งฟรี
								</div>
								<!-- /f-->
								<!-- style="   margin-top: 8px;  margin-left: 3px;"-->
								<div style="   margin-top: 8px;  margin-left: 3px;">
									<!-- จัดส่งฟรี -->
									<span class="font-1-2-1"  >
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
                        
                        <div class="box-flex">
								<span class="discount"><span class="text-dis-white">ส่วนลด<br> </span>30%</span>
								<img class="img-size " src="img/banner13.jpg" alt="">
								<!-- f-->
								<div class="f">
									Lotus ที่นอน รุ่น Evan หนา 8 นิ้ว ของแถม 10 รายการ ส่งฟรี
								</div>
								<!-- /f-->
								<!-- style="   margin-top: 8px;  margin-left: 3px;"-->
								<div style="   margin-top: 8px;  margin-left: 3px;">
									<!-- จัดส่งฟรี -->
									<span class="font-1-2-1"  >
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
                    
                    
                    </div>

                
                </div>	
				<!-- ROW -->
				
				
			</div>		
			<!-- container  -->
		</div>	
	</div>
    <!-- /section สินค้าแนะนำ -->
    

    <!-- section สินค้าภายในร้าน -->
<div class="sction">
		<div class="cor">
			<!-- container -->
			<div class="container"> 
				<div class="row box-pro-text-heard">
					<h3 style="padding-left:15px;">สินค้าภายในร้าน</h3>
				</div>				
				<!-- ROW -->
				<div class="row  " style=" margin-bottom: 30px;" >


					<div class="flex-into">

						
						<div class="box-flex">
								<img class="img-size " src="img/banner13.jpg" alt="">
								<!-- f-->
								<div class="f">
									Lotus ที่นอน รุ่น Evan หนา 8 นิ้ว ของแถม 10 รายการ ส่งฟรี
								</div>
								<!-- /f-->
								<!-- style="   margin-top: 8px;  margin-left: 3px;"-->
								<div style="   margin-top: 8px;  margin-left: 3px;">
									<!-- จัดส่งฟรี -->
									<span class="font-1-2-1"  >
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

						<div class="box-flex">
								<img class="img-size " src="img/banner13.jpg" alt="">
								<!-- f-->
								<div class="f">
									Lotus ที่นอน รุ่น Evan หนา 8 นิ้ว ของแถม 10 รายการ ส่งฟรี
								</div>
								<!-- /f-->
								<!-- style="   margin-top: 8px;  margin-left: 3px;"-->
								<div style="   margin-top: 8px;  margin-left: 3px;">
									<!-- จัดส่งฟรี -->
									<span class="font-1-2-1"  >
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

						<div class="box-flex">
								<img class="img-size " src="img/banner13.jpg" alt="">
								<!-- f-->
								<div class="f">
									Lotus ที่นอน รุ่น Evan หนา 8 นิ้ว ของแถม 10 รายการ ส่งฟรี
								</div>
								<!-- /f-->
								<!-- style="   margin-top: 8px;  margin-left: 3px;"-->
								<div style="   margin-top: 8px;  margin-left: 3px;">
									<!-- จัดส่งฟรี -->
									<span class="font-1-2-1"  >
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

						<div class="box-flex">
								<img class="img-size " src="img/banner13.jpg" alt="">
								<!-- f-->
								<div class="f">
									Lotus ที่นอน รุ่น Evan หนา 8 นิ้ว ของแถม 10 รายการ ส่งฟรี
								</div>
								<!-- /f-->
								<!-- style="   margin-top: 8px;  margin-left: 3px;"-->
								<div style="   margin-top: 8px;  margin-left: 3px;">
									<!-- จัดส่งฟรี -->
									<span class="font-1-2-1"  >
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

						<div class="box-flex">
								<img class="img-size " src="img/banner13.jpg" alt="">
								<!-- f-->
								<div class="f">
									Lotus ที่นอน รุ่น Evan หนา 8 นิ้ว ของแถม 10 รายการ ส่งฟรี
								</div>
								<!-- /f-->
								<!-- style="   margin-top: 8px;  margin-left: 3px;"-->
								<div style="   margin-top: 8px;  margin-left: 3px;">
									<!-- จัดส่งฟรี -->
									<span class="font-1-2-1"  >
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
                        
                        <div class="box-flex">
								<img class="img-size " src="img/banner13.jpg" alt="">
								<!-- f-->
								<div class="f">
									Lotus ที่นอน รุ่น Evan หนา 8 นิ้ว ของแถม 10 รายการ ส่งฟรี
								</div>
								<!-- /f-->
								<!-- style="   margin-top: 8px;  margin-left: 3px;"-->
								<div style="   margin-top: 8px;  margin-left: 3px;">
									<!-- จัดส่งฟรี -->
									<span class="font-1-2-1"  >
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
                    
                    
                    </div>

                
                </div>	
				<!-- ROW -->
				
				
			</div>		
			<!-- container  -->
		</div>	
	</div>
	<!-- /section สินค้าภายในร้าน -->
    








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
