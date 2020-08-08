<?php 
session_start();
	include '../../controller/dbconnection.php';
	if (isset($_GET['delete'])) {
		$id=$_GET['delete'];
		
		mysqli_query($con, "DELETE  FROM adminlogin WHERE id=$id") or die();
		header('location: ../view_admin.php');
		exit();

	}
	if (isset($_GET['edit'])) {
		$id=$_GET['edit'];
		
		mysqli_query($con, "UPDATE adminlogin WHERE id=$id") or die();
		header('location: ../view_admin.php');
		exit();

	}

 ?>