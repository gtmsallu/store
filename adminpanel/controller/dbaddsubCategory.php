
 <?php
session_start();
include '../../controller/dbconnection.php';
if (isset($_POST['submit']))
{
	
	$category_name=$_POST['category_name'];
			mysqli_query($con, "INSERT into categories (cat_name , cat_banner, cat_icon) VALUES ('$category_name','$imgbanner','$imgicon')") or die();
			$_SESSION['success']="Category has been published";
			header('location: ../addCategory.php');
			exit();
}





?>
