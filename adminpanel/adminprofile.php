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
			<h2 class="text-justify bg-success text-white p-2 mt-2"> Your Profile:</h2>
			<div class="row container-fluid">
			<div class="col-4">
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
					
					<label for="text" class="text-primary">Your Name:</label>
					<input class="form-control"  type="text" placeholder="<?php echo $data['admin_name'] ?>" id="category" disabled>
				</div>
				<div class="form-group">
					
					<label for="text" class="text-primary">Your Email:</label>
					<input class="form-control"  type="text" placeholder="<?php echo $data['Email'] ?>" id="category" disabled>
				</div>

				<div class="row">
					<div class="col-6">
						<a href="admindash.php" class="form-control btn btn-primary"><i class="fas fa-arrow-left"></i>Back to dashboard</a>
					</div>
					<div class="col-6 mb-4">
						<a href="changeprofile.php" class="form-control btn btn-warning"><i class="fas fa-edit"></i>Change Profile</a>
					</div>
					
			
				</div>
			<?php } } ?>
			
			</div>
			</div>

			
		</div>
		
	</div>
	
</div>
<!-- /.container-fluid -->
</div>
</div>
<!-- End of Main Content -->
<?php include('admindash_components/footer.php');
include('admindash_components/javascript.php');
include('../scripts.php') ?>
</body>
</html>
<?php
}else
{
header('location: adminlogin.php');
}
?>