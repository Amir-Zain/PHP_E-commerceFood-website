<?php
include("dbconnect.php");
$a=mysqli_real_escape_string($conn,$_REQUEST['fname']);
$b=mysqli_real_escape_string($conn,$_REQUEST['bname']);
$c=mysqli_real_escape_string($conn,$_REQUEST['price']);
$d=mysqli_real_escape_string($conn,$_REQUEST['name']);
$e=mysqli_real_escape_string($conn,$_REQUEST['mobile']);
$f=mysqli_real_escape_string($conn,$_REQUEST['pay']);
$sql="INSERT INTO customer_tb(fname,bname,price,name,mobile,pay)VALUES('$a','$b','$c','$d','$e','$f')";
if(mysqli_query($conn,$sql)){
	header("location:products.php?task=succesfully");
	$msg="Product Booking Succesfully";
}else{
	$msg="Product Booking Failed";
	echo "ERROR:Could not able to execute $sql".mysqli_error($conn);
}
mysqli_close($conn);
?>