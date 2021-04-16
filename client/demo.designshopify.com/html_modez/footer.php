<?php
require_once("../../../config/connection.php");
require_once("lib/function.php");
include('PHPMailer/PHPMailerAutoload.php');

if ($_SERVER["REQUEST_METHOD"]=="POST") {
	
	if(isset($_POST["subscribe"]))
	{
	if(isset($_POST['username']) && !empty($_POST['username']))
	{
		$username = mysqli_real_escape_string($conn,$_POST['username']);
		
		//echo $query = "select * from user where email = '".$username."'";
	
		//$result = mysqli_query($conn, $query);
		$arr = array();
		//if (mysqli_num_rows($result) == 1) {
			
			
			//$row1=mysqli_fetch_array($result);
			
				$message = "<h3>thankyou for subscription   </h3>";
				$subject = "Subscribe";		
				$mailSent = send_mail($username, $message, $subject);
				if ($mailSent) {
				//	session_start();
					//$_SESSION['id'] = $id;
					echo "<script>
								window.location='index.php';
					      </script>";
				} else {
					
				}
				$array = array('status' => '200' ,'details' => $arr);

			
		
	} 
	}	
}

?>


<div id="section-footer" class="html-section">
			<footer class="site-footer" role="contentinfo">
				<div class="footer-wrapper">    
					<section class="footer_top-block">
						<div class="container">
							<div class="row">
								<div class="footer_top-block-group">
									<div class="fi-newsletter-group col-sm-9">
										<div class="footer-title">
											<h5 class="newsletter_heading">Sign up for newsletter <i class="fa fa-long-arrow-right" aria-hidden="true"></i></h5>
										</div>
										<div class="newsletter-form">
											<form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank">
												<div class="input-group">
													<input type="hidden" name="MERGE1" id="MERGE1" value="First Name">
													<input type="hidden" name="MERGE2" id="MERGE2" value="Last Name">
													<input type="email" name="username" id="MERGE0" value="" placeholder="Put your email address here...">
													<span class="input-group__btn">
													<button type="submit" class="btn newsletter__submit" name="subscribe" id="subscribe">
													<span class="newsletter__submit-text--large">Subscribe</span>
													</button>
													</span>
												</div>
											</form>
										</div>
									</div>
									<div class="fi-social-icon col-sm-3">
										
									</div>
								</div>
							</div>
						</div>
					</section>
					<section class="footer_info-block">
						<div class="footer_info_wrapper">
							<div class="container">
								<div class="row">
									<div class="footer_info_inner">
										<div class="footer_inf-content">
											<div class="fi-aboutus col-md-3 col-sm-6">
												<div class="footer-title">
													<h5 class="title">About us</h5>
												</div>
												<div class="fi-aboutus-content">
												ONLINE STORE FOR LEATHER PRODUCTS

This leather online store featuring innovative and Upbeat fashion for Women men and kids.Including Leather Jackets, bags, watch, Belt and Shoes.  Along with fashion wear, Leather vortal gets you High Fashion Bags and Jackets. Every thing about us is based on 100% leather material to which we gaurantee for life. 
											</div>
											</div>
											<div class="fi-contact col-md-3 col-sm-6">
												<div class="footer-title">
													<h5 class="title">Contact Info</h5>
												</div>
												<div class="fi-contact-content col-sm-12">
													<div class="address">
														<i class="fa fa-home"></i><span>G/12 Rushika Appartment,Kiran Park,Nava vadaj</span>
													</div>
													<div class="email">
														<i class="fa fa-envelope"></i><span>niranj2021@gmail.com</span>
													</div>
													<div class="phone">
														<i class="fa fa-phone"></i><span>(+91) 8849223679</span>
													</div>
												</div>
											</div>
											<div class="fi-links col-md-3 col-sm-6">
												<div class="footer-title">
													<h5 class="title">More links</h5>
												</div>
												<div class="fi-usefullinks">
													<div class="left-area col-xs-12">
														<ul class="links">
															<li>
															<a href="index.php"><span>Home</span></a>
															</li>
															<li>
															<a href="collectionlisting.php"><span>Category</span></a>
															</li>
															<li>
															<a href="collection.php"><span>Product</span></a>
															</li>
															<li>
															<a href="about.php"><span>About us</span></a>
															</li>
															
														</ul>
													</div>
												</div>
											</div>
											<div class="fi-location col-md-3 col-sm-6">
												<div class="footer-title">
													<h5 class="title">Location</h5>
												</div>
												<div class="fi-usefullinks">
													<a href="https://www.google.com/maps/place/249+Ung+Văn+Khiêm,+Phường+25,+Bình+Thạnh,+Hồ+Chí+Minh,+Vietnam/@10.8054883,106.705041,14.38z/data=!4m5!3m4!1s0x317528a25988dc07:0x27d1621713c06e5c!8m2!3d10.8082437!4d106.7148264">
														<img src="assets/images/m1_270x130.jpg" alt="">
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>     
					    
					<section class="copy-right">
						<div class="copy-right-wrapper">
							<div class="container">
								<div class="row">
									<div class="copy-right-inner">
										© 2020-2021 <a href="index.php" title="">Leather Vortal - All Rights Reserved</a>               
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
			</footer>
			<script>
			  /* Best seller slider */  
			  $("#footer_partner-content").owlCarousel({
				  navigation : true,
				  pagination: false,
				  autoPlay: true,
				  items: 6,
				  slideSpeed : 200,
				  paginationSpeed : 800,
				  rewindSpeed : 1000,
				  itemsDesktop : [1199,6],
				  itemsDesktopSmall : [979,5],
				  itemsTablet: [768,4],
				  itemsTabletSmall: [540,3],
				  itemsMobile : [360,2],
				navigationText: ['<i class="fa fa-angle-left" title="Previous" data-toggle="tooltip" data-placement="top"></i>', '<i class="fa fa-angle-right" title="Next" data-toggle="tooltip" data-placement="top"></i>']
			  });
			</script>
		</div>
  
		<div id="scroll-to-top" data-toggle="tooltip" data-placement="top" title="Scroll to Top" class="on">
			<i class="fa fa-angle-up"></i>
		</div>  
  
		<!-- Quick Shop Modal -->
		<div id="newsletter-popup" class="modal fade" style="display: none;" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="nl-wraper-popup bounceInDown animated" style="background-image: url(assets/images/730x370.png)">
				<div class="nl-wraper-popup-inner">
					<form action="#" method="post" name="mc-embedded-subscribe-form" target="_blank">
						<h4>Newsletter</h4>
						<p>
							Welcome to demo store.<br>
							 - New Deal Summer 2017<br>
							 - Follow us on Socials<br>
							 - Special event coming.
						</p>
						<div class="group_input">
							<input class="form-control" type="email" name="EMAIL" placeholder="Enter your email address...">
							<button class="btn" type="submit"><i class="fa fa-paper-plane" data-toggle="tooltip" data-placement="top" title="Submit"></i></button>
						</div>
					</form>
					<div id="popup-hide">
						<input type="checkbox" id="mc-popup-hide" value="0" onclick="checkcookie()" checked="checked"><label for="mc-popup-hide">Don't show this popup again</label>
					</div>
					<div class="nl-popup-close">
						<span onclick="$(&#39;#newsletter-popup&#39;).modal(&#39;hide&#39;)" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-times"></i></span>
					</div>
				</div>
			</div>
		</div>
        
		<script type="text/javascript">
			var index = 0;
			index=1;  
		</script>
  
		<!--script src="./assets/javascripts/modernizr.js" type="text/javascript"></script>
		<script src="./assets/javascripts/jquery.smooth-scroll.min.js" type="text/javascript"></script-->
		<script src="assets/javascripts/classie.js" type="text/javascript"></script>  	  
		<script src="assets/javascripts/cs-modez.script.js" type="text/javascript"></script>

		<!-- Quick Shop Modal -->
		<div id="quick-shop-modal" class="modal in" role="dialog" aria-hidden="false" tabindex="-1" data-width="800">
			<div class="modal-dialog fadeIn animated">
				<div class="modal-content">
					<div class="modal-header">
						<i class="close fa fa-times btooltip" data-toggle="tooltip" data-placement="top" title="" data-dismiss="modal" aria-hidden="true" data-original-title="Close"></i>
					</div>
					<div class="modal-body">
						<div class="quick-shop-modal-bg" style="display: none;">
						</div>
						<div class="row">
							<div class="col-md-6 product-image">
								<div id="quick-shop-image" class="product-image-wrapper">
									<div id="featuted-image" class="main-image featured">
										<img class="img-zoom img-responsive image-fly" src="assets/images/sp1_80x110.jpg" data-zoom-image="./assets/images/sp1_80x110.jpg" alt="">
									</div>
									<div id="gallery_main_qs" class="product-image-thumb scroll scroll-mini">
										<div class="qs-vertical-slider">
											<a class="image-thumb active" href="assets/images/90x90.html" data-image="./assets/images/sp1_80x110.jpg" data-zoom-image="assets/images/sp1_80x110.jpg"><img src="assets/images/sp1_80x110.jpg" alt=""></a>
											<a class="image-thumb" href="assets/images/90x90.html" data-image="./assets/images/sp2_80x110.jpg" data-zoom-image="assets/images/sp2_80x110.jpg"><img src="assets/images/sp2_80x110.jpg" alt=""></a>
											<a class="image-thumb" href="assets/images/90x90.html" data-image="./assets/images/sp3_80x110.jpg" data-zoom-image="assets/images/sp3_80x110.jpg"><img src="assets/images/sp3_80x110.jpg" alt=""></a>
											<a class="image-thumb" href="assets/images/90x90.html" data-image="./assets/images/sp4_80x110.jpg" data-zoom-image="assets/images/sp4_80x110.jpg"><img src="assets/images/sp4_80x110.jpg" alt=""></a>											
											<a class="image-thumb" href="assets/images/90x90.html" data-image="./assets/images/sp5_80x110.jpg" data-zoom-image="assets/images/sp5_80x110.jpg"><img src="assets/images/sp5_80x110.jpg" alt=""></a>											
										</div>
									</div>
								</div>
							</div>
							
							

							
						
						</div>
					</div>
				</div>
			</div>
		</div> 
		<script type="text/javascript">
	  
			jQuery(document).ready(function($) { 
				$('#quick-shop-modal').on('hidden.bs.modal', function () {
				  $('.zoomContainer').css('z-index', '1');
				  $('#top').removeClass('z-idx');
				})
			   
				$('#quick-shop-modal').on( 'shown.bs.modal', function () {
				  $('#top').addClass('z-idx');
				  $('.modal-dialog').addClass("animated");
				  imagesLoaded( '#quick-shop-modal', function() {       
					updateScrollThumbsQS();       
					$("#gallery_main_qs .qs-vertical-slider").owlCarousel({
					  navigation : true,
					  pagination: false,
					  items: 3,
					  slideSpeed : 200,
					  paginationSpeed : 800,
					  rewindSpeed : 1000,
					  itemsDesktop : [1199,3],
					  itemsDesktopSmall : [979,2],
					  itemsTablet: [768,2],
					  itemsTabletSmall: [540,1],
					  itemsMobile : [360,1],
					  navigationText: ['<i class="fa fa-angle-left" title="Previous" data-toggle="tooltip" data-placement="top"></i>', '<i class="fa fa-angle-right" title="Next" data-toggle="tooltip" data-placement="top"></i>']
					});
					var delayLoadingQS = '';       
					delayLoadingQS = setInterval(function(){                     
					  $('.zoomContainer').css('z-index', '2000');
					  $('#quick-shop-modal .modal-body').resize();           
					  clearInterval( delayLoadingQS );            
					}, 500);
				  });      
				});          
			});
		</script>

		<!-- Search Modal -->
		<div class="modal fade" id="lightbox-search" tabindex="-1" role="dialog" aria-labelledby="lightbox-search" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i class="fa fa-times-circle-o" aria-hidden="true"></i>
						</button>
						<h4 class="modal-title" id="myModalLabel">Search something</h4>
					</div>
					<div class="modal-body">
						<div id="search-info">
							<form class="search" action="http://demo.designshopify.com/html_modez/search.html" style="position: relative;">								
								<input type="text" name="q" class="search_box" placeholder="Search for products" value="" autocomplete="off">
								<button class="search-submit" type="submit"><i class="fa fa-search" id="go"></i></button>
								<ul class="search-results" style="position: relative; left: 0px; top: 38px; display: none;">
								</ul>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Wishlist Modal -->
		<div class="wishlist-loading"><img src="assets/images/hourglass.svg" alt=""></div>
		<div class="wishlist-overlap"></div>
		<div class="wishlist-model">
			<div class="modal fade" id="modalAddToWishlist" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog white-modal modal-sm">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<i class="fa fa-times-circle-o" aria-hidden="true"></i>
							</button>
							<h4 class="modal-title">Product added successful to <a href="page-wishlist.html">Wishlist</a>.</h4>
						</div>
						<div class="modal-body">
							<div class="wishlist-product-id hide">
								9018606226
							</div>
							<div class="wishlist-product-img">
								<img src="assets/images/sp1-300x410.jpg" alt="">
							</div>
							<div class="wishlist-product-name">
								<a href="product.html"><span>[Sample] 1 L Le Parfait Jar</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="wishlist-login-model">
		  <div class="modal fade" id="modalNeedToWishlist" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog white-modal modal-sm">
			  <div class="modal-content">
				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i class="fa fa-times-circle-o" aria-hidden="true"></i>
				  </button>
				  <h4 class="modal-title">Warning!!!</h4>          
				</div>
				<div class="modal-body">
				  <div class="text-center">You must <a href="account-login.html">Login</a> or <a href="account-register.html">Register</a> to use this function!</div>
				</div>
			  </div>
			</div>
		  </div>
		</div>
		<div style="clear: both;"></div>
	</body>

<!-- Mirrored from demo.designshopify.com/html_modez/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Jan 2019 10:02:22 GMT -->
</html>