<?php 
session_start();
include('dbConnection.php');
$retailerFirstName=$_POST['retailerFirstName'];
$retailerSecondName=$_POST['retailerLastName'];
$retailerName=$retailerFirstName." ".$retailerSecondName;
$retailerShopName=$_POST['retailerLastName'];
$retailerPhone=$_POST['retailerPhone'];

$retailerAdd=$_POST['retailerAdd'];
$retailerPAN=$_POST['retailerPAN'];
if (isset($_POST['submit'])) {
    $send="INSERT INTO retailer_msg (retailer_name, shop_name, phone_number, PAN_number,shop_address) VALUES('$retailerName','$retailerShopName', '$retailerPhone','$retailerPAN','$retailerAdd')";
    $result=mysqli_query($con, $send);
    if ($result==1) {
    	    	    $_SESSION['success']="Your massage has been sent.";

    	    header('location: ../login_retailer.php');

    }
} else {
    	    $_SESSION['error']="Your massage has not sent due to some error.";
    	    header('location: ../login_retailer.php');
    # code...
}



?>