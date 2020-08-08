<?php 
session_start();
include '../../controller/dbConnection.php';
if (isset($_POST['submit'])) {
	
require_once('../ImageManipulator.php');
	if ($_FILES['mainImg']['error'] > 0) 
	{
		echo "Error: " . $_FILES['mainImg']['error'] . "<br />";
	} else 
	{
		// array of valid extensions
		$validExtensions = array('.jpg', '.jpeg', '.gif', '.png' ,'.JPG','PNG');
		// get extension of the uploaded file
		$fileExtension = strrchr($_FILES['mainImg']['name'], ".");
		// check if file Extension is on the list of allowed ones
		if (in_array($fileExtension, $validExtensions)) 
		{
			$newNamePrefix=time().'_';
			$manipulator=new ImageManipulator($_FILES['mainImg']['tmp_name']);
			$newImage=$manipulator->resample(200,300);
			$manipulator->save('../imgproduct/'.$newNamePrefix.$_FILES['mainImg']['name']);
			/*$image=move_uploaded_file($_FILES['image']['tmp_name'], "../img/".$newNamePrefix.$_FILES['image']['name']);*/
			$mainImg="imgproduct/".$newNamePrefix.$_FILES['mainImg']['name'];
			
			
		}
	 	else 
		{
			$_SESSION['imgerror']= "you can't choose this type of file...";
			header('location: ../product.php');
			exit();
		}
	}
	if ($_FILES['extraImg']['error'] > 0) 
	{
		echo "Error: " . $_FILES['extraImg']['error'] . "<br />";
	} else 
	{
		// array of valid extensions
		$validExtensions = array('.jpg', '.jpeg', '.gif', '.png' ,'.JPG','PNG');
		// get extension of the uploaded file
		$fileExtension = strrchr($_FILES['extraImg']['name'], ".");
		// check if file Extension is on the list of allowed ones
		if (in_array($fileExtension, $validExtensions)) 
		{
			$newNamePrefix=time().'_';
			$manipulator=new ImageManipulator($_FILES['extraImg']['tmp_name']);
			$newImage=$manipulator->resample(32,32);
			$manipulator->save('../imgproduct/'.$newNamePrefix.$_FILES['extraImg']['name']);
			/*$image=move_uploaded_file($_FILES['image']['tmp_name'], "../img/".$newNamePrefix.$_FILES['image']['name']);*/
			$extraImg="imgproduct/".$newNamePrefix.$_FILES['extraImg']['name'];
			
			
		}
	 	else 
		{
			$_SESSION['imgerror']= "you can't choose this type of file...";
			header('location: ../product.php');
			exit();
		}
	}



	$productName=$_POST['productName'];
		$category=$_POST['category'];
	$price=$_POST['price'];
		$quantity=$_POST['quantity'];
	$description=$_POST['description'];
	$shippingFee=$_POST['shippingFee'];
	$p_type=$_POST['p_type'];


	$result=mysqli_query($con, "INSERT into products (p_name, p_type, category, main_img, p_price, p_quantity, description, shipping_fee) VALUES ('$productName','$p_type', '$category','$mainImg','$price', '$quantity','$description','$shippingFee')") or die();
	
		$_SESSION['success']="Product has been add successfully!!!";
	header('location: ../product.php');
	exit();
	
	
}else{
	$_SESSION['error']="Error while adding products...";
	header('location: ../addProduct.php');
 }
 ?>
