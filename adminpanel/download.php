<?php 
session_start();
include '../controller/dbconnection.php';
if (isset($_GET['id'])) {
	$id=$_GET['id'];
	$query="SELECT * FROM crime_report WHERE id=".$id;
	$result=mysqli_query($con,$query) or die();
	$data=mysqli_fetch_assoc($result);
	$file='uploads/'.$data['Evidence'];
	if (file_exists($file)) {
		header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.basename($file));
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));

		ob_clean();
    flush();
		readfile($file);
		exit();

		
	}else{
		$_SESSION['error']="File does not exits....";
		header('location: view_report.php');
exit();
	}
	
}

 ?>