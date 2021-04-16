<?php
include("header.php");
include("../../../config/connection.php");

?>
<?php

$uid =$_SESSION['user_id'];
$sql="select c.* , p.product_name , p.description , g.* from cart c join product p join gallery g join sub_category ca where c.product_id = p.product_id 
and p.sub_category_id = ca.sub_category_id and g.product_id=p.product_id and c.user_id=$uid";

//echo $sql;
//die;

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
													<a href="index.php" title="Modez - HTML Template" itemprop="url">
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
																		Product Name
																	</th>
																	<th class="size">
																		Size
																	</th>
																	
																	<th class="qty">
																		Quantity
																	</th>
																	<th class="price">
																		Price
																	</th>
																	
																	<th class="remove">
																		Action
																	</th>
																</tr>
															</thead>
															<tbody>
								<?php
								if(mysqli_num_rows($result)>0)
								{
								while($row=mysqli_fetch_array($result))
								{
								$cid=$row['cart_id'];									
								?>
								<?php
								$uid=$_SESSION['user_id'];
								$sql5 = "select sum(price) as total from cart where user_id = '".$uid."'";
								
								$result5 = mysqli_query($conn,$sql5);
								$row5 = mysqli_fetch_array($result5);
								$sub=$row5['total'];
								
							?>
																<tr>
																	<td class="image">
																		<div class="product_image">
																			<a href="product.php?id=<?php echo $row['product_id']?>">
																			<img src="assets/images/<?php echo $row['image']?>" style="height:100px;width:100px" alt="[Sample] Dustpan &amp; Brush - black / S">
																			</a>
																		</div>
																		<div class="product_name">
																			<a href="product.php?id=<?php echo $row['product_id']?>">
																			<p>
																				<?php echo $row['product_name']?>	
																			</p>
																			<span class="variant_title"><?php echo $row['description']?></span>
																			</a>
																		</div>
																	</td>
																	<td class="size">
																		<span class="money" data-currency-usd="$200.00"><?php echo $row['size']?></span>
																	</td>
																	
																	<td class="qty">
																		<div class="quantity-wrapper">
																			<div class="wrapper">
																				<input type="text" size="4" name="updates[]" id="updates_31592186514" value="<?php echo $row['qty']?>" readonly class="tc item-quantity">
																			</div>
																		</div>
																	</td>
																	<td class="price">
																		<span class="money" data-currency-usd="$200.00">₹<?php echo $row['price']?></span>
																	</td>
																	
																	<td class="remove">
																		<a href="cartdelete.php?id=<?php echo $cid ?>" class="cart"><i class="fa fa-trash"></i></a>
																	</td>
																</tr>
																
															
														
								<?php
								}
								?>
																		
														<tr class="summary">
																	<td class="total_text" colspan="1">
																		Total
																	</td>
																	<td class="price" colspan="4">
																		<span class="total"><strong><span class="money" data-currency-usd="$859.00">₹<?php echo $sub;?></span></strong></span>
																	</td>
																</tr>
								<?php
								}
								?>	
															</tbody>
														</table>
								
														<div class="group-bottom">
															<div class="cart-buttons col-sm-12">
																<div class="buttons clearfix">
																	
																	<a href="index.php">
																	<input type="button" id="continue-cart" class="btn btn-3" name="continue" value="Continue Shopping"></a>
																	<a href="checkout2.php?amt=<?php echo $sub ?>">
																	<input type="button" id="checkout" class="btn btn-3" name="checkout" value="checkout"></a>
																	
																	</a>
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
						</section>
					</div>
				</div>
			</main>
<?php
include("footer.php");
?>
    