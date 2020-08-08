	<?php
	session_start();
	include '../../controller/dbconnection.php';
	if (isset($_POST['submit']))
	{
		

		require_once('../ImageManipulator.php');
		if ($_FILES['logo']['error'] > 0) 
		{
			echo "Error: " . $_FILES['logo']['error'] . "<br />";
		} else 
		{
			// array of valid extensions
			$validExtensions = array('.jpg', '.jpeg', '.gif', '.png' ,'.JPG','PNG');
			// get extension of the uploaded file
			$fileExtension = strrchr($_FILES['logo']['name'], ".");
			// check if file Extension is on the list of allowed ones
			if (in_array($fileExtension, $validExtensions)) 
			{
				$newNamePrefix=time().'_';
				$manipulator=new ImageManipulator($_FILES['logo']['tmp_name']);
				$newImage=$manipulator->resample(140,140);
				$manipulator->save('../imglogo/'.$newNamePrefix.$_FILES['logo']['name']);
				/*$image=move_uploaded_file($_FILES['image']['tmp_name'], "../img/".$newNamePrefix.$_FILES['image']['name']);*/
				$img="adminpanel/imglogo/".$newNamePrefix.$_FILES['logo']['name'];
				$query= "UPDATE logo SET logo_Img='$img'";
				$result=mysqli_query($con,$query) or die();
				if ($result==1) 
				{
					$_SESSION['success']="Logo has been updated succesfully!!!";
			
					header('location: ../logoSet.php');
					exit();
				}
			}
		 	else 
			{
				$_SESSION['imgerror']= "you can't choose this type of file...";
				header('location: ../logoSet.php');
				exit();
			}
		}
	}
	?>