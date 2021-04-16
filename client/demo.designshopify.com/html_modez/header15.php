<!DOCTYPE html>
<?php

//session_start();
?>
<html class="js  placeholder svg flexbox csstransforms" lang="en" style="background-attachment: scroll;"><!--<![endif]-->
	
<!-- Mirrored from demo.designshopify.com/html_modez/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Jan 2019 10:00:28 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">		
		<meta name="viewport" content="width=device-width,initial-scale=1">	
		<title>Modez - Responsive Bootstrap HTML5 Template</title>
		
		<link href="assets/stylesheets/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
		<link href="assets/stylesheets/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
		<link href="assets/stylesheets/animate.min.css" rel="stylesheet" type="text/css" media="all">	
		<link href="assets/stylesheets/owl.carousel.css" rel="stylesheet" type="text/css" media="all">
		<link href="assets/stylesheets/cs-modez-base.global.css" rel="stylesheet" type="text/css" media="all">
		<link href="assets/stylesheets/cs-modez-base.styles.css" rel="stylesheet" type="text/css" media="all">
		<link href="assets/stylesheets/cs-modez.global.css" rel="stylesheet" type="text/css" media="all">
		<link href="assets/stylesheets/cs-modez.styles.css" rel="stylesheet" type="text/css" media="all">
		<link href="assets/javascripts/spr.css" rel="stylesheet" type="text/css" media="screen">
		<link href="assets/stylesheets/camera.css" rel="stylesheet" type="text/css" media="screen">
		
		<link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,900" rel="stylesheet">
		
		<script src="assets/javascripts/jquery.min.js" type="text/javascript"></script>	
		<script src="assets/javascripts/scripts.js" type="text/javascript"></script>
		<script src="assets/javascripts/bootstrap.min.js" type="text/javascript"></script>
		<script src="assets/javascripts/imagesloaded.pkgd.min.js" type="text/javascript"></script>
		<script src="assets/javascripts/owl.carousel.min.js" type="text/javascript"></script>
		<script src="assets/javascripts/jquery.zoom.js" type="text/javascript"></script>
		<script src="assets/javascripts/jquery.fancybox.js" type="text/javascript"></script>
		<script src="assets/javascripts/loadmore.js" type="text/javascript"></script>
		<script src="assets/javascripts/wish-list.js" type="text/javascript"></script>
		<script src="assets/javascripts/instafeed.min.js" type="text/javascript"></script>
		<script src="assets/javascripts/jquery.cookies.min.js" type="text/javascript"></script>
		<script src="assets/javascripts/camera.min.js" type="text/javascript"></script>
	</head>

	<body class="template-index" style="background-attachment: scroll;">     
		<div id="section-header" class="html-section">
			<div class="header-wrapper" id="header-top">  
				<section class="top-header">
					<div class="top-header-wrapper">
						<div class="container">
							<div class="row">
								<div class="top-header-inner-group">
									<div class="top-header-inner">
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				
				<section class="main-header">
					<div class="main-header-wrapper">
						<div class="main-header-inner">
							<div data-section-id="header" data-section-type="header-section" class="main-header-group">  
								<div class="left-area col-sm-4">
									<div class="">        									  
										<a href="index.php" class="site-header__logo-image">              
											<img src="assets/images/logo1.jpg" height="600" width="300" alt="Modez Template">
										</a>									  
									</div>
								</div>
								<div class="right-area col-sm-8" >
									<div class="right-area-group" >                  
										<div class="toolbar-customer login-account" >
											<span >
		
												<?php 
											    session_start();
												if(isset($_SESSION['user_id']))
												{
											?>
													<a href="logout.php" id="customer_login_link" style="color:white">Logout | </a> 
													<a href="cart.php"  id="customer_login_link" style="color:white" title="Shopping Cart">CART</a>
											<?php
												}
												else
												{
											?>
	
											<a href="login.php" style="color:white">Login |</a>
											<a href="register.php" id="customer_register_link" style="color:white">Register</a>
											<?php
												}
											?>
												
								
												
										
											</span>
										</div>
										
										
										<div id="cart-target" class="toolbar-cart">
										
										
										</div>                  
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="navigation-wrapper">
					<div class="container">
						<div class="row">
							<div class="navigation-inner">
								<div class="navi-group">                
									<nav class="site-nav small--hide" id="AccessibleNav" role="navigation"> 	
										<ul>
											<li class="nav-item active">
												<a href="index.php">
													<span>Home</span>
												</a>
											</li>
											
											<li class="nav-item">
												<a href="collectionlisting.php">
													<span>Categories</span>
												</a>
											</li>                              
											
											<li class="dropdown mega-menu">
												<a href="collection.html" class="dropdown-toggle dropdown-link" data-toggle="dropdown">
													<span>Products</span>
													<i class="fa fa-angle-down"></i>
													<i class="sub-dropdown1 visible-sm visible-md visible-lg"></i>
													<i class="sub-dropdown visible-sm visible-md visible-lg"></i>
												</a>  
												<div class="megamenu-container col-9 megamenu-container-2 dropdown-menu" style="background-image: url(); width: 100px;">
													<ul class="sub-mega-menu">      
														<li class="col-sampletext">
															<img src="assets/images/ds.png" alt="HTML Template | DesignShopify">
															<p>
																Lanvin flats seam cotton minimal Saint Laurent midi Céline la marinière. Powder blue playsuit oversized sweatshirt.
															</p>
															<p>
																Dress Jil Sander Vasari chambray boots luxe. Statement button up navy blue slip dress skinny jeans indigo white shirt.
															</p>
														</li>            
														<li class="col-links col-links01">
															<ul>
																<a href="men.php"><li class="list-title">Mens</li></a>
																<li class="list-unstyled li-sub-mega">
																	<a href="jacket.php">Jacket</a>
																</li>
																<li class="list-unstyled li-sub-mega">
																	<a href="bag.php">Bags</a>
																</li>
																<li class="list-unstyled li-sub-mega">
																	<a href="watch.php">Watch</a>
																</li>
																<li class="list-unstyled li-sub-mega">
																	<a href="belt.php">Belt</a>
																</li>
																<li class="list-unstyled li-sub-mega">
																	<a href="shoes.php">Shoes</a>
																</li>
																
															</ul>
														</li>  
														<li class="col-links col-links02">
															<ul>
																<a href="women.php"><li class="list-title">Womens</li></a>
																<li class="list-unstyled li-sub-mega">
																	<a href="jacket1.php">Jacket</a>
																</li>
																<li class="list-unstyled li-sub-mega">
																	<a href="bag1.php">Bags</a>
																</li>
																<li class="list-unstyled li-sub-mega">
																	<a href="watch1.php">Watch</a>
																</li>
																<li class="list-unstyled li-sub-mega">
																	<a href="belt1.php">Belt</a>
																</li>
																<li class="list-unstyled li-sub-mega">
																	<a href="shoes1.php">Shoes</a>
																</li>
																
															</ul>
														</li> 
														<li class="col-links col-links03">
															<ul>
																<a href="kid.php"><li class="list-title">Kids</li></a>
																<li class="list-unstyled li-sub-mega">
																	<a href="jacket2.php">Jacket</a>
																</li>
																<li class="list-unstyled li-sub-mega">
																	<a href="bag2.php">Bags</a>
																</li>
																<li class="list-unstyled li-sub-mega">
																	<a href="watch2.php">Watch</a>
																</li>
																<li class="list-unstyled li-sub-mega">
																	<a href="belt2.php">Belt</a>
																</li>
																<li class="list-unstyled li-sub-mega">
																	<a href="shoes2.php">Shoes</a>
																</li>
																
															</ul>
														</li>   
													</ul>    
													<script>
														  $(window).ready(function($) {
															$('.megamenu-container-2').css("width",$('.top-header-inner').innerWidth());
														  });
														  $( window ).resize(function() {
															$('.megamenu-container-2').css("width",$('.top-header-inner').innerWidth());
														  });
													</script>    
												</div>    
											</li>
											 
											<li class="nav-item">
												<a href="feedback.php">
													<span>Feedback</span>
												</a>
											</li>
								<?php 
								if(isset($_SESSION['user_id']))
								{
									?>
									<?php
								}
								?>
										
											<li class="nav-item">
												<a href="myorder.php">
													<span>My Order</span>
												</a>
											</li>
								<?php 
								if(isset($_SESSION['user_id']))
								{
									?>
									<?php
								}
								?>
											<li class="nav-item">
												<a href="pagecontact.php">
													<span>Contact us</span>
												</a>
											</li>
											<li class="nav-item">
												<a href="page-about.html">
													<span>About us</span>
												</a>
											</li>
										</ul>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
