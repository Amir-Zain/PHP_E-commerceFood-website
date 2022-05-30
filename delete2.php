<?php
if(isset($_GET['id'])){
	$id=$_GET['id'];
	include("dbconnect.php");
	$result=$conn->query("delete from admin_tb where id=$id")or die(mysqli_error());
	header("location:change.php?task=succesfully");
}
else{
	header("location:change.php?task=failed");
}
?>