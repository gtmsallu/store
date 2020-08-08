<?php 
session_start();
	include ('../../controller/dbConnection.php');
	if (isset($_GET['delete'])) {
		$id=$_GET['delete'];
		$Database=$_GET['database'];
		mysqli_query($con, "DELETE  FROM ".$Database." WHERE id=$id") or die();
		if ($Database=="retailer_msg") {
					header('location: ../retailerMsg.php');

		}elseif ($Database=="retailer_registration") {
		header('location: ../listRetailers.php');

		}
		exit();

	}
 ?>