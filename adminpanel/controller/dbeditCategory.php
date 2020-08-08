<?php
session_start();
include ('../../controller/dbConnection.php');
if (isset($_POST['submit'])) {
	require_once('../ImageManipulator.php');
	if ($_FILES['cat_banner']['error'] > 0)
	{
		echo "Error: " . $_FILES['cat_banner']['error'] . "<br />";
	} else
	{
		// array of valid extensions
		$validExtensions = array('.jpg', '.jpeg', '.gif', '.png' ,'.JPG','PNG');
		// get extension of the uploaded file
		$fileExtension = strrchr($_FILES['cat_banner']['name'], ".");
		// check if file Extension is on the list of allowed ones
		if (in_array($fileExtension, $validExtensions))
		{
			$newNamePrefix=time().'_';
			$manipulator=new ImageManipulator($_FILES['cat_banner']['tmp_name']);
			$newImage=$manipulator->resample(200,300);
			$manipulator->save('../imgcategory/'.$newNamePrefix.$_FILES['cat_banner']['name']);
			/*$image=move_uploaded_file($_FILES['image']['tmp_name'], "../img/".$newNamePrefix.$_FILES['image']['name']);*/
			$imgbanner="imgcategory/".$newNamePrefix.$_FILES['cat_banner']['name'];
			
			
		}
		else
		{
			$_SESSION['imgerror']= "you can't choose this type of file...";
			header('location: ../addCategory.php');
			exit();
		}
	}
	require_once('../ImageManipulator.php');
	if ($_FILES['cat_icon']['error'] > 0)
	{
		echo "Error: " . $_FILES['cat_icon']['error'] . "<br />";
	} else
	{
		// array of valid extensions
		$validExtensions = array('.jpg', '.jpeg', '.gif', '.png' ,'.JPG','PNG');
		// get extension of the uploaded file
		$fileExtension = strrchr($_FILES['cat_icon']['name'], ".");
		// check if file Extension is on the list of allowed ones
		if (in_array($fileExtension, $validExtensions))
		{
			$newNamePrefix=time().'_';
			$manipulator=new ImageManipulator($_FILES['cat_icon']['tmp_name']);
			$newImage=$manipulator->resample(32,32);
			$manipulator->save('../imgcategory/'.$newNamePrefix.$_FILES['cat_icon']['name']);
			/*$image=move_uploaded_file($_FILES['image']['tmp_name'], "../img/".$newNamePrefix.$_FILES['image']['name']);*/
			$imgicon="imgcategory/".$newNamePrefix.$_FILES['cat_icon']['name'];
			
			
		}
		else
		{
			$_SESSION['imgerror']= "you can't choose this type of file...";
			header('location: ../category_bannerSet.php');
			exit();
		}
	}
	$id=$_POST['id'];
	$cat_name=$_POST['cat_name'];
		
	$query="UPDATE categories SET cat_name='$cat_name', sub_category='$sub_category', cat_banner='$imgbanner',cat_icon='$imgicon'   WHERE cat_id=".$id ;
	mysqli_query($con, $query);
	$_SESSION['success']="Category has been update successfully!!!";
	header('location: ../category.php');
	exit();
}else{
	$_SESSION['error']="Error while adding Category...";
	header('location: ../addCategory.php');
}
?>