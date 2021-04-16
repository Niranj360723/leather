<?php
include("header.php");
?>
<?php 
include("../../../config/connection.php");
$id=$_SESSION['user_id'];
$sql = "select * from user u join area a where u.area_id = a.area_id and user_id = '".$id."'";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
$uid = $row['user_id'];
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
if (isset($_POST["txtname"]) && isset($_POST["txtadd"]) && isset($_POST["txtemail"]) && isset($_POST["txtpass"]) && isset($_POST["txtno"]) && isset($_POST["txtdate"]) && isset($_POST["area"]))
{
	
	$name = $_POST["txtname"];
	$address = $_POST["txtadd"];
	$email = $_POST["txtemail"];
	$password = $_POST["txtpass"];
	$contact =$_POST["txtno"];
	$birth_date =$_POST["txtdate"];
	$area_id =$_POST["area"];
	
	
	if ($name!='' && $address!='' && $email!='' && $password!='' && $password!='' && $contact!='' && $birth_date!='' && $area_id!='')
	{
		$sql = "update user set user_name='".$name."' ,address='".$address."' ,email='".$email."' ,password='".$password."',contact_no='".$contact."' ,birth_date='".$birth_date."',area_id='".$area_id."'
		where user_id = '".$id."' ";
		$result = mysqli_query($conn,$sql);
		
		

		if ($result)
		{
			echo "<meta http-equiv='refresh' content='3;url=index.php'>";
		}
	}
	else
	{
		echo "value is null";
	}
}
else
{
	echo "value not set";
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
				<section class="register-heading">
					<div class="register-heading-wrapper">
						<div class="container">
							<div class="row">
								<div class="register-heading-inner">
									<h1 class="page-title">Create Account</h1>
									<div class="breadcrumb clearfix">
										<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
										<a href="index.html" title="Modez - HTML Template" itemprop="url"><span itemprop="title">Home</span></a></span>
										<span class="arrow-space">&gt;</span>
										<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
										<a href="account-register.html" title="Create Account">Create Account</a>
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
									<div id="customer-register">
										<div id="register" class="span12">
											<form method="post" action="#" id="create_customer" accept-charset="UTF-8">
												<input type="hidden" value="create_customer" name="form_type"><input type="hidden" name="utf8" value="✓">
												<div id="first_name" class="clearfix large_form">
													<label for="first_name" class="label">First Name</label>
													<input type="text" value="<?php echo $row['user_name']?>" name="txtname" id="first" class="text" size="30">
												</div>
												<div id="address" class="clearfix large_form">
													<label for="address" class="label">Address</label>
													<input type="text" value="<?php echo $row['address']?>" name="txtadd" id="add" class="text" size="30">
												</div>
												<div id="email" class="clearfix large_form">
													<label for="email" class="label">Email</label>
													<input type="text" value="<?php echo $row['email']?>" name="txtemail" id="email" class="text" size="30">
												</div>
												<div id="password" class="clearfix large_form">
													<label for="password" class="label">Password</label>
													<input type="password" value="<?php echo $row['password']?>" name="txtpass" id="password" class="password text" size="30">
												</div>
												<div id="contact_no" class="clearfix large_form">
													<label for="contact_no" class="label">Contact No</label>
													<input type="text" value="<?php echo $row['contact_no']?>" name="txtno" id="contact" class="text" size="30">
												</div>
												<div id="birth_date" class="clearfix large_form">
													<label for="birth_date" class="label">Birth Date</label>
													<input type="date" value="<?php echo $row['birth_date']?>" name="txtdate" id="birth" class="text" size="30">
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
												<br>
												<div class="action_bottom">
												<a href="index.php">
													<input class="btn" type="submit" value="Submit">
												</a>
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