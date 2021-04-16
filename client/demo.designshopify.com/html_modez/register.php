<?php
require_once("../../../config/connection.php");
$usern=$addrs=$emailn=$pswde=$phonen=$birthd="";
$flag=0;

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(empty($_POST["first"]))
	{
		$flag=1;
		$usern = "please enter your name";
	}
	else
	{
		$uname = $_POST["first"];
	}
	if(empty($_POST["add"]))
	{
		$flag=1;
		$addrs = "please enter your address";
	}
	else
	{
		$address = $_POST["add"];
	}
	if(empty($_POST["email"]))
	{
		$flag=1;
		$emailn = "please enter email address";
	}
	else
	{
		$email = $_POST["email"];
	}
	if(empty($_POST["pass"]))
	{
		$flag=1;
		$pswde = "please enter Password";
	}
	else
	{
		$pass = $_POST["pass"];
	}
	if(strlen($_POST["contact"])<10)
	{
		$flag=1;
		$phonen = "please enter your Contact";
	}
	else
	{
		$phone = $_POST["contact"];
	}
	if(empty($_POST["birth"]))
	{
		$flag=1;
		$birthd = "please enter your birthdate";
	}
	else
	{
		$birthdate = $_POST["birth"];
	}

		
		if(isset($_POST["first"]) && ($_POST["add"]) && ($_POST["email"]) && ($_POST["pass"]) && ($_POST["contact"]) && ($_POST["birth"]) && ($_POST["area"]) && ($_POST["s1"]) && $flag==0)
		{
			
			
			$fname=$_POST["first"];
			$address=$_POST["add"];
			$email=$_POST["email"];
			$password=$_POST["pass"];
			$contactno=$_POST["contact"];
			$birthdate=$_POST["birth"];
			$area=$_POST["area"];
			$user_type = $_POST["s1"];
			
		
			
			if($fname!='' && $address!='' && $email!='' && $password!='' && $contactno!='' && $birthdate!='' 
			&& $area!='')
			{
				
				if($user_type=="Customer")
				{
				
				$sql="insert into user(user_name,address,email,password,contact_no,birth_date,area_id)
				values('".$fname."','".$address."','".$email."','".$password."','".$contactno."','".$birthdate."','".$area."')";
                  //echo $sql;
				}
				else
				{
				$sql="insert into seller(seller_name,email,contact_no,address,area_id,password)
				values('".$fname."','".$email."','".$contactno."','".$address."','".$area."','".$password."')";	
				}					

				
				$result=mysqli_query($conn,$sql);
				
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
<style>
.error
{
	color:#FF0000;
}
</style>

  
		<div class="page-container" id="PageContainer">
			<main class="main-content" id="MainContent" role="main">
				<section class="register-heading">
					<div class="register-heading-wrapper">
						<div class="container">
							<div class="row">
								<div class="register-heading-inner">
									<h1 class="page-title">Create Account</h1>
									<div class="breadcrumb clearfix">
										<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
										<a href="index.php" title="Modez - HTML Template" itemprop="url"><span itemprop="title">Home</span></a></span>
										<span class="arrow-space">&gt;</span>
										<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
										<a href="register.php" title="Create Account">Create Account</a>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="register-content">
					<div class="register-wrapper">
						<div class="container">
							<div class="row">
								<div class="register-inner">
									<div id="customer-register" class="register-set">
										<div id="register" class="span12">
											<form method="post" action="#" id="create_customer" accept-charset="UTF-8">
												<input type="hidden" value="create_customer" name="form_type"><input type="hidden" name="utf8" value="✓">
												<div id="first_name" class="clearfix large_form register-a">
													<label for="first_name" class="label">First Name</label>
													<input type="text" value="" name="first" id="first" class="text" size="30">
													<span class="error"><?php echo $usern;?></span>
												</div>
												<div id="address" class="clearfix large_form register-a">
													<label for="address" class="label">Address</label>
													<input type="text" value="" name="add" id="add" class="text" size="30">
													<span class="error"><?php echo $addrs;?></span>
												</div>
												<div id="email" class="clearfix large_form register-a">
													<label for="email" class="label">Email</label>
													<input type="email" value="" name="email" id="email" class="text" size="30">
													<span class="error"><?php echo $emailn;?></span>
												</div>
												<div id="password" class="clearfix large_form register-a">
													<label for="password" class="label">Password</label>
													<input type="password" value="" name="pass" id="password" class="password text" size="30">
													<span class="error"><?php echo $pswde;?></span>
												</div>
												<div id="contact_no" class="clearfix large_form register-a">
													<label for="contact_no" class="label">Contact No</label>
													<input type="text" value="" name="contact" id="contact" class="text" size="30">
													<span class="error"><?php echo $phonen;?></span>
												</div>
												<div id="birth_date" class="clearfix large_form register-a">
													<label for="birth_date" class="label">Birth Date</label>
													<input type="date" value="" name="birth" id="birth" class="text" size="30">
													<span class="error"><?php echo $birthd;?></span>
												</div>
												<div id="area" class="clearfix large_form">
													<label for="birth_date" class="label">Area</label>
												<select style="width:590px;height:40px "class="clearfix large_form" name="area">
														<?php
															$sql="select * from area";
															$result = mysqli_query($conn,$sql);
															while($row=mysqli_fetch_array($result))
															{
																$id=$row['area_id'];
														?>
														<option value="<?php echo $row['area_id'];?>"> 
														<?php echo $row['area_name']?>
														<?php
															}
														?>
												</select>
												</div>
												<br/>
												<div id="area" class="clearfix large_form">
												<select style="width:590px;height:40px "class="clearfix large_form" name="s1">
													<option><label for="birth_date" class="label" value="customer">Customer</label></option>
													<option><label for="birth_date" class="label" value="seller">Seller</label></option>
												</select>
												</div>
								<?php
								if(isset($_GET['error']))
								{
									echo "<span style='color:red'>" . $_GET['error'] . "</span>";	
								}
								?>
												<br>
												<div class="action_bottom">
													<input class="btn" type="submit" value="Create"> or <span class="note">
													<a href="index.php" class="note-a">Return to Store</a></span>
													
												</div>
											</form>
										</div>
										<!-- #register -->
									</div>
									<!-- #customer-register -->
								</div>
							</div>
						</div>
					</div>
				</section>
			</main>		
			

<?php   
include("footer.php");
?>