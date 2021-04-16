<?php
require_once("../../../config/connection.php");


	if($_SERVER["REQUEST_METHOD"] == "POST")
	{

		if(isset($_POST["email"]) && isset($_POST["password"]))
		{
			$email = $_POST["email"];
			$password = $_POST["password"];

			if($email !='' && $password !='' )
			{

				$query = "select * from user where
				email = '".$email."' and
				password='".$password."'";

				$result = mysqli_query($conn,$query);

					if(mysqli_num_rows($result) == 1)
					{
						$newpassword=$_POST["newpassword"];
						$rnewpassword=$_POST["rnewpassword"];
					if($newpassword == $rnewpassword)
					{
						$query1="update user set password = '".$newpassword."'
						where email = '".$email."'";
						$result1 = mysqli_query($conn,$query1);
						if($result1)
						{
								header("Location:login.php?msg=success");
								
						}
					}
					else
					{
						header("Location:reset.php?error=invalid new password");
					}
			}
			}
			else
			{
				echo "value is null";
			}
		}
		else
		{
			echo "null value";
		}
	}

?>
<?php
include("header.php");
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
												<label for="customer_email" class="label">Email</label>
												<input type="email" value="" name="email" id="customer_email" class="text">
												<label for="customer_password" class="label">Password</label>
												<input type="password" value="" name="password" id="customer_password" class="text" size="16">
												<label for="customer_password" class="label">New Password</label>
												<input type="password" value="" name="newpassword" id="customer_password" class="text" size="16"><label for="customer_password" class="label">Retype New Password</label>
												<input type="password" value="" name="rnewpassword" id="customer_password" class="text" size="16">
												
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
    
    