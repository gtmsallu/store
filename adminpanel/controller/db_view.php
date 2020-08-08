<?php 
session_start();
	include '../../controller/dbconnection.php';
	if (isset($_GET['delete'])) {
		$id=$_GET['delete'];
		$Database=$_GET['database'];
		mysqli_query($con, "DELETE  FROM ".$Database." WHERE cat_id=$id") or die();
		header('location: ../view_cat.php');
		exit();

	}
 ?>