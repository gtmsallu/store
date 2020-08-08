<?php
session_start();
include '../../controller/dbconnection.php';
if (isset($_POST['role']))
{
	$email=$_POST['adminemail'];
	$name=$_POST['adminname'];
	$password=$_POST['adminpassword'];
	$Role=$_POST['role'];
	require_once('../ImageManipulator.php');
	if ($_FILES['image']['error'] > 0) 
	{
		echo "Error: " . $_FILES['image']['error'] . "<br />";
	} else 
	{
		// array of valid extensions
		$validExtensions = array('.jpg', '.jpeg', '.gif', '.png' ,'.JPG','PNG');
		// get extension of the uploaded file
		$fileExtension = strrchr($_FILES['image']['name'], ".");
		// check if file Extension is on the list of allowed ones
		if (in_array($fileExtension, $validExtensions)) 
		{
			$newNamePrefix=time().'_';
			$manipulator=new ImageManipulator($_FILES['image']['tmp_name']);
			$newImage=$manipulator->resample(200,200);
			$manipulator->save('../img/'.$newNamePrefix.$_FILES['image']['name']);
			/*$image=move_uploaded_file($_FILES['image']['tmp_name'], "../img/".$newNamePrefix.$_FILES['image']['name']);*/
			$img="img/".$newNamePrefix.$_FILES['image']['name'];
			$query= "INSERT INTO adminlogin (admin_name, Role, Email, Password, image) VALUES ('$name','$Role','$email','$password','$img')";
			$result=mysqli_query($con,$query) or die();
			if ($result==1) 
			{
				$_SESSION['success']="Admin has been added succesfully!!!";
		
				header('location: ../register_admin.php');
				exit();
			}
		}
	 	else 
		{
			$_SESSION['imgerror']= "you can't choose this type of file...";
			header('location: ../register_admin.php');
			exit();
		}
	}
}
?>