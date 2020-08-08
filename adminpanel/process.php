<?php 
session_start();
	include '../controller/dbconnection.php';
	if (isset($_GET['delete'])) {
		$id=$_GET['delete'];
		mysqli_query($con, "DELETE  FROM user_registration WHERE ID=$id") or die();
		header('location: admindash.php');
		exit();

	}
 ?>