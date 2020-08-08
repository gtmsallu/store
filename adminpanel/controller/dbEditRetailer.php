<?php 
session_start();
include '../../controller/dbConnection.php';
if (isset($_POST['submit'])) {
	$id=$_POST['id'];

	$retailer_name=$_POST['retailerName'];
		$PAN=$_POST['PAN'];

	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
		$shop_name=$_POST['shopName'];
	$username=$_POST['username'];
	$password=$_POST['password'];

	$query="UPDATE retailer_registration SET retailer_name='$retailer_name' , PAN='$PAN' , email='$email', email='$email', phone='$phone',address='$address',shop_name='$shop_name', username='$username', password='$password'     WHERE id=".$id ;

	mysqli_query($con, $query);
	$_SESSION['success']="Retailer Account has been update successfully!!!";
	header('location: ../listRetailers.php');
	exit();
}else{
	$_SESSION['error']="Error while adding products...";
	header('location: ../addRetailers.php');
 }
 ?>
