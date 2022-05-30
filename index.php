<?php
include("dbconnect.php");
$sql="SELECT * FROM food_tb  LIMIT 5";
$result=mysqli_query($conn,$sql);
	




?>
<!DOCTYPE html>
<html>
<head>
	<title>TRIVOR - Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/purzai.css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/aos.css">
    <link rel="icon" type="image/png" href="images/favicon.png">
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/aos.js"></script>
</head>
<body>
	<!-- HEADER START -->
		<div class="header">
			<div class="container">
				<div class="menu_bar_spc">
					<div class="menu_bar" id="menuBar">
						<div id="bar"></div>
						<div id="bar"></div>
						<div id="bar"></div>
						<div id="bar"></div>
					</div>
				</div>
				<div class="logo_spc">
					<img src="images/logo.png" class="p_logo">
				</div>
				<div class="menu_spc">
					<p class="header_contact">
						<img src="images/mail.png" class="h_logo">
						<span class="h_detail">+971 4 556222</span>
					</p>
					<p class="header_contact">
						<img src="images/whatsapp.png" class="h_logo">
						<span class="h_detail">+971 8 2563322</span>
					</p>

					<ul class="header_menu" id="headerMenu">
						<li><a href="index.php" class="crs">Home</a></li>
						<li><a href="about.php">About Us</a></li>
						<li><a href="products.php">Products</a></li>
						
						<li><a href="contact.php">Contact Us</a></li>
						<li><a href="login.php">Admin</a></li>
					</ul>
				</div>
			</div>
		</div>
	<!-- HEADER STOP -->

	<!-- BANNER START -->
		<div class="banner">
			<div class="container">
				<div class="owl-carousel owl-theme" id="banner">
					<div class="item">
						<div class="row">
							<div class="col-lg-6">
								<div class="banner_text_box">
									<h1>Delicious And Quality Food At Your Finger Tip</h1>
									<a href="#">Start Ordering<i class="fa fa-arrow-right"></i></a>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="banner_product_box">
									<img src="images/banner_product_1.png" class="banner_product">
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="row">
							<div class="col-lg-6">
								<div class="banner_text_box">
									<h1>Tired Of Eating Local Food? Try Trivor Food Service</h1>
									<a href="#">Start Ordering<i class="fa fa-arrow-right"></i></a>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="banner_product_box">
									<img src="images/banner_product_2.png" class="banner_product">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<!-- BANNER STOP -->

	<!-- TRENDING PRODUCTS PANEL START -->
		<div class="trending_products_panel_start">
			<div class="container">
				<h1>Hot Deals</h1>
				<div class="trending_products_space">
					<div class="owl-carousel owl-theme" id="trendindProducts">
						<?php

						while($row=$result->fetch_assoc())
{
	?>
						<div class="item">
							<div class="product_box">
								
								<div class="cart_box">
									<a href="#">
										<i class="fa fa-shopping-cart"></i>
									</a>
								</div>
								<img src=<?php echo "".'images/'.$row['image']."";?> ""  width='260' height='260'>
								</div>
								<div class="product_des_box">
									<span class="price_box"><?php echo $row['price'];?><br>RS</span>
									<h3><?php echo $row['fname'];?></h3>
									<p>Manufacture : <?php echo $row['bname'];?></p>
									<?php echo"<a href=buy.php?id=".$row['id']." class='buy-Btn'>Buy Now <i class='fa fa-shopping-cart'></i></a>"?>
							</div>
						</div>
							<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>
					
					
		
	<!-- TRENDING PRODUCTS PANEL STOP -->

	<!-- ONLINE SHOP PANEL START -->
		<!--<div class="online_shop_panel">
			<div class="container">
				<h1>Online Food Service<br>easy with <span>TRIVOR</span></h1>
				<button>Start Ordering<i class="fa fa-arrow-right"></i></button>
			</div>
		</div>-->
	<!-- ONLINE SHOP PANEL STOP -->

	<!-- PRODUCTS PANEL START -->
		<!--<div class="product_panel">
			<div class="container">
				<h1>Our Products</h1>
				<div class="products_space">
					<div class="row min-row">
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6  col-pad">
							<div class="product_marg">
								<div class="product_box">
									<span class="category_box">New Arrival</span>
									<div class="cart_box">
										<a href="#">
											<i class="fa fa-shopping-cart"></i>
										</a>
									</div>
									<img src="images/products_1.jpg" class="product_img">
								</div>
								<div class="product_des_box">
									<span class="price_box">250<br>AED</span>
									<h3>Product Name</h3>
									<p>Brand Name : Apple</p>
									<a class="buy-Btn">Buy Now <i class="fa fa-shopping-cart"></i></a>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-pad">
							<div class="product_marg">
								<div class="product_box">
									<div class="cart_box">
										<a href="#">
											<i class="fa fa-shopping-cart"></i>
										</a>
									</div>
									<img src="images/products_2.jpg" class="product_img">
								</div>
								<div class="product_des_box">
									<span class="price_box">150<br>AED</span>
									<h3>Product Name</h3>
									<p>Brand Name : Apple</p>
									<a class="buy-Btn">Buy Now <i class="fa fa-shopping-cart"></i></a>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-pad">
							<div class="product_marg">
								<div class="product_box">
									<div class="cart_box">
										<a href="#">
											<i class="fa fa-shopping-cart"></i>
										</a>
									</div>
									<img src="images/products_3.jpg" class="product_img">
								</div>
								<div class="product_des_box">
									<span class="price_box">550<br>AED</span>
									<h3>Product Name</h3>
									<p>Brand Name : Apple</p>
									<a class="buy-Btn">Buy Now <i class="fa fa-shopping-cart"></i></a>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-pad">
							<div class="product_marg">
								<div class="product_box">
									<span class="category_box sold">Sold Out</span>
									<div class="cart_box">
										<a href="#">
											<i class="fa fa-shopping-cart"></i>
										</a>
									</div>
									<img src="images/products_4.jpg" class="product_img">
								</div>
								<div class="product_des_box">
									<span class="price_box">250<br>AED</span>
									<h3>Product Name</h3>
									<p>Brand Name : Apple</p>
									<a class="buy-Btn">Buy Now <i class="fa fa-shopping-cart"></i></a>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-pad">
							<div class="product_marg">
								<div class="product_box">
									<span class="category_box">New Arrival</span>
									<div class="cart_box">
										<a href="#">
											<i class="fa fa-shopping-cart"></i>
										</a>
									</div>
									<img src="images/products_1.jpg" class="product_img">
								</div>
								<div class="product_des_box">
									<span class="price_box">250<br>AED</span>
									<h3>Product Name</h3>
									<p>Brand Name : Apple</p>
									<a class="buy-Btn">Buy Now <i class="fa fa-shopping-cart"></i></a>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-pad">
							<div class="product_marg">
								<div class="product_box">
									<div class="cart_box">
										<a href="#">
											<i class="fa fa-shopping-cart"></i>
										</a>
									</div>
									<img src="images/products_2.jpg" class="product_img">
								</div>
								<div class="product_des_box">
									<span class="price_box">150<br>AED</span>
									<h3>Product Name</h3>
									<p>Brand Name : Apple</p>
									<a class="buy-Btn">Buy Now <i class="fa fa-shopping-cart"></i></a>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-pad">
							<div class="product_marg">
								<div class="product_box">
									<div class="cart_box">
										<a href="#">
											<i class="fa fa-shopping-cart"></i>
										</a>
									</div>
									<img src="images/products_3.jpg" class="product_img">
								</div>
								<div class="product_des_box">
									<span class="price_box">550<br>AED</span>
									<h3>Product Name</h3>
									<p>Brand Name : Apple</p>
									<a class="buy-Btn">Buy Now <i class="fa fa-shopping-cart"></i></a>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-pad">
							<div class="product_marg">
								<div class="product_box">
									<span class="category_box sold">Sold Out</span>
									<div class="cart_box">
										<a href="#">
											<i class="fa fa-shopping-cart"></i>
										</a>
									</div>
									<img src="images/products_4.jpg" class="product_img">
								</div>
								<div class="product_des_box">
									<span class="price_box">250<br>AED</span>
									<h3>Product Name</h3>
									<p>Brand Name : Apple</p>
									<a class="buy-Btn">Buy Now <i class="fa fa-shopping-cart"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>-->
	<!-- PRODUCTS PANEL STOP -->

	<!-- WHATSAPP PANEL START -->
		 <div class="whatsapp_panel">
			<div class="container">
				<h1>Make your online<br>footprint <span>memorable.</span></h1>
				<p>Lorem Ipsum is simply dummy text of the printing and<br>typesetting industry. Lorem Ipsum has been the industry's<br>standard dummy text ever </p>
				<span class="chat"><img src="images/chat.png" class="chat-icon"><h3 class="chat-num">+971 4 2562322</h3></span>
			</div>
		</div>
	<!-- WHATSAPP PANEL STOP -->

	<!-- ACCESSORIES PANEL START -->
		<!--<div class="accessories_panel">
			<div class="container">
				<h1>Accessories</h1>
				<div class="accessories_space">
					<div class="row min-row">
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-pad">
							<div class="product_marg">
								<div class="product_box">
									<span class="category_box">New Arrival</span>
									<div class="cart_box">
										<a href="#">
											<i class="fa fa-shopping-cart"></i>
										</a>
									</div>
									<img src="images/accessories_1.jpg" class="product_img">
								</div>
								<div class="product_des_box">
									<span class="price_box">250<br>AED</span>
									<h3>Product Name</h3>
									<p>Brand Name : Apple</p>
									<a class="buy-Btn">Buy Now <i class="fa fa-shopping-cart"></i></a>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-pad">
							<div class="product_marg">
								<div class="product_box">
									<div class="cart_box">
										<a href="#">
											<i class="fa fa-shopping-cart"></i>
										</a>
									</div>
									<img src="images/accessories_2.jpg" class="product_img">
								</div>
								<div class="product_des_box">
									<span class="price_box">150<br>AED</span>
									<h3>Product Name</h3>
									<p>Brand Name : Apple</p>
									<a class="buy-Btn">Buy Now <i class="fa fa-shopping-cart"></i></a>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-pad">
							<div class="product_marg">
								<div class="product_box">
									<div class="cart_box">
										<a href="#">
											<i class="fa fa-shopping-cart"></i>
										</a>
									</div>
									<img src="images/accessories_3.jpg" class="product_img">
								</div>
								<div class="product_des_box">
									<span class="price_box">550<br>AED</span>
									<h3>Product Name</h3>
									<p>Brand Name : Apple</p>
									<a class="buy-Btn">Buy Now <i class="fa fa-shopping-cart"></i></a>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-pad">
							<div class="product_marg">
								<div class="product_box">
									<span class="category_box sold">Sold Out</span>
									<div class="cart_box">
										<a href="#">
											<i class="fa fa-shopping-cart"></i>
										</a>
									</div>
									<img src="images/accessories_4.jpg" class="product_img">
								</div>
								<div class="product_des_box">
									<span class="price_box">250<br>AED</span>
									<h3>Product Name</h3>
									<p>Brand Name : Apple</p>
									<a class="buy-Btn">Buy Now <i class="fa fa-shopping-cart"></i></a>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-pad">
							<div class="product_marg">
								<div class="product_box">
									<span class="category_box">New Arrival</span>
									<div class="cart_box">
										<a href="#">
											<i class="fa fa-shopping-cart"></i>
										</a>
									</div>
									<img src="images/accessories_3.jpg" class="product_img">
								</div>
								<div class="product_des_box">
									<span class="price_box">250<br>AED</span>
									<h3>Product Name</h3>
									<p>Brand Name : Apple</p>
									<a class="buy-Btn">Buy Now <i class="fa fa-shopping-cart"></i></a>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-pad">
							<div class="product_marg">
								<div class="product_box">
									<div class="cart_box">
										<a href="#">
											<i class="fa fa-shopping-cart"></i>
										</a>
									</div>
									<img src="images/accessories_2.jpg" class="product_img">
								</div>
								<div class="product_des_box">
									<span class="price_box">150<br>AED</span>
									<h3>Product Name</h3>
									<p>Brand Name : Apple</p>
									<a class="buy-Btn">Buy Now <i class="fa fa-shopping-cart"></i></a>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-pad">
							<div class="product_marg">
								<div class="product_box">
									<div class="cart_box">
										<a href="#">
											<i class="fa fa-shopping-cart"></i>
										</a>
									</div>
									<img src="images/accessories_4.jpg" class="product_img">
								</div>
								<div class="product_des_box">
									<span class="price_box">550<br>AED</span>
									<h3>Product Name</h3>
									<p>Brand Name : Apple</p>
									<a class="buy-Btn">Buy Now <i class="fa fa-shopping-cart"></i></a>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-pad">
							<div class="product_marg">
								<div class="product_box">
									<span class="category_box sold">Sold Out</span>
									<div class="cart_box">
										<a href="#">
											<i class="fa fa-shopping-cart"></i>
										</a>
									</div>
									<img src="images/accessories_1.jpg" class="product_img">
								</div>
								<div class="product_des_box">
									<span class="price_box">250<br>AED</span>
									<h3>Product Name</h3>
									<p>Brand Name : Apple</p>
									<a class="buy-Btn">Buy Now <i class="fa fa-shopping-cart"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>-->
	<!-- ACCESSORIES PANEL STOP -->

	<!-- FOOTER PANEL START -->
		<div class="footer_panel">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="footer-1">
							<img src="images/footer-logo.png">
							<p class="footer_para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="footer-2">
							<h3 class="footer_head">Quick Links</h3>
							<span class="link_start">
								<a href="index.php" class="footer_link">Home</a>
								
								<a href="about.php" class="footer_link">About Us</a>
								<a href="contact.php" class="footer_link">Contact Us</a>
								<a href="products.php" class="footer_link">Products</a>
							</span>
						</div>
					</div>
					<div class="col-lg-2 col-md-6">
						<div class="footer-3">
							<h3 class="footer_head">Follow us on</h3>
							<span class="link_start">
								<a href="#" class="footer_link">Facebook</a>
								<a href="#" class="footer_link">Twitter</a>
								<a href="#" class="footer_link">Instagram</a>
							</span>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="footer-4">
							<h3 class="footer_head">Contact Info</h3>
							<span class="link_start">
								<li class="footer-contact">
									<img src="images/footer-location.png" class="footer-icon">
									Shop No.7 and 8, Al Zarouni Bldg 117-212 Al Murar, Naif, Deira PO Box 21659 Dubai- UAE
								</li>
								<li class="footer-contact">
									<img src="images/footer-call.png" class="footer-icon">
									+971 4 2562322  /  fax : +971 4 2562388
								</li>
								<li class="footer-contact-2">
									<img src="images/footer-mail.png" class="footer-icon">
									info@purzai.ae
								</li>
							</span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="footer_content_box">
							<h3 class="footer_head_2">SHIPPING WORLD WIDE</h3>
							<p class="sub_head">Neque porro quisquam est</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="footer_content_box2">
							<h3 class="footer_head_2">PROFESSIONAL SUPPORT 24/7</h3>
							<p class="sub_head">Neque porro quisquam est</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="footer_content_box3">
							<h3 class="footer_head_2">ASSURED LOWEST PRICE</h3>
							<p class="sub_head">Neque porro quisquam est</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="footer_content_box4">
							<h3 class="footer_head_2">BEST QUALITY PRODUCTS</h3>
							<p class="sub_head">Neque porro quisquam est</p>
						</div>
					</div>
					<div class="col-md-12">
						<p class="designed_by">Copyrights 2019 PurZai. All rights reserved  | Designed with <img src="images/love.png"> By <a href="https://tnmonlinesolutions.com/" target="_blank"> TNM Online Solutions</a> </p>
					</div>
				</div>
			</div>
		</div>
	<!-- FOOTER PANEL STOP -->


	<script src="js/jquery-1.12.3.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.js"></script>
	<script type="text/javascript">
		$('#banner').owlCarousel({
    		loop:1,
    		autoplay:1,
    		autoplayTimeout:5000,
    		margin:10,
    		nav:0,
    		dots:0,
    		animateOut: 'slideOutDown',
    		animateIn: 'slideInUp',
    		responsive:{
        	0:{
        		items:1
        		},
    		}
		});
		$('#trendindProducts').owlCarousel({
    		loop:1,
    		autoplay:1,
    		items:4,
    		autoplayTimeout:6000,
    		margin:10,
    		nav:0,
    		dots:0,
    		responsive:{
	        	0:{
	        		items:1.2
	        	},
	        	768:{
	    			items:2.4
	    		},
	    		992:{
	    			items:3
	    		},
	    		1200:{
	    			items:4
	    		},
    		}
		});
	</script>
	<script>
		AOS.init();
	</script>
	<script type="text/javascript" src="js/menu.js"></script>
</body>
</html>