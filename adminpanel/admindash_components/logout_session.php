<?php
session_start();
if (isset($_POST['logout'])) {
	unset($_SESSION['ROLE']);
	unset($_SESSION['id']);
 	unset($_SESSION['logged_in']);
 	header('location: ../adminlogin.php');
 } 
 ?>