<?php
include("header.php");
require_once("../../../config/connection.php");
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
				<div id="html-section-product-template" class="htnl-section">
					<div class="product-template__container page-width" itemscope="" itemtype="http://schema.org/Product" id="ProductSection-product-template" data-section-id="product-template" data-section-type="product" data-enable-history-state="true">
						<meta itemprop="name" content="[Sample] Laundry Detergent">
						<meta itemprop="url" content="./product.html">
						<meta itemprop="image" content="assets/images/detail1_747x1024.jpg"> 
						
						<section class="detail-heading">
							<div class="detail-heading-wrapper">
								<div class="container">
									<div class="row">
										<div class="detail-heading-inner">
											<h1 class="page-title"><span>Product Detail</span></h1>
											<div class="breadcrumb clearfix">
												<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
												<a href="index.html" title="Modez - HTML Template" itemprop="url">
												<span itemprop="title">Home</span>
												</a>
												</span>
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
    
						<section class="product-detail-content">
							<div class="detail-content-wrapper">
								<div class="container">
									<div class="row">
<?php
	require_once('../../../config/connection.php');
	if(isset($_GET['id']))
{
	$id = $_GET['id'];
	
	$sql="select * from gallery g join product p where g.product_id=p.product_id and g.product_id='".$id."'";
	
    $result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result);
}

	
?>
<?php		
			$err="";
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
				
		$qty = $_POST['quantity'];
		$size = $_POST['size'];
		
		if($qty >0 && $qty < 10)
		
		{
			echo "<meta http-equiv='refresh' content='0;url=cartinsert.php?product_id=$id&qty=$qty&size=$size'>";
		}
		else
		{
			$err = "Quantity must be between 1 to 10";
		}
		
	}
		
																
?>
										<div class="detail-content-inner">
											<div id="product" class="donec-condime-fermentum detail-content">
												<div class="col-md-12 clearfix info-detail-pro">
													<div class="col-md-6" id="product-image">                   
														<div id="gallery-images-vertical" class="thumbs clearfix visible-lg">
															<div class="vertical-slider"> 
																<div class="image active">
																	<a href="assets/images/product1.jpg" class="thumbs-a cloud-zoom-gallery">
																		<img src="assets/images/product1.jpg" alt="[Sample] Laundry Detergent">
																	</a>
																</div>
																<div class="image">
																	<a href="assets/images/product2.jpg" class="thumbs-a cloud-zoom-gallery">
																		<img src="assets/images/product2.jpg" alt="[Sample] Laundry Detergent">
																	</a>
																</div>
																<div class="image">
																	<a href="assets/images/product3.jpg" class="thumbs-a cloud-zoom-gallery">
																		<img src="assets/images/product3.jpg" alt="[Sample] Laundry Detergent">
																	</a>
																</div>
																<div class="image">
																	<a href="assets/images/product4.jpg" class="thumbs-a cloud-zoom-gallery">
																		<img src="assets/images/product4.jpg" alt="[Sample] Laundry Detergent">
																	</a>
																</div>
																<div class="image">
																	<a href="assets/images/product5.jpg" class="thumbs-a cloud-zoom-gallery">
																		<img src="assets/images/product5.jpg" alt="[Sample] Laundry Detergent">
																	</a>
																</div>
															</div>
														</div>  
														
														<div id="featuted-image" class="image featured">
															<img src="assets/images/<?php echo $row['image']?>" alt="[Sample] Laundry Detergent" style="display: block; height:600px; width:500px;"/>                                          
														</div>
                                                     
														
														<script>
															$(".vertical-slider").bxSlider({
															  mode: 'vertical',
															  slideWidth: 100,
															  minSlides: 4,
															  nextText: '<i class="fa fa-angle-up" title="Previous" data-toggle="tooltip" data-placement="top"></i>',
															  prevText: '<i class="fa fa-angle-down" title="Next" data-toggle="tooltip" data-placement="top"></i>',
															  hideControlOnEnd: true,
															  infiniteLoop: false,
															  pager: false,
															  slideMargin: 0
															});

															if($("#gallery-images .horizontal-slider").length){
															  $("#gallery-images .horizontal-slider").owlCarousel({
																navigation : true,
																pagination: false,
																items: 4,
																slideSpeed : 200,
																paginationSpeed : 800,
																rewindSpeed : 1000,
																itemsDesktop : [1199,4],
																itemsDesktopSmall : [979,4],
																itemsTablet: [768,4],
																itemsTabletSmall: [540,4],
																itemsMobile : [360,4],
																navigationText: ['<i class="fa fa-angle-left" title="Previous" data-toggle="tooltip" data-placement="top"></i>', '<i class="fa fa-angle-right" title="Next" data-toggle="tooltip" data-placement="top"></i>']
															  });
															}
														</script>
													</div>
													
													<div class="col-md-6" id="product-information">                  
														<form id="add-item-form" action="" method="post" class="">
															<div class="product-options " itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">                      
																<meta itemprop="priceCurrency" content="USD">
																<link itemprop="availability" href="http://schema.org/InStock">
                      
																<h1 itemprop="name" class="title"><?php echo $row['product_name']?></h1>				
																<div class="col-sm-12">
																	<div class="purchase col-sm-6">
																		<meta itemprop="price" content="200.00">
																		<div class="price" id="price-preview">
																			<span class="money">₹<?php echo $row['product_price']?></span>
																		</div>
																	</div>
																	
																</div>
																
																<div class="description">                    
																	<p itemprop="description"><?php echo $row['description']?></p>
																</div>															
												
																
																<div class="swatch clearfix " data-option-index="1">

																	
																	<?php
																	
																		$ssql = "select * from product p join sub_category s join category c where p.sub_category_id = s.sub_category_id and s.category_id = c.category_id and  p.product_id = $id";
																		
																		$sresult = mysqli_query($conn,$ssql);
																		$srow=mysqli_fetch_array($sresult);
																		$subcatname = $srow['sub_category_name'];
																		$catname = $srow['category_name'];
																	?>
																	
																	<?php
																		if(strtolower($subcatname)=="jacket" && (strtolower($catname)=="mens" || strtolower($catname)=="women")  )
																		{
																	?>
																	<div class="header">
																		Size
																	</div>
																	<div class="size"> 
																		<select name="size">
																			<option> S </option>
																			<option> M </option>
																			<option> L </option>
																		</select>

																	</div>
																	
																	
																	<?php
																		}
																		else if(strtolower($subcatname)=="jacket" && strtolower($catname)=="kids")
																		{
																	?>	
																	<div class="header">
																		Age Group
																	</div>
																	<div class="size"> 
																		<select class="size">
																			<option> 2-5 </option>
																			<option> 5-10 </option>
																			<option> 10-15 </option>
																		</select>

																	</div>
																
																	
																	<?php
																		}
																		else if(strtolower($subcatname)=="shoes" && (strtolower($catname)=="mens" || strtolower($catname)=="women"))
																		{
																	?>
																	<div class="header">
																		Size
																	</div>
																	<div class="size"> 
																		<select name="size">
																			<option> 7 </option>
																			<option> 7.5 </option>
																			<option> 8 </option>
																			<option> 8.5 </option>
																			<option> 9 </option>
																			<option> 9.5 </option>
																			<option> 10 </option>
																			<option> 10.5 </option>
																			<option> 11 </option>
																			<option> 11.5 </option>
																			<option> 12 </option>
																			
																			</select>

																	</div>

																	<?php
																		}
																		else if(strtolower($subcatname)=="shoes" && strtolower($catname)=="kids")
																		{
																	?>	
																	<div class="header">
																		Age Shoes
																	</div>
																	<div class="size"> 
																		<select name="size">
																			<option> 2 </option>
																			<option> 2.5 </option>
																			<option> 3 </option>
																			<option> 3.5 </option>
																			<option> 4 </option>
																			<option> 4.5 </option>
																			<option> 5 </option>
																			<option> 5.5 </option>
																			<option> 6 </option>
																		</select>

																	</div>
																			
																	<?php
																		}
																	?>
																	
																	<script>
																		$(function() {
																		  $( ".swatch-element" ).on( "hover",
																			function() {
																			  $(this).addClass("hovered");
																			}, function() {
																			  $(this).removeClass("hovered");
																		  });
																		  $(".swatch-element").on( "click", function() {
																			if(!$(this).hasClass('active'))
																			{
																				var temp = $(this).parent();
																				temp.children('.swatch-element').each(function() {
																				  $(this).removeClass("active");
																				});            
																				$(this).addClass("active");        
																			}
																		  });
																		});
																	  </script>
																</div> 
																
																<div class="quantity-wrapper clearfix">
																	<label class="wrapper-title">Qty</label>
																	<div class="wrapper">
																		<span class="qty-down btooltip" data-toggle="tooltip" data-placement="top" title="Decrease" data-src="#quantity">
																		<i class="fa fa-minus"></i>
																		</span>
																		<input id="quantity" readonly type="text" name="quantity" value="1" maxlength="5" size="5" class="item-quantity">
																		<span class="qty-up btooltip" data-toggle="tooltip" data-placement="top" title="Increase" data-src="#quantity">
																		<i class="fa fa-plus"></i>
																		</span>
																	</div>
																		<span style="color:red"><?php echo $err?></style>	
																</div>
		
		<?php
		if(!isset($_SESSION['user_id']))
		{
			echo "<meta http-equiv='refresh' content='0;url=login.php'>";
		}
		?>
																<div class="purchase-section multiple">
																	<div class="purchase" >	
																																	
																		<button id="add-to-cart" class="btn add-to-cart" type="submit" name="add"><i class="fa fa-shopping-cart"></i>
																		Add to cart</button> 
																					
																		<div id="cart-animation" style="display:none">1</div>																	
																	</div>
																</div> 
		
															</div>
														</form>
														                                                                                           
														
													</div>
													
												</div>                  
										
												
                 
	
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
			</main>


<?php
include("footer.php");
?>