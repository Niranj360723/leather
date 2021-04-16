<?php
include("header.php");
require_once("../../../config/connection.php");
//Set useful variables for paypal form
$paypalURL = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
$paypalID = 'leathervortal123@gmail.com'; //Business Email

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

    <form action="<?php echo $paypalURL; ?>" method="post">		
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
																	<center>Product Name</center>
																	</th>
																	<th class="image">
																	<center>Quantity</center>
																	</th>
																	<th class="total">
																	<center>Size</center>
																	</th>
																	<th class="image">
																	<center>Total Order</center>
																	</th>
																	
																	
																</tr>
										<?php
										$uid=$_SESSION['user_id'];
										$email = $_SESSION['user_name'];
										$oid=$_GET['id'];
										$sql="Select * From order_item o join orders om join product p where o.product_id=p.product_id and o.order_id=om.order_id and om.order_id=$oid";
										//echo $sql;
										//die;
										$results=mysqli_query($conn,$sql);
										while($row=mysqli_fetch_array($results))
										{
											
										?>
																<tr>
																	<th class="image">
																		<center><?php echo $row['product_name']?></center>
																	
																	</th>
																	
																	<th class="total">
																		<?php echo $row['qty']?>
																	</th>
																	<th class="total">
																		<?php echo $row['size']?>
																	</th>
																	
																	
																	<th class="total">
																	₹<?php echo $row['amount']?>
																	</th>
																	
																	<?php $amt=$row['amount']/70;?>
																</tr>
										<?php
										}
										?>
										
															</thead>
										
														</table>
	
	        <input type="hidden" name="business" value="<?php echo $paypalID; ?>">
        
        <!-- Specify a Buy Now button. -->
        <input type="hidden" name="cmd" value="_xclick">
        
        <!-- Specify details about the item that buyers will purchase. -->
        <input type="hidden" name="item_name" value="<?php echo $email; ?>">
		<input type="hidden" name="amount" value="<?php echo $amt; ?>">
          <input type="hidden" name="currency_code" value="USD">
        
        <!-- Specify URLs -->
        <input type='hidden' name='cancel_return' value='http://localhost/leathervortal/client/demo.designshopify.com/html_modez/cancel.php'>
		
      <input type='hidden' name='return' value='http://localhost/leathervortal/client/demo.designshopify.com/html_modez/myorder.php?oid=<?php echo $oid?>'>
        
 
														
														<div class="group-bottom">
															<div class="cart-buttons col-sm-12">
																<div class="buttons clearfix">
																	
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
    