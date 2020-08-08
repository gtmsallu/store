<?php
session_start();
include '../controller/dbconnection.php';
if (isset($_SESSION['logged_in'])) {
if (isset($_SESSION['success'])) {
echo '<p class="alert alert-success">'.$_SESSION['success']."</p>";
unset($_SESSION['success']);
}
include('admindash_components/header.php');
include('admindash_components/sidebar.php');
?>
<div class="container-fluid">
	<?php
	include('admindash_components/topnav.php');
	?>
	<!-- Page Heading -->
	
	<!-- Content Row -->
	<div class="row  ">
		<div class="container-fluid  shadow bg-dark">
			<h2 class="text-justify bg-success text-white p-2 mt-2"> Change Profile:</h2>
			<div class="row container-fluid">
				<div class="col-4">
					<form method="post" action="controller/dbeditprofile.php">
						<label for="text" class="text-primary">Profile Pic:</label></br>
						<?php
							if (isset($_SESSION['id'])) {
								$query="SELECT * FROM adminlogin WHERE id=".$_SESSION['id'];
								$result= mysqli_query($con, $query);
								$data=mysqli_fetch_assoc($result);
								if ($result) {
								echo '<img class="img-fluid w-50 mb-5 rounded-circle"  src='.$data['image'].'>';
							
						?>
						
					</div>
					<div class=" col-8 ">
						
						<div class="form-group">
							<?php if (isset($_SESSION['success'])) {
								echo $_SESSION['success'];
								echo '<p class="alert alert-success">'.$_SESSION['success']."</p>";
								unset($_SESSION['success']);
								
							}
							if (isset($_SESSION['error'])) {
								echo '<p class="alert alert-danger">'.$_SESSION['error']."</p>";
								unset($_SESSION['error']);
							}

							 ?>
							<label for="text" class="text-primary">Your Name:</label>
							<input class="form-control" name="Name" type="text" value="<?php echo $data['admin_name'] ?>" >
						</div>
						<div class="form-group">
							
							<label for="text" class="text-primary">Your Email:</label>
							<input class="form-control" name="Email"  type="text" value="<?php echo $data['Email'] ?>" >
						</div>
						<hr style="border-color: white;">
						<h3 class="text-white">Change password</h3><p class="text-info">(This is optional)</p>
						<div class="form-group">
							
							<label  for="text" class="text-primary">Old password</label>
							<div class="input-group">
								<input type="password" name="oldpassword"  class="form-control" data-toggle="password" value="<?php echo $data['Password'] ?>" placeholder="<?php echo $data['Password'] ?>" disabled>
								<div class="input-group-append">
									<span class="input-group-text">
										<i class="fa fa-eye"></i>
									</span>
								</div>
								
								
								
							</div>
							
						</div>
						<div class="form-group">
							<label for="text" class="text-primary">New password</label>
							<div class="input-group">
								<input type="password" name="newpassword"  class="form-control" data-toggle="password" placeholder="Please type the new password....">
								<div class="input-group-append">
									<span class="input-group-text">
										<i class="fa fa-eye"></i>
									</span>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							
							<label for="text" class="text-primary">Re-type password</label>
							<div class="input-group">
								<input class="form-control" name="retypepassword" type="password"  id="retypepassword" data-toggle="password" placeholder="Please retype the correct password....">
								<div class="input-group-append">
									<span class="bg-white input-group-text">
										<i class="fa fa-eye"></i>
										
									</span>
								</div>
							</div>
							
						</div>
						
						<div class="row">
							<div class="col-6">
								<a href="admindash.php" class="form-control btn btn-primary"><i class="fas fa-arrow-left"></i>Back to dashboard</a>
							</div>
							<div class="col-6 mb-4">
								<button type="submit" name="submit" class="form-control btn btn-warning"><i class="fas fa-edit"></i>Submit</button>
							</div>
							
							
						</div>
						<?php } } ?>
						
					</div>
				</div>
			</form>
			
			
		</div>
		
	</div>
	
</div>
<!-- /.container-fluid -->
</div>
</div>
<!-- End of Main Content -->
<?php include('admindash_components/footer.php');
include('admindash_components/javascript.php');
include('admindash_components/scripts.php') ?>
</body>
</html>
<?php
}else
{
header('location: adminlogin.php');
}
?>