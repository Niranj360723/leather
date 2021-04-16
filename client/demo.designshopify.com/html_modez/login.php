<?php
include("header.php");
?>
<?php
require_once("../../../config/connection.php");
$usern = $pswd = $a = "";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
		if(empty($_POST["user"]))
		{
		$usern = "please enter email address";
		}
		else
		{
			$user = $_POST["user"];
		}
		if(empty($_POST["password"]))
		{
			$pswd = "please enter Password";
		}
		else
		{
			$password = $_POST["password"];
		}
		if(isset($_POST["user"]) && isset($_POST["password"]))
		{
			$username = $_POST["user"];
			$password = $_POST["password"];

			if($username !='' && $password !='')
			{

				$query = "select * from user where
				email = '".$username."' and
				password='".$password."' and isadmin=0";
				
				

				$result = mysqli_query($conn,$query);

					if(mysqli_num_rows($result) == 1)
					{
						$row = mysqli_fetch_array($result);
						$_SESSION['user_id'] = $row['user_id'];
						$_SESSION['user_name'] = $row['email'];
						//header("Location:index.php");
						echo "<meta http-equiv='refresh' content='0;url=index.php'>";
					}
					else
					{
						header("Location:login.php?error=invalid username and password");
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
<style>
.error
{
	color:#FF0000;
}
</style>
  
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
										<a href="index.php" title="Modez - HTML Template" itemprop="url"><span itemprop="title">Home</span></a></span>
										<span class="arrow-space">&gt;</span>
										<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
										<a href="login.php" title="Login">Login</a>
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
										<div id="login" class="login-set">
											<form method="post" action="#" id="customer_login" accept-charset="UTF-8">
												<input type="hidden" value="customer_login" name="form_type"><input type="hidden" name="utf8" value="✓">
												<label for="customer_email" class="label">Email</label>
												<input type="email" value="" name="user" id="customer_email" class="text">
												<span class="error"><?php echo $usern;?></span>
												
												
												<label for="customer_password" class="label">Password</label>
												<input type="password" value="" name="password" id="customer_password" class="text" size="16">
												<span class="error"><?php echo $pswd;?></span><br/>
												
												
								<?php
								if(isset($_GET['error']))
								{
									echo "<span style='color:red'>" . $_GET['error'] . "</span>";	
								}
								?>
												<a href="forgetotp.php" onclick="showRecoverPasswordForm();return false;">Forgot your password?</a>
												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												<a href="reset.php" onclick="showRecoverPasswordForm();return false;">Reset Password?</a>
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
    
    