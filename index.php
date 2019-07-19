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
			
				<div class="box-catagory">
					<a href="category-type.php?type=1"><div class="flex ">
						<img src="category/Man-1-icon.png" alt="" class="img-catgory">
						<p class="hide-text-cat">เสื้อผ้าแฟชั่นผู้ชาย</p>
					</div></a>

					<a href="category-type.php?type=2"><div class="flex ">
						<img src="category/Sneakers-2-icon.png" alt="" class="img-catgory">
						<p class="hide-text-cat">รองเท้าชาย</p>
					</div></a>

					<a href="category-type.php?type=3"><div class="flex ">
					<img src="category/Mobile-Smartphone-icon.png" alt="" class="img-catgory">
						<p class="hide-text-cat">มือถือและอุปกรณ์เสริม</p>
					</div></a>

					<a href="category-type.php?type=4"><div class="flex ">
					<img src="category/medicine-box-2-icon.png" alt="" class="img-catgory">
						<p class="hide-text-cat">อาหารเสรืม</p>
					</div></a>

					<a href="category-type.php?type=5"><div class="flex ">
					<img src="category/clock-flat.png" alt="" class="img-catgory">
						<p class="hide-text-cat">นาฬิกา</p>
					</div></a>

					<a href="category-type.php?type=6"><div class="flex ">
					<img src="category/iMac-icon.png" alt="" class="img-catgory">
						<p class="hide-text-cat">คอมพิวเตอร์และIT</p>
					</div></a>

					<a href="category-type.php?type=7"><div class="flex ">
					<img src="category/Camera-Front-icon.png" alt="" class="img-catgory">
						<P class="hide-text-cat">กล้องถ่ายรูป</P>
					</div></a>

					<a href="category-type.php?type=8"><div class="flex ">
					<img src="category/792742_sport_512x512.png " alt="sport" class="img-catgory">
						<p class="hide-text-cat" >กีฬา</p>
					</div></a>

					<a href="category-type.php?type=9"><div class="flex ">
					<img src="category/Video-Game-Controller-Icon.svg.png" alt="" class="img-catgory">
						<p class="hide-text-cat">เกมและอุปกรณ์</p>
					</div></a>

					<a href="category-type.php?type=10"><div class="flex ">
					<img src="category/Old-Car-2-icon.png" alt="" class="img-catgory">
						<p class="hide-text-cat">ยานยนต์</p>
					</div></a>

					<a href="category-type.php?type=11"><div class="flex ">
					<img src="category/Woman-9-icon.png" alt="" class="img-catgory">
						<p class="hide-text-cat">เสื้อผ้าผู้หญิง</p>
					</div></a>

					<a href="category-type.php?type=12"><div class="flex ">
					<img src="category/images.png" alt="" class="img-catgory">
						<p class="hide-text-cat">ร้องเท้าผู้หญิง</p>
					</div></a>

					<a href="category-type.php?type=13"><div class="flex ">
					<img src="category/Makeup-icon.png" alt="" class="img-catgory">
						<p class="hide-text-cat">ความงาน</p>
					</div></a>

					<a href="category-type.php?type=14"><div class="flex ">
					<img src="category/Baby-Mobile-icon.png" alt="" class="img-catgory">
						<p class="hide-text-cat">แม่และเด็ก</p>
					</div></a>

					<a href="category-type.php?type=15"><div class="flex ">
					<img src="category/home-icon.png" alt="" class="img-catgory">
						<P class="hide-text-cat">บ้านและสวน</P>
					</div></a>

					<a href="category-type.php?type=16"><div class="flex ">
					<img src="category/Bag-Present-icon.png" alt="" class="img-catgory">
						<P class="hide-text-cat">กระเป๋า</P>
					</div></a>

					<a href="category-type.php?type=17"><div class="flex ">
					<img src="category/Engagement-Ring-icon.png" alt="" class="img-catgory">
						<p class="hide-text-cat">เครื่องประดับ</p>
					</div></a>

					<a href="category-type.php?type=18"><div class="flex ">
					<img src="category/drink-4-icon.png" alt="" class="img-catgory">
						<p class="hide-text-cat">อาหารและเครื่องดื่ม</p>
					</div></a>

					<a href="category-type.php?type=19"><div class="flex ">
					<img src="category/img2.png" alt="" class="img-catgory">
						<p class="hide-text-cat">สัตว์เลี้ยง</p>
					</div></a>

					<a href="category-type.php?type=20"><div class="flex ">
					<img src="category/Spongebob-icon.png" alt="" class="img-catgory">
						<p class="hide-text-cat">อื่นๆ</p>
					</div></a>
				
				</div>	
			
		<!-- /Catagory -->
		</div><!-- container -->
		
	</section><!-- section -->



	
	
	


	<!-- section สินค้าแนะนำ -->
	<div class="sction">
		<div class="cor">
			<!-- container -->
			<div class="container"> 
				<div class="row box-pro-text-heard">
					<h2 style="padding-left:15px;">สินค้า</h2>
				</div>				
				<!-- ROW -->
				<div class="row  " style=" margin-bottom: 30px;" >


					<div class="flex-into">


						<?php
						$sql_show ="select * from product";
						$result_show = mysqli_query($con,$sql_show) or die(mysql_error());
						while($rs10 = mysqli_fetch_array($result_show)) {}
						
						?>
						<a href="product-page.php">
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
						</a>

						

						
						


					</div>

					
					




					
					
					
					</div>	
				<!-- ROW -->
				
				
			</div>		
			<!-- container  -->
		</div>	
	</div>
	<!-- /section สินค้าแนะนำ -->



	
	




	




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
