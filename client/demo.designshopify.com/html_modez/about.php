<?php
require_once('../../../config/connection.php');
include("header.php");
?>
			<div class="fix-sticky"></div>	
			<style>
				.main-header {
				  background-color: #000000;
				}

				.main-navigation {
				  background-color: #ffffff;
				}
			</style>
			<script>
			  function addaffix(scr){
				if($(window).innerWidth() >= 992){
				  if(scr > 141){
					if(!$('.header-wrapper').hasClass('affix')){
					  $('.header-wrapper').addClass('affix').addClass('fadeInDown animated');
					}
				  }
				  else{
					if($('.header-wrapper').hasClass('affix')){          
					  $('.header-wrapper').removeClass('affix').removeClass('fadeInDown animated');
					}
				  }
				}
				else $('.header-wrapper').removeClass('fadeInDown affix');
			  }
			  $(window).scroll(function() {
				var scrollTop = $(this).scrollTop();
				addaffix(scrollTop);
			  });
			  $( window ).resize(function() {
				var scrollTop = $(this).scrollTop();
				addaffix(scrollTop);
			  });
			</script>
		</div>
  
		<div class="page-container" id="PageContainer">
			<main class="main-content" id="MainContent" role="main">
				<div id="html-section-page-ourteam" class="html-section">
					<section class="page-heading">
						<div class="page-heading-wrapper">
							<div class="container">
								<div class="row">
									<div class="page-heading-inner">
										<div class="breadcrumb clearfix">
											<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
											<a href="index.php" title="Modez - HTML Template" itemprop="url">
											<span itemprop="title">Home</span>
											</a>
											</span>
											<span class="arrow-space">/</span>
											<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
											<a href="about.php" title="About us" itemprop="url"><span itemprop="title">About us</span></a>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<div class="page-content">
						<div class="page-content-wrapper">
							<div class="container">
								<div class="row">
									<div class="page-content-inner about-us">
										<div class="section-header text-center">
											<h2>About us</h2>
										</div>
										<div class="main-content">
											<div class="content-text">
												<div class="col-sm-12">
													<div class="image col-sm-6" style="text-align: left;">
														<img src="assets/images/about.jpg" alt="">
													</div>
													<div class="text col-sm-6">
														<div class="title">
															Welcome to shop
														</div>
														<div class="content">
														<font size="4%">Leather Items Collection For Men Women and Kids
Our collection of leather shoes and leather bags is vivacious and is made of high quality leather. Hand bags, office bags and travel bags, you can find them all at our online leather shop. Leather Accessories like Jacket, belts and Watch are also there for you to choose.</font>														
														</div>
													</div>
												</div>
												
											</div>
											<div class="our-team-slider">
												<div class="staff-title section-header">
													<h2>Our Category</h2>
												</div>
												<div class="content-staff staff-slider">
													<div class="staff-element">
														<div class="staff-avatar">
															<img src="assets/images/collectiona.jpg" style="height:400px;width:400px" alt="">
														</div>
														<div class="staff-des-group">
															<div class="staff-name">
																Accessories
															</div>
															
														</div>
													</div>
													<div class="staff-element">
														<div class="staff-avatar">
															<img src="assets/images/categorymen.jpg" style="height:400px;width:400px" alt="">
														</div>
														<div class="staff-des-group">
														<a href="men.php"> 
														<div class="staff-name">
																Mens
															</div>
			                                             </a>	
														</div>
													</div>
													<div class="staff-element">
														<div class="staff-avatar">
															<img src="assets/images/categorywomen.jpg" style="height:400px;width:400px" alt="">
														</div>
														<div class="staff-des-group">
														  <a href="women.php">	
															<div class="staff-name">
																Womens
															</div>
			                                               </a>
														</div>
													</div>
													<div class="staff-element">
														<div class="staff-avatar">
															<img src="assets/images/categorykid.jpg" style="height:400px;width:400px" alt="">
														</div>
														<div class="staff-des-group">
														  <a href="kid.php">	
															<div class="staff-name">
																Kids
															</div>
			                                             </a>	
														</div>
													</div>
													
													
												</div>
												<script>
													if($(".staff-slider").length){
													  $(".staff-slider").owlCarousel({
														navigation : true,
														pagination: false,
														autoPlay: true,
														items: 4,
														slideSpeed : 200,
														paginationSpeed : 800,
														rewindSpeed : 1000,
														itemsDesktop : [1199,4],
														itemsDesktopSmall : [979,3],
														itemsTablet: [768,2],
														itemsTabletSmall: [540,2],
														itemsMobile : [360,1],
														navigationText: ['<i class="fa fa-angle-left" title="Previous" data-toggle="tooltip" data-placement="top"></i>', '<i class="fa fa-angle-right" title="Next" data-toggle="tooltip" data-placement="top"></i>']
													  });
													}
												</script>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				</main>
<?php
include("footer.php");
?>
    