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
				<div id="html-section-contact-template" class="html-section">
					<section class="blcontactog-heading">
						<div class="contact-heading-wrapper">
							<div class="container">
								<div class="row">
									<div class="contact-heading-inner">
										<h1 class="page-title"><span>Contact us</span></h1>
										<div class="breadcrumb clearfix">
											<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
												<a href="index.php" title="Modez - HTML Template" itemprop="url"><span itemprop="title">Home</span></a></span>
												<span class="arrow-space">&gt;</span>
												<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
												<a href="pagecontact.php" title="Contact us">Contact us</a>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section class="contact-content">
						<div class="contact-wrapper">
							<div class="container">
								<div class="row">
									<div class="contact-inner">
										<div id="page">
											<?php if(isset($_SESSION['user_id']))
											{
											?>
											<div class="page-with-contact-form">
												<div class="contact-page-content col-sm-12">
													<div class="page-form col-sm-12">
														<div class="section-header text-center">
															<h2>Feedback</h2>
														</div>
														<form method="post" id="contact_form" class="contact-form" accept-charset="UTF-8">
															
															<div id="contactFormWrapper">
																
																<div class="right-area col-sm-6">
																	<p>
																		<label>Description:</label><br>
																		<textarea rows="15" cols="75" id="contactFormMessage" name="txtdesc" placeholder="Your message"></textarea>
																	</p>
																	<p class="contact_button">
																		<input type="submit" name="submit" id="contactFormSubmit" value="Submit" class="btn">
																	</p>
																</div>
															</div>
														</form>
											<?php
											}
											?>
														
														
														<?php

	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		if(isset($_POST["txtdesc"]))

		{
			$uid = $_SESSION['user_id'];
			$description=$_POST["txtdesc"];
			
			$feedbackdate=date('y-m-d');		
			
			if($description!='' && $feedbackdate!='' && $uid!='')
			{
				$sql1="insert into feedback(description,feedback_date,user_id)
				values('".$description."','".$feedbackdate."','".$uid."')";
                //echo $sql1;
				//die;
				$result=mysqli_query($conn,$sql1);
				
				
				if($result)
				{
					
					echo "<meta http-equiv='refresh' content='0;url=index.php'>";
				}
			}
			
		}
		else
		{
			echo"value not set";
		}
	}
?>

													</div>
													<div class="page-input col-sm-12">
													</div>
												</div>
											</div>
											<tr>
<?php
	$sql = "SELECT * from feedback f, user u 
		where f.user_id=u.user_id";
	
    $result=mysqli_query($conn,$sql);
	while($row = mysqli_fetch_array($result))	
{
	$id=$row['feedback_id'];
?>
										
												<table border="0">
												<tr>
											
											
													<td>
													<h4 class="title"><?php echo $row['description'] ?></h4>
													<h4 class="title"><?php echo $row['user_name'] ?></h4>
													<h4 class="title"><?php echo $row['feedback_date'] ?></h4>
													</td>
												</tr>
												</table>
											
				
	

											
													
													
<?php
}
?>			
									
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
			</main>

<?php
include("footer.php");
?>
    