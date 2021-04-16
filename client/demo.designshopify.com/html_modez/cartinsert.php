<?php 
session_start() ;
require_once("../../../config/connection.php");
 	
	  $d = date("Y-m-d");
	  $uid = $_SESSION['user_id'];
	  $pid = $_GET['product_id'];
	  $size = $_GET['size'];
	  $qty = $_GET['qty'];
	

	  $sql1 = "select product_price from product where product_id = '".$pid."'";
	 
	  $result1 = mysqli_query($conn,$sql1);
	  $row1=mysqli_fetch_array($result1);
	  $amount = $row1['product_price'];
	  
	  $total = $amount * $qty;
	
	  
	  $sql3 = "select * from cart where product_id=$pid and user_id=$uid and size = '".$size."'";
		
	
	  
	 $result3 = mysqli_query($conn,$sql3);
	  
	  if(mysqli_num_rows($result3) == 1)
	  {
		$row3 = mysqli_fetch_array($result3);  
		$q = $row3['qty'];
		$amt = $row3['price'];
		$amt = $amt + $total;
		$nq = $q + $qty;
		
		$sql = "update cart set qty = $nq , price = $amt where user_id = $uid and product_id=$pid"; 	
	
		//echo $sql;
		//die;
	}
	  else
	  {
		$sql="insert into cart(date,user_id,qty,price,product_id,size)
		values('".$d."','".$uid."','".$qty."','".$total."','".$pid."','".$size."')";
		//echo $sql;
		//die;
	  }

	  $result=mysqli_query($conn,$sql);
	  
	  if($result)
	  {
		  echo "<meta http-equiv='refresh' content='0;url=cart.php'>";
	  }
  
   
 ?>