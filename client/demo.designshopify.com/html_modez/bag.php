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
				<div id="html-section-collection-template" class="html-section">
					<div data-section-id="collection-template" data-section-type="collection-template">
						<section class="collection-heading">
							<div class="collection-heading-wrapper">
								<div class="container">
									<div class="row">
										<div class="collection-heading-inner">
											<h1 class="page-title"><span>Products</span></h1>
											<div class="breadcrumb clearfix">
												<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
												<a href="collection.html" title="Modez - Collection Page" itemprop="url">
												<span itemprop="title">Home</span>
												</a>
												</span>
												<span class="arrow-space">/</span>
												<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
												<a href="collection.html" title="All Products" itemprop="url">
												<span itemprop="title">All Products</span>
												</a>
												</span>
												<span class="arrow-space">/ </span>Page 1 of 2
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>

						<section class="collection-content">    
							<div class="collection-content-wrapper">
								<div class="container">
									<div class="row">        
										<div class="collection-content-group">
											<div class="collection-content-inner" id="collection-filter">            
												<div class="main-content col-sm-9 col-6 layout-grid">
													<div class="collection-banner">
														<div class="collection-panner">
															<img src="assets/images/product.jpg" height="600px" width="1000px" class="img-responsive" alt="">
														</div>
													</div>                
													<div id="tags-load" style="display:none;"><i class="fa fa-spinner fa-pulse fa-2x"></i></div>
													<div id="collection">
														<div class="collection-toolbar">
															<div class="list-inline text-right">
																<!-- View as -->
																<div class="grid_list col-sm-6">
																	<ul class="list-inline option-set hidden-xs" data-option-key="layoutMode">
																		<li data-option-value="fitRows" id="goGrid" class="goAction active" data-toggle="tooltip" data-placement="top" title="Grid">
																		<i class="fa fa fa-th"></i>
																		</li>
																		<li data-option-value="straightDown" id="goList" class="goAction " data-toggle="tooltip" data-placement="top" title="List">
																		<i class="fa fa-th-list"></i>
																		</li>
																	</ul>
																</div>
																<!-- Sort by -->
																
															</div>
														</div>                                  
														<div class="collection-items clearfix">
															<div class="products">  
<?php 
$sql="select * from product p join seller s join gallery g join sub_category c join category t where p.seller_id=s.seller_id and p.product_id=g.product_id and p.sub_category_id=c.sub_category_id and c.category_id=t.category_id and sub_category_name='bag' and category_name='mens'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result))
{
?>															
	
																<div class="product-item-wrapper col-sm-4">          
																	<div class="row-container list-unstyled clearfix">
																		<div class="row-inner">
																			<div class="row-left">
																				<a href="product.php?id=<?php echo $row['product_id']?>" class="hoverBorder container_item">
																				<div class="hoverBorderWrapper">
																					<img src="assets/images/<?php echo $row['image'] ?>"style="height:300px;width:300px" class="not-rotation img-responsive front" alt="[Sample] 1 L Le Parfait Jar">
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
														<div class="col-md-12">
															<div class="pagination">
																<li class="prev"><a class="disabled" href="javascript:;"><i class="fa fa-angle-double-left"></i></a></li>
																<li class="active"><a href="javascript:;">1</a></li>
																<li><a href="#">2</a></li>
																<li class="next"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
															</div>
														</div>                  
													</div>
												</div>
												<div class="left-sidebar col-sm-3">
													<div class="sidebar-block allcollections-block">
														<div class="sidebar-title">
															 All Collections
														</div>
														<div class="sidebar-content">
															<p class="title cfc0" data-toggle="collapse" data-target="#cfc0">
																<span class="ficon"><i class="fa fa-angle-down"></i></span>
															</p>
															<ul class="links collapse in" id="cfc0">
																<li>
																<a href="collection.php"><span>Accessories</span></a>
																</li>
																<li>
																<a href="men.php"><span>Mens</span></a>
																</li>
																<li>
																<a href="women.php"><span>Women</span></a>
																</li>
																<li>
																<a href="kid.php"><span>Kids</span></a>
																</li>
															</ul>
														</div>
														
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