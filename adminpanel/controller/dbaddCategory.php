
 <?php
session_start();
include ('../../controller/dbconnection.php');
if (isset($_POST['submit']))
{
	

	require_once('../ImageManipulator.php');
	if ($_FILES['category_banner']['error'] > 0) 
	{
		echo "Error: " . $_FILES['category_banner']['error'] . "<br />";
	} else 
	{
		// array of valid extensions
		$validExtensions = array('.jpg', '.jpeg', '.gif', '.png' ,'.JPG','PNG');
		// get extension of the uploaded file
		$fileExtension = strrchr($_FILES['category_banner']['name'], ".");
		// check if file Extension is on the list of allowed ones
		if (in_array($fileExtension, $validExtensions)) 
		{
			$newNamePrefix=time().'_';
			$manipulator=new ImageManipulator($_FILES['category_banner']['tmp_name']);
			$newImage=$manipulator->resample(200,300);
			$manipulator->save('../imgcategory/'.$newNamePrefix.$_FILES['category_banner']['name']);
			/*$image=move_uploaded_file($_FILES['image']['tmp_name'], "../img/".$newNamePrefix.$_FILES['image']['name']);*/
			$imgbanner="imgcategory/".$newNamePrefix.$_FILES['category_banner']['name'];
			
			
		}
	 	else 
		{
			$_SESSION['imgerror']= "you can't choose this type of file...";
			header('location: ../category_bannerSet.php');
			exit();
		}
	}
	if ($_FILES['category_icon']['error'] > 0) 
	{
		echo "Error: " . $_FILES['category_icon']['error'] . "<br />";
	} else 
	{
		// array of valid extensions
		$validExtensions = array('.jpg', '.jpeg', '.gif', '.png' ,'.JPG','PNG');
		// get extension of the uploaded file
		$fileExtension = strrchr($_FILES['category_icon']['name'], ".");
		// check if file Extension is on the list of allowed ones
		if (in_array($fileExtension, $validExtensions)) 
		{
			$newNamePrefix=time().'_';
			$manipulator=new ImageManipulator($_FILES['category_icon']['tmp_name']);
			$newImage=$manipulator->resample(32,32);
			$manipulator->save('../imgcategory/'.$newNamePrefix.$_FILES['category_icon']['name']);
			/*$image=move_uploaded_file($_FILES['image']['tmp_name'], "../img/".$newNamePrefix.$_FILES['image']['name']);*/
			$imgicon="imgcategory/".$newNamePrefix.$_FILES['category_icon']['name'];
			
			
		}
	 	else 
		{
			$_SESSION['imgerror']= "you can't choose this type of file...";
			header('location: ../addCategory.php');
			exit();
		}
	}
	$category_name=$_POST['category_name'];
			mysqli_query($con, "INSERT into categories (cat_name , cat_banner, cat_icon) VALUES ('$category_name','$imgbanner','$imgicon')") or die();
			$_SESSION['success']="Category has been published";
			header('location: ../addCategory.php');
			exit();
}





?>
