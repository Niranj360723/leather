<!DOCTYPE html>
<?php
require_once("../config/connection.php");
session_start();

	if($_SERVER["REQUEST_METHOD"] == "POST")
	{

		if(isset($_POST["user"]) && isset($_POST["PASS"]))
		{
			$username = $_POST["user"];
			$password = $_POST["pass"];

			if($username !='' && $password !='')
			{

				$query = "select * from user where
				User_name = '".$username."' and
				password='".$password."' and is_admin=1";

				$result = mysqli_query($conn, $query);

					if (mysqli_query_rows($result) == 1)
					{
						$row = mysqli_query_fetch_array($result);
						$_SESSION['username'] = $username;
						header("localhost:login.php");
					}
					else
					{
						header("Location:index.php? error=invalid username and password");
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





<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from phantom-themes.com/flatify/theme/templates/admin1/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Dec 2018 11:28:29 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Admin Dashboard Template">
        <meta name="keywords" content="admin,dashboard">
        <meta name="author" content="phantom-themes">
        <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <!-- Title -->
        <title>Flatify - Responsive Admin Dashboard Template</title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Gudea:400,700" rel="stylesheet">
        <link href="../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../../assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="../../assets/plugins/icomoon/style.css" rel="stylesheet">
        <link href="../../assets/plugins/waves/waves.min.css" rel="stylesheet">
        <link href="../../assets/plugins/uniform/css/default.css" rel="stylesheet">
      
        <!-- Theme Styles -->
        <link href="../../assets/css/flatifytheme.min.css" rel="stylesheet">
        <link href="../../assets/css/custom.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        
        <!-- Page Container -->
        <div class="page-container login-page">
            
            <!-- Page Content -->
            <div class="page-content">
            
                <!-- Page Inner -->
                <div class="page-inner">
                <div id="main-wrapper"><div class="row">
                        <div class="col-md-3 col-login-box-alt">
                            <div class="panel panel-darkblue login-box">
                                <div class="panel-body">
                                    <a href="index.html" class="logo-name">Flatify</a>
                                    <p class="m-t-md">Please login into your account</p>
                                    <form class="m-t-md" action="http://phantom-themes.com/flatify/theme/templates/admin1/index.html">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="password form-control" placeholder="Password" required="">
                                        </div>
                                        <button type="submit" class="btn btn-success btn-block">Login</button>
                                        <a href="register.html" class="btn btn-default btn-block badge-reg-button">Register</a>
                                        <a href="#" class="display-block text-muted">Forgot Password?</a>
                                    </form>
                                    <p class="text-center m-t-xs text-sm login-footer">2018 &copy; phantom-themes</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Main Wrapper -->
                </div><!-- /Page Inner -->
            </div><!-- /Page Content -->
        </div><!-- /Page Container -->
        
        
        <!-- Javascripts -->
        <script src="../../assets/plugins/jquery/jquery-3.1.0.min.js"></script>
        <script src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="../../assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="../../assets/plugins/waves/waves.min.js"></script>
        <script src="../../assets/plugins/uniform/js/jquery.uniform.standalone.js"></script>
        <script src="../../assets/plugins/pace/pace.min.js"></script>
        <script src="../../assets/js/flatifytheme.min.js"></script>
    </body>

<!-- Mirrored from phantom-themes.com/flatify/theme/templates/admin1/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Dec 2018 11:28:29 GMT -->
</html>