<?php
if(isset($_GET['id'])){
	$id=$_GET['id'];
	include("dbconnect.php");
	$result=$conn->query("delete from customer_tb where id=$id")or die(mysqli_error());
	header("location:orders.php?task=succesfully");
}
else{
	header("location:orders.php?task=failed");
}
?>