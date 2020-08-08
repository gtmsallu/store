<?php 
session_start();
include '../../controller/dbConnection.php';
if (isset($_POST['submit'])) {
	$retailer_name=$_POST['retailerFirstName']." ".$_POST['retailerSecondName'];
		$PAN=$_POST['PAN'];

	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
		$shop_name=$_POST['shopName'];
	$username=$_POST['username'];
	$password=$_POST['password'];


	mysqli_query($con, "INSERT into retailer_registration (retailer_name, PAN, email, phone, address, shop_name, username, password) VALUES ('$retailer_name','$PAN','$email','$phone', '$address','$shop_name','$username','$password')");
	$_SESSION['success']="Retailer Account has been set successfully!!!";
	header('location: ../listRetailers.php');
	exit();
}else{
	$_SESSION['error']="Error while adding products...";
	header('location: ../addRetailers.php');
 }
 ?>
