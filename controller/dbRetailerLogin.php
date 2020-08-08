<?php
session_start();
include('dbConnection.php');
if (isset($_POST['submit']) &&  (!empty($_POST['username']) && !empty($_POST['password']))) {
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query="SELECT * FROM retailer_registration WHERE `username`='$username' AND `password`='$password' ";
	$run=mysqli_query($con, $query);
	$row = mysqli_num_rows($run);
  if ($row == 1)
  { 
    $data=mysqli_fetch_assoc($run);
    $id=$data['id'];
    $usrname=$data['retailer_name'];
   $_SESSION['id']=$id;
    $_SESSION['success']=$usrname;
    
    $_SESSION['type']='retailer';
    
    header('location: ../retailer/index.php');


  }
  else
  {
    $_SESSION['error']="Username or Password not match!!!";
    header('location: ../login_retailer.php');
  }

}
  else{
  $_SESSION['error']="Please enter the credentials";
  header('location: ../login.php');
}
?>