<?php
include("header.php");
include("../../../config/connection.php");
?>
<?php
$osql = "select * from orders";
$oresult = mysqli_query($conn,$osql);
while($orow=mysqli_fetch_array($oresult))
{
		$odate = $orow['order_date'];
		$status = $orow['status'];
		$oid = $orow['order_id'];
		
		$newdate = date('Y-m-d', strtotime($odate. ' + 2 days'));
		$d = date("Y-m-d");
		
			
		if($status ==0 && $newdate <= $d)
		{
			$newsql = "update orders set status = 2 where order_id = $oid";
			$newresult = mysqli_query($conn,$newsql);
			
		}
}

?>

				
		
			<div class="fix-sticky"></div>	
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
		
		<div id="PageContainer" class="page-container" >
			<main class="main-content" id="MainContent" role="main">
				<div id="html-section-1483066203835" class="html-section index-section home-slideshow" style="margin-bottom:20px;">
					<section data-section-id="1483066203835" data-section-type="slideshow">
						<div class="slideshow-wrapper"> 
							<div class="camera_wrap">
								<div data-src="assets/images/title.jpg"></div>
								<div data-src="asserts/images/"></div>		
							</div>
							<script>
								jQuery('.camera_wrap').camera({
								  fx: 'random',
								  pagination: false,
								  playPause: false,
								  time: 5000
								});
							</script>
						</div>
					</section>
				</div>
				
				<div id="html-section-1483087693361" class="html-section index-section products-grid">
					<section data-section-id="1483087693361" data-section-type="products">  
						<div class="container">
							<div class="row">
								<div class="section-header text-center">
									<h2>New Products</h2>
								</div>     
								<div class="grid grid--uniform grid--view-items">   
<?php 
$sql="select * from product p join seller s join gallery g where p.seller_id=s.seller_id and p.product_id=g.product_id 
order by p.product_id desc limit 8";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result))
{
?>
									<div class="grid__item" style="float:left; width:25%;">            
										<div class="row-container list-unstyled clearfix">

											<div class="row-inner">
											
												<div class="row-left">
													<a href="product.php?id=<?php echo $row['product_id']?>" class="hoverBorder container_item">
													<div class="hoverBorderWrapper">
														<img src="assets/images/<?php echo $row['image'] ?>" style="height:300px;width:300px"class="not-rotation img-responsive front" alt="[Sample] 1 L Le Parfait Jar">
														<div class="mask">
														</div>
														<span class="hidden-sm hidden-xs back">
														<img src="assets/images/<?php echo $row['image'] ?>" class="rotation img-responsive" alt="[Sample] 1 L Le Parfait Jar">
														</span>
													</div>
													<div class="product-label">
													</div>
													</a>
													<div class="hover-mask">
														<div class="group-mask">
															<div class="inner-mask">
																<form action="http://demo.designshopify.com/html_modez/product.html" method="post">
																	<div class="hide clearfix">
																		<select name="id">
																			<option selected="selected" value="31592179410">Default Title</option>
																		</select>
																	</div>
																	
																</form>
																
															</div>
															<!--inner-mask-->
														</div>
														<!--Group mask-->
													</div>
												</div>
												<div class="row-right animMix" style="padding-left: 10px; padding-right: 10px;">
													<div class="left-area">
														
														<div class="product-title">
															<a class="title-5" href="product.php?id=<?php echo $row['product_id']?>"><font size="3%"><?php echo $row['product_name']?></font></a>
														</div>
													</div>
													<div class="right-area">
														<div class="product-price">
															<span class="price">
															<span class="money" data-currency-usd="$0.00"><font size="3%">₹<?php echo $row['product_price']?></font></span>
															</span>
														</div>
													</div>
												</div>

											</div>

										</div>

									</div>
									
									


<?php
}
?>
								</div>
							</div>
						</div>
					</section>
				</div>
				
				<div id="html-section-1489465455018" class="html-section index-section banners-custom">
					<section data-section-id="1489465455018" data-section-type="images" class="">  
						<div class="container">
							<div class="row">  
								<div class="banner_group">
									<div class="banner-with-2">
										<div class="banner-element col-sm-8">
											
											<img src="assets/images/s1.jpg" alt="">
											
											
										</div>
										<div class="banner-element col-sm-4">
											
											<img src="assets/images/s2.jpg" alt="">
											
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>


				

				
				
				<div id="html-section-1483087929004" class="html-section index-section products-cell">
					<section data-section-id="1483087929004" data-section-type="products">  
						<div class="container">
							<div class="row">  
								<div class="home-tabs-wrapper">                             
									<div class="section-content col-4">          
										<div class="problock-element col-sm-4">
											<div class="problock-title">Women's</div>
											<div class="problock-content">
												<div>
<?php 
$sql="select * from product p join seller s join gallery g join sub_category c join category t where p.seller_id=s.seller_id and p.product_id=g.product_id and p.sub_category_id=c.sub_category_id and c.category_id=t.category_id and category_name='women' order by p.product_id  limit 3";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result))
{
?>
										
													<div class="row-container list-unstyled clearfix">
														<div class="row-inner" style="width:400px">
															<div class="row-left col-sm-6" >
																<a href="product.php?id=<?php echo $row['product_id']?>" class="hoverBorder container_item">
																<div class="hoverBorderWrapper">
																	<img src="assets/images/<?php echo $row['image'] ?>" class="not-rotation img-responsive front" alt="">
																	<div class="mask">
																	</div>
																	<span class="hidden-sm hidden-xs back">
																	<img src="assets/images/<?php echo $row['image'] ?>" class="rotation img-responsive" alt="[Sample] 1 L Le Parfait Jar">
																	</span>
																</div>
																<div class="product-label">
																</div>
																</a>
															</div>
															<div class="row-right animMix col-sm-6" style="padding-left: 10px; padding-right: 10px;">
															<div class="left-area">
																<div class="product-title">
																	<a class="" href="#"><font size="3%"><?php echo $row['description']?></font></a>
																</div>
															</div>
																<div class="left-area">
																	<div class="product-title">
																		<a class="title-5" href="#"><font size="3%"><?php echo $row['product_name']?></font></a>
																	</div>
																</div>
																<div class="right-area">
																	<div class="product-price">
																		<span class="price">
																		<span class="money" data-currency-usd="$0.00"><font size="3%">₹<?php echo $row['product_price']?></font></span>
																		</span>
																	</div>
																</div>
															</div>
														</div>
													</div>
<?php
}
?>

												</div>
												
												
											</div>											
										</div>          
										<div class="problock-element col-sm-4">
											<div class="problock-title">Men's</div>
											<div class="problock-content">
												<div>
<?php 
$sql="select * from product p join seller s join gallery g join sub_category c join category t where p.seller_id=s.seller_id and p.product_id=g.product_id and p.sub_category_id=c.sub_category_id and c.category_id=t.category_id and category_name='mens' order by p.product_id limit 3";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result))
{
?>											
													<div class="row-container list-unstyled clearfix">
														<div class="row-inner" style="width:400px">
															<div class="row-left col-sm-6">
																<a href="product.php?id=<?php echo $row['product_id']?>" class="hoverBorder container_item">
																<div class="hoverBorderWrapper">
																	<img src="assets/images/<?php echo $row['image'] ?>" class="not-rotation img-responsive front" alt="[Sample] 1 L Le Parfait Jar">
																	<div class="mask">
																	</div>
																	<span class="hidden-sm hidden-xs back">
																	<img src="assets/images/<?php echo $row['image'] ?>" class="rotation img-responsive" alt="[Sample] 1 L Le Parfait Jar">
																	</span>
																</div>
																<div class="product-label">
																</div>
																</a>
															</div>
															<div class="row-right animMix col-sm-6" style="padding-left: 10px; padding-right: 10px;">
															<div class="left-area">
																<div class="product-title">
																	<a class="" href="#"><font size="3%"><?php echo $row['description']?></font></a>
																</div>
															</div>
															
															  <div class="left-area">
									
																	<div class="product-title">
																		<a class="title-5" href="#"><font size="3%"><?php echo $row['product_name']?></font></a>
																	</div>
																</div>
																<div class="right-area">
																	<div class="product-price">
																		<span class="price">
																		<span class="money" data-currency-usd="$0.00"><font size="3%">₹<?php echo $row['product_price']?></font></span>
																		</span>
																	</div>
																</div>
															</div>
														</div>
													</div>
<?php
}
?>
												</div>
												
												
											</div>
										</div>          
										<div class="problock-element col-sm-4">
											<div class="problock-title">Kid's</div>
											<div class="problock-content">
												<div>    
<?php 
$sql="select * from product p join seller s join gallery g join sub_category c join category t where p.seller_id=s.seller_id and p.product_id=g.product_id and p.sub_category_id=c.sub_category_id and c.category_id=t.category_id and category_name='kids' order by p.product_id limit 3";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result))
{
?>											
													<div class="row-container list-unstyled clearfix">
														<div class="row-inner" style="width:400px">
															<div class="row-left col-sm-6">
																<a href="product.php?id=<?php echo $row['product_id']?>" class="hoverBorder container_item">
																<div class="hoverBorderWrapper">
																	<img src="assets/images/<?php echo $row['image'] ?>" class="not-rotation img-responsive front" alt="[Sample] 1 L Le Parfait Jar">
																	<div class="mask">
																	</div>
																	<span class="hidden-sm hidden-xs back">
																	<img src="assets/images/<?php echo $row['image'] ?>" class="rotation img-responsive" alt="[Sample] 1 L Le Parfait Jar">
																	</span>
																</div>
																<div class="product-label">
																</div>
																</a>
															</div>
															<div class="row-right animMix col-sm-6" style="padding-left: 10px; padding-right: 10px;">
															   
															<div class="left-area">
																<div class="product-title">
																	<a class="" href="#"><font size="3%"><?php echo $row['description']?></font></a>
																</div>
															</div>
																<div class="left-area">
																	
																	<div class="product-title">
																		<a class="title-5" href="#"><font size="3%"><?php echo $row['product_name']?></font></a>
																	</div>
																</div>
																<div class="right-area">
																	<div class="product-price">
																		<span class="price">
																		<span class="money" data-currency-usd="$0.00"><font size="3%">₹<?php echo $row['product_price']?></font></span>
																		</span>
																	</div>
																</div>
															</div>
														</div>
													</div>
<?php
}
?>
												</div>
												
												
											</div>
										</div>          
            
									</div>        
								</div>  
							</div>
						</div>  
					</section>
				</div>

				
				

				<!-- END content_for_index -->
			</main>
		</div>
		     
<?php
include("footer.php");
?>