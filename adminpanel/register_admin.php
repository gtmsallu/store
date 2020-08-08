<?php
session_start();
if ($_SESSION['ROLE']==1) {
if (isset($_SESSION['logged_in'] )) {
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
	<div class="d-sm-flex bg-dark text-white p-2 mt-2 align-items-center justify-content-between mb-4">
		<h1 class="h3 "><i class="fas fa-edit " style="color: red;"></i>Manage Admins</h1>
		
	</div>
	<!-- Content Row -->
	<div class="row mx-lg-auto w-50 ">
		<div class="container-fluid  shadow bg-dark">
			<h2 class="text-justify bg-success text-white p-2 mt-2 " > Add New Admin:</h2>
			<form action="controller/dbregisteradmin.php" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="text" class="text-primary">Admin Email Address</label>
					<input class="form-control" name="adminemail" type="text" placeholder="Enter the Admin Email Address....." id="category" required>
				</div>
				<div class="form-group">
					<label for="text" class="text-primary">Admin Name</label>
					<input class="form-control" type="text" name="adminname" placeholder="Enter the Admin Name....." id="category" required>
				</div>
				<div class="form-group">
					<label for="text" class="text-primary">Role</label>
					<select class="custom-select required" name="role">
						<option selected disabled>Select the role of admin</option>
						<option value="1">1</option>
						<option value="2">2</option>
						
					</select>
				</div>
				<div class="form-group">
					<label for="text" class="text-primary">Password</label>
					<input class="form-control" name="adminpassword" type="password" placeholder="Enter the Admin Password....." id="category" required>
				</div>
				<?php if (isset($_SESSION['imgerror'])) {
					echo '<p class="alert alert-danger">'.$_SESSION['imgerror']."</p>";
					unset($_SESSION['imgerror']);
				}
				 ?>
				<div class="form-group">
					<label for="text" class="text-primary">Profile pic</label>
					<input  type="file" name="image" class="text-white"  accept="image/*" id="category">
				</div>
				<div class="row">
					<div class="col-6">
						<a href="admindash.php" class="form-control btn btn-primary"><i class="fas fa-arrow-left"></i>Back to dashboard</a>
					</div>
					<div class="col-6 mb-4">
						<button type="submit" class="form-control btn btn-warning"><i class="fas fa-plus"></i>Add</button>
					</div>
				</div>
			</form>
			
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
}else{
	header('location: admindash.php');
}
?>