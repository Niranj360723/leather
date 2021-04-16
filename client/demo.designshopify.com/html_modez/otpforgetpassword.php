<?php
include("header.php");
?>
<?php 
require_once("../../../config/connection.php");

if ($_SERVER["REQUEST_METHOD"]=="POST") {
	
	$id=$_SESSION['user_id'];
	$otp = $_POST['otp'];
	$nPass = $_POST['newpassword'];
	$cPass = $_POST['cpassword'];
	
	if ($nPass != $cPass) {
		echo "password must be same";
		exit;
	}
	
	$query = "update user set otpused = 1, 
	password = '".$nPass."' where user_id='".$id."' and 
	otp = '".$otp."'";
	
	echo $query;
	
	$result = mysqli_query($conn, $query);
	if ($result) {
		
		echo "		<script>
						alert('Password Sucessfully Reset !');
						window.location='login.php';
					</script>";
	
	
	}
	
}
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
				<section class="login-heading">
					<div class="login-heading-wrapper">
						<div class="container">
							<div class="row">
								<div class="login-heading-inner">
									<h1 class="page-title">Login</h1>
									<div class="breadcrumb clearfix">
										<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
										<a href="index.html" title="Modez - HTML Template" itemprop="url"><span itemprop="title">Home</span></a></span>
										<span class="arrow-space">&gt;</span>
										<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
										<a href="account-login.html" title="Login">Login</a>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="login-content">
					<div class="login-content-wrapper">
						<div class="container">
							<div class="row">
								<div class="login-content-inner">
									<div id="customer-login">
										<div id="login" class="">
											<form method="post" action="#" id="customer_login" accept-charset="UTF-8">
												<input type="hidden" value="customer_login" name="form_type"><input type="hidden" name="utf8" value="✓">
												<label for="customer_email" class="label">Otp</label>
												<input type="text" value="" name="otp" id="customer_email" class="text">
												<label for="customer_password" class="label">New Password</label>
												<input type="password" value="" name="newpassword" id="customer_password" class="text" size="16">
												<label for="customer_password" class="label">Confirm Password</label>
												<input type="password" value="" name="cpassword" id="customer_password" class="text" size="16">
												
									<?php
									if(isset($_GET['error']))
									{
										echo "<span style='color:red'>" .$_GET['error']."</span>";
									}
										?>
												
												<div class="action_bottom">
													<input class="btn" type="submit" value="Sign In">
												</div>
											</form>
										</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			
			
    <script type="text/javascript">
				  function showRecoverPasswordForm() {
					document.getElementById('recover-password').style.display = 'block';
					document.getElementById('login').style.display='none';
				  }
				  function hideRecoverPasswordForm() {
					document.getElementById('recover-password').style.display = 'none';
					document.getElementById('login').style.display = 'block';
				  }
				  if (window.location.hash == '#recover') { showRecoverPasswordForm() }
				</script>
			</main>			


			
<?php
include("footer.php");
?>
    
    