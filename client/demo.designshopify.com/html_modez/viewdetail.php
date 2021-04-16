<?php
include("header.php");
include("../../../config/connection.php");
?>
<?php

if(isset($_GET['id']))
{
	$oid = $_GET['id']; 
}

$uid = $_SESSION['user_id'];

$sql="select * from orders om join order_item o join product p join gallery g
where o.order_id=om.order_id and o.product_id = p.product_id and g.product_id = p.product_id and om.user_id = $uid and om.order_id = $oid" ;
$result=mysqli_query($conn,$sql);

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
				<div id="html-section-cart-template" class="html-section">
					<div class="page-width" data-section-id="cart-template" data-section-type="cart-template">
						<section class="cart-heading">
							<div class="cart-heading-wrapper">
								<div class="container">
									<div class="row">
										<div class="cart-heading-inner">
											<h1 class="page-title"><span>Your cart</span></h1>
											<div class="breadcrumb clearfix">
												<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
													<a href="index.html" title="Modez - HTML Template" itemprop="url">
													<span itemprop="title">Home</span></a></span>
												<span class="arrow-space">&gt;</span>
												<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
												<a href="cart.html" title="Your cart">Your cart</a>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>

						<section class="cart-content">
							<div class="cart-wrapper">
								<div class="container">
									<div class="row">
										<div class="cart-inner">
											<div id="cart">              
												<div class="cart-form">
													<form action="#" method="post" id="cartform">
														<table>
															<thead>
																<tr>
																	<th class="image">
																		Image
																	</th>
																	<th class="price">
																		Product
																	</th>
																	<th class="qty">
																		Price
																	</th>
																	<th class="total">
																		Quantity
																	</th>
																	<th class="remove">
																		Total
																	</th>
																	<th class="remove">
																		Date
																		
																	</th>
																</tr>
															</thead>
															<tbody>
									<?php
									while($row=mysqli_fetch_array($result))
									{ 
										//$oid = $row['Order_id'];
										$amount = $row['product_price' ];
										$qty = $row['qty'];
										$total = $amount * $qty;
									?>
                                        <tr>
                                            <td class="pro-thumbnail"><a href="#"><img src="assets/images/<?php echo $row['image']?>" height="150px" width="100px" alt="Product"></a></td>
                                            <td class="pro-title"><a href="#"><?php echo $row['product_name']?></a></td>
                                            <td class="pro-price"><span>₹<?php echo $row['product_price']?></span></td>
                                            <td class="pro-quantity"><div class="pro-qty"><div class="count-input-block">
                                             <input type="text" readonly class="form-control text-center" value="<?php echo $qty?>">
                                                
                                            </div></div></td>
                                            <td class="pro-subtotal"><span>₹<?php echo $total;?></span></td>
											<td class="pro-subtotal"><span><?php echo $row['order_date']?></span></td>
                                            
                                        </tr>
									<?php 
									} 
									?>
									

																
															</tbody>
														</table>
														
													</form>
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
    