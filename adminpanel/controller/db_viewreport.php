<?php 
session_start();
	include '../../controller/dbconnection.php';
	if (isset($_GET['delete'])) {
		$id=$_GET['delete'];
		
		mysqli_query($con, "DELETE  FROM crime_report WHERE id=$id") or die();
		header('location: ../view_report.php');
		exit();

	}
	

 ?>