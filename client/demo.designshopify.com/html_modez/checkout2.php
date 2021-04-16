<?php
session_start();
require_once("../../../config/connection.php");
$uid=$_SESSION['user_id'];
$sql="select * from cart where user_id='".$uid."'";
$result=mysqli_query($conn,$sql);
$d = date("Y-m-d");
$t=$_GET['amt'];
$sql1="insert into orders(order_date,status,user_id,amount)
values('".$d."',0,'".$uid."','".$t."')";
$result1=mysqli_query($conn,$sql1);
$oid=mysqli_insert_id($conn);
//echo $oid;
//die;
while($row=mysqli_fetch_array($result))
{
	$qty=$row['qty'];
	//$price=$row['amount'];
	$pid=$row['product_id'];
	$sql2="insert into order_item(qty,order_id,product_id)
	values('".$qty."','".$oid."','".$pid."')";
	//echo $sql2;
	//die;
	$result2=mysqli_query($conn,$sql2);
}
$sql3="delete from cart where user_id='".$uid."'";
$result3=mysqli_query($conn,$sql3);
echo "<meta http-equiv='refresh' content='0;url=myorder.php?id=$oid&amt=$t&quantity=$qty'>";
?>
