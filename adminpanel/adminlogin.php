<?php session_start();
if (isset($_SESSION['logged_in'])) {
	header('location: admindash.php');
	
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Admin Login Form</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/sb-admin-2.min.css">
		
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Baloo+Chettan+2&display=swap" rel="stylesheet">
	</head>
	<body >
		<div class="container shadow  mu-3 md-3 mt-3">
			<div class="row m-auto w-50">
				<div class="col-lg-12 mt-3 p-5">
					<div class="card text-primary ">
						<div class="card-header text-center bg-primary text-white"> Admin Login
						</div>
						<div class="card-body">
							<form method="post">
								<div class="form-group">
									<?php if (isset($_SESSION['error'])){
									echo "<p class='alert alert-danger'>".$_SESSION['error'].'</p>';
									unset($_SESSION['error']);
									} ?>
									
									<i class="fas fa-user"></i><input type="text" name="Email" class="form-control" placeholder="Admin Email" >
								</div>
								<div class="form-group">
									<i class="fas fa-key"></i>
									<div class="input-group">
										<input type="Password" data-toggle="password" id="password" class="form-control " name="Password" placeholder="Admin Password" >
										<div class="input-group-append">
											<span class="input-group-text">
												<i class="fa fa-eye"></i>
											</span>
										</div>
									</div>
								</div>
							</div>
							<div class="card-footer">
								<button name='submit' type='submit' class="btn btn-primary btn-block"> Login</button>
							</div>
						</form>
						
					</div>
				</div>
				
			</div>
		</div>
		
		
		<?php include'../scripts.php' ?>
	</body>
</html>
<?php
include'../controller/dbconnection.php';
if (isset($_POST['submit']))
{
	$adminemail=$_POST['Email'];
	$adminpassword=$_POST['Password'];
	$query="SELECT * FROM adminlogin WHERE `Email`='$adminemail' AND `Password`='$adminpassword'";
	$result=mysqli_query($con,$query);
	$data=mysqli_fetch_assoc($result);
		if ( 	empty($adminemail || $adminpassword) || empty($adminemail && $adminpassword)) {
		$_SESSION['error']="Please enter the credentials !!!";
	}else
	if ($data['Email']==$adminemail && $data['Password']==$adminpassword)
	{
		$_SESSION['success']="Welcome to Admin Panel !!!";
		$_SESSION['adminname']=$data['admin_name'];
		$_SESSION['logged_in']="you have already logged in";
		$_SESSION['id']=$data['id'];
		$_SESSION['ROLE']=$data['Role'];
		
		header('location: admindash.php');
		exit();
	
	}
	else
	{
		header('location: adminlogin.php');
		$_SESSION['error']="Email or Password doesn't match !!!";
		exit();
	}
}
?>