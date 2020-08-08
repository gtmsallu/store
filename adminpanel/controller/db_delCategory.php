<?php 
session_start();
	include ('../../controller/dbConnection.php');
	if (isset($_GET['delete'])) {
		$id=$_GET['delete'];
		$result=mysqli_query($con, "DELETE  FROM categories WHERE cat_id=$id") or die();
 
		if ($result==true) {
					header('location: ../category.php');

		}else{
					echo "error";

		}
		}

	
 ?>