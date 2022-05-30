<?php
if(isset($_GET['id'])){
	$id=$_GET['id'];
	include("dbconnect.php");
	$result=$conn->query("delete from food_tb where id=$id")or die(mysqli_error());
	header("location:viewfood.php?task=succesfully");
}
else{
	header("location:viewfood.php?task=failed");
}
?>