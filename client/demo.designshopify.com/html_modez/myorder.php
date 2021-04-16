<?php
include("header.php");
include("../../../config/connection.php");
$paypalURL = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
$paypalID = 'leathervortal123@gmail.com'; //Business Email

?>


<?php
if(isset($_GET['oid']))
{
		$oid = $_GET['oid'];
		$sql = "update orders set payment_status = 1 where order_id = $oid";
		$r = mysqli_query($conn,$sql);
		
		if($r)
		{
			echo "<meta http-equiv='refresh' content='0;url=myorder.php'>";
		}
}
?>

<?php

$uid = $_SESSION['user_id'];
$sql="select * from orders o where user_id = $uid order by o.order_id desc";

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
												<a href="cart.php" title="Your cart">Your cart</a>
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
												
														<table>
															<thead>
																<tr>
																	<th class="image">
																		Order id
																	</th>
																	<th class="price">
																		Date
																	</th>
																	<th class="qty">
																		Amount
																	</th>
																	<th class="total">
																		Order Status
																	</th>
																	<th class="remove">
																		Payment Status
																	</th>
																	<th class="remove">
																		View Detail
																	</th>
																</tr>
															</thead>
															<tbody>
									<?php
									while($row=mysqli_fetch_array($result))
									{
										$oid = $row['order_id'];
									?>
                                        <tr>
                                            
                                                
                                            </div></div></td>
                                            <td class="pro-subtotal"><span><?php echo $row['order_id']?></span></td>
											<td class="pro-subtotal"><span><?php echo $row['order_date']?></span></td>
											<td class="pro-subtotal"><span>₹<?php echo $row['amount']?></span></td>
											
											<td class="pro-subtotal"><span><?php
															if($row['status']==1)
															{
																echo "Accepted";
															}
															else if($row['status']==2)
															{
																echo "Rejected";
															}
															else if($row['status']==0)
															{
																echo "Pending";
															}
															?></span></td>
															<td class="pro-subtotal">
															
															
    <form action="<?php echo $paypalURL; ?>" method="post">
			
	        <input type="hidden" name="business" value="<?php echo $paypalID; ?>">
        
        <!-- Specify a Buy Now button. -->
        <input type="hidden" name="cmd" value="_xclick">
        
		<?php
									$email = $_SESSION['user_name'];
		?>
        <!-- Specify details about the item that buyers will purchase. -->
        <input type="hidden" name="item_name" value="<?php echo $email; ?>">
		<input type="hidden" name="amount" value="<?php echo $row['amount']/70; ?>">
          <input type="hidden" name="currency_code" value="USD">
        
        <!-- Specify URLs -->
        <input type='hidden' name='cancel_return' value='http://localhost/leathervortal/client/demo.designshopify.com/html_modez/cancel.php'>
		
      <input type='hidden' name='return' value='http://localhost/leathervortal/client/demo.designshopify.com/html_modez/success.php?oid=<?php echo $oid?>'>
															 <!-- Display the payment button. -->
	<?php if($row['status']==1 && $row['payment_status']==0)
	{
	?>
        <input type="image" name="submit" border="0" style="height:40px"
        src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" alt="PayPal - The safer, easier way to pay online">
        <img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
 
	<?php
	}
	?>
															</td>
											
															<td> <a href='viewdetail.php?id=<?php echo $oid?>'>View details</a></td>
										
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
    