<?php
session_start();
include '../../controller/dbconnection.php';
$Name=$_POST['Name'];
		$Email=$_POST['Email'];
		
		$newpassword=$_POST['newpassword'];
		$retypepassword=$_POST['retypepassword'];
	if (!empty($_POST['newpassword'])&&!empty($_POST['retypepassword'])){
if (isset( $_POST['newpassword'])&&isset($_POST['retypepassword'])) {

	
	if ($_POST['newpassword']==$_POST['retypepassword']) {
	
	
	$query="UPDATE adminlogin SET admin_name='$Name' , Email='$Email' , Password='$retypepassword' WHERE id=".$_SESSION['id'] ;
			$result=mysqli_query($con,$query) or die();
			if ($result)
			{
				$_SESSION['success']="profile has been changed!!!";
				header('location: ../changeprofile.php');
				exit();
			}
		}else{
		$_SESSION['error']="Password doesn't match!!!";
		header('location: ../changeprofile.php');
		exit();
		}

}
}
else{
$query1="UPDATE adminlogin SET admin_name='$Name' , Email='$Email' WHERE id=".$_SESSION['id'] ;
			$result1=mysqli_query($con,$query1)  or die();
			
			$_SESSION['success']="profile has been changed!!!";
				header('location: ../changeprofile.php');
				exit();
			}
		
	
?>