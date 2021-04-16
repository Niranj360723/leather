<?php
include("header.php");
include("../../../config/connection.php");
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
				<section class="list-collection-heading">
					<div class="list-collection-heading-wrapper">
						<div class="container">
							<div class="row">
								<div class="list-collection-heading-inner">
									<h1 class="page-title"><span>Collections Listing</span></h1>
									<div class="breadcrumb clearfix">
										<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="index.php" title="Modez - HTML Template" itemprop="url"><span itemprop="title">Home</span></a></span>
										<span class="arrow-space">/</span>
										<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="collectionlisting.php" title="List Collection"><span itemprop="title">Collection Listing</span></a></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="list-collection-content">
					<div class="list-collections-wrapper">
						<div class="container">
							<div class="row products masonry">
								<div class="collections_product_group">
									<div class="collections_product_inner">
										
										<div class="product">
											<div class="image">
												<a href="men.php">
												<img src="assets/images/categorymen.jpg" style="height:400px;width:400px" alt="Electronics">
												</a>
												<div class="hover_button">
													<a href="men.php">
													View all </a>
												</div>
											</div>
											<div class="details">
												<a href="men.php" class="clearfix">
												<h4 class="title">Men</h4>
											<?php
											$sql4="select count(product_id) as total from product p join sub_category s join category c where p.sub_category_id=s.sub_category_id and s.category_id=c.category_id and c.category_name = 'mens'";
											$result4 = mysqli_query($conn,$sql4);
											$row4 = mysqli_fetch_array($result4);
											?>
												<span class="price">Total <?php echo $row4['total']?> Products</span>
												</a>
											</div>
										</div>
										<div class="product">
											<div class="image">
												<a href="women.php">
												<img src="assets/images/categorywomen.jpg" style="height:400px;width:400px" alt="Furniture">
												</a>
												<div class="hover_button">
													<a href="women.php">
													View all </a>
												</div>
											</div>
											<div class="details">
												<a href="women.php" class="clearfix">
												<h4 class="title">Women</h4>
												<?php
											$sql4="select count(product_id) as total from product p join sub_category s join category c where p.sub_category_id=s.sub_category_id and s.category_id=c.category_id and c.category_name = 'women'";
											$result4 = mysqli_query($conn,$sql4);
											$row4 = mysqli_fetch_array($result4);
											?>
												<span class="price">Total <?php echo $row4['total']?> Products</span>
												</a>
											</div>
										</div>
										<div style="clear:both;">
										</div>
										<div class="product">
											<div class="image">
												<a href="kid.php">
												<img src="assets/images/categorykid.jpg" style="height:400px;width:400px" alt="T-shirts">
												</a>
												<div class="hover_button">
													<a href="kid.php">
													View all </a>
												</div>
											</div>
											<div class="details">
												<a href="kid.php" class="clearfix">
												<h4 class="title">Kid</h4>
												<?php
											$sql4="select count(product_id) as total from product p join sub_category s join category c where p.sub_category_id=s.sub_category_id and s.category_id=c.category_id and c.category_name = 'kids'";
											$result4 = mysqli_query($conn,$sql4);
											$row4 = mysqli_fetch_array($result4);
											?>
												<span class="price">Total <?php echo $row4['total']?> Products</span>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</main>
<?php
include("footer.php");
?>
    