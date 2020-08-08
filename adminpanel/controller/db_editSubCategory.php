<?php 
session_start();
include '../../controller/dbConnection.php';
if (isset($_POST['submit'])) {
	$id=$_POST['id'];

	$cat_name=$_POST['cat_name'];
		
	$query="UPDATE categories SET cat_name='$cat_name'    WHERE cat_id=".$id ;

	mysqli_query($con, $query);
	$_SESSION['success']="Category has been update successfully!!!";
	header('location: ../category.php');
	exit();
}else{
	$_SESSION['error']="Error while adding products...";
	header('location: ../addCategory.php');
 }
 ?>
