<?php
include("header.php");
include("../../../config/connection.php");
?>
<?php
$n = $e = $usern = $m = "";
$flag=0;
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		
		if(empty($_POST["txtname"]))
		{
			$flag=1;
		$n = "please enter your name";
		}
		else
		{
			$name = $_POST["txtname"];
		}
		if(empty($_POST["txtemail"]))
		{
			$flag=1;
		$e = "please enter your email";
		}
		else
		{
			$email = $_POST["txtemail"];
		}
		if(strlen($_POST["txtphone"])<10)
		{
			$flag=1;
		$usern = "please enter your Contact";
		}
		else
		{
			$phone = $_POST["txtphone"];
		}
		if(empty($_POST["txtmessage"]))
		{
			$flag=1;
		$m = "please enter your message";
		}
		else
		{
			$message = $_POST["txtmessage"];
		}
		if(isset($_POST["txtname"]) && ($_POST["txtemail"]) && ($_POST["txtphone"]) && ($_POST["txtmessage"]) && $flag=0)
		{
			
			
			$name=$_POST["txtname"];
			$email=$_POST["txtemail"];
			$phone=$_POST["txtphone"];
			$message=$_POST["txtmessage"];
			
		
			
			if($name!='' && $email!='' && $phone!='' && $message!='')
			{
				$sql="insert into contact(contact_name,contact_email,contact_number,message)
				values('".$name."','".$email."','".$phone."','".$message."')";
                  //echo $sql;
				 
				
				$result=mysqli_query($conn,$sql);
				
				if($result)
				{
					echo "<meta http-equiv='refresh' content='0;url=index.php'>";
				}
			}
			
		}

	}
?>
<style>
.error
{
	color:#FF0000;
}
</style>


				
			<div class="fix-sticky"></div>	
			<style>
				.main-header {
				  background-color: #000000;
				}

				.main-navigation {
				  background-color: #ffffff;
				}
			</style>
			
		
  
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
											<div class="google-maps-wrapper">
												<div class="contact-information">
													<ul>
														<li><i class="fa fa-map-marker" aria-hidden="true"></i> G/12 Rushika Appartment,Kiran Park,Nava vadaj</li>
														<li><i class="fa fa-volume-control-phone" aria-hidden="true"></i> 8849223679</li>
														<li><i class="fa fa-clock-o" aria-hidden="true"></i> 9AM-8PM Mon-Sat</li>
														<li><i class="fa fa-envelope-o" aria-hidden="true"></i> contact@example.com</li>
													</ul>
												</div>
												
											</div>
											<br/>
											<br/>
											<br/>
											<br/>
											<br/>
											<br/>
											<br/>
											<br/>
											<br/>
											<br/>
											<div class="page-with-contact-form">
												<div class="contact-page-content col-sm-12">
													<div class="page-form col-sm-12">
														<div class="section-header text-center">
															<h2>Leave a Message</h2>
														</div>
														<form method="post"  id="contact_form" class="contact-form" accept-charset="UTF-8">
															
															<div id="contactFormWrapper">
																<div class="left-area col-sm-6">
																	<p>
																		<label>Your Name:</label><br>
																		<input type="text" id="contactFormName" name="txtname" placeholder="Name">
																		<span class="error"><?php echo $n;?></span>
																	</p>
																	<p>
																		<label>Your Email:</label><br>
																		<input type="email" id="contactFormEmail" name="txtemail" placeholder="Email">
																		<span class="error"><?php echo $e;?></span>
																	</p>
																	<p>
																		<label>Phone Number:</label><br>
																		<input type="telephone" id="contactFormTelephone" name="txtphone" placeholder="Number">
																		<span class="error"><?php echo $usern;?></span>
																	</p>
																</div>
																<div class="right-area col-sm-6">
																	<p>
																		<label>Message:</label><br>
																		<textarea rows="15" cols="75" id="contactFormMessage" name="txtmessage" placeholder="Your message"></textarea>
																		<span class="error"><?php echo $m;?></span>
																	</p>
																		<p class="contact_button">
																		<input type="submit" id="contactFormSubmit" value="Submit" class="btn">
																	</p>
																</div>
															</div>
														</form>
													</div>
													<div class="page-input col-sm-12">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
			</main>
			</div>
<?php
include("footer.php");
?>    