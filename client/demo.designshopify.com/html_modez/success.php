<?php
include("header.php");
?>

<?php 
if(isset($_GET['pid']))
{
	$oid = $_GET['pid'];
	
	$sql1 = "update orders set status=1 where order_id=$oid";
	$result1 = mysqli_query($conn,$sql1);
	
	
}
?>
<html>
<body>
<br/>
<h1><center>Your PayPal transaction has been Successed.</center></h1>
<a href="myorder.php">
<center>Return to Index</center>
</a>
<br/>
</body>
</html>
<?php
include("footer.php");
?>