<?php
session_start();
if (isset($_SESSION['logged_in'])) {
include('admindash_components/header.php');
include('admindash_components/sidebar.php');
?>
<div class="container-fluid">
	<?php
	include('admindash_components/topnav.php');
	?>
	<!-- Page Heading -->
	<div class="d-sm-flex bg-light text-dark p-2 mt-2 align-items-center justify-content-between mb-4">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item active" aria-current="page"><a href="addRetailers.php">Retailers</a></li>
				<li class="breadcrumb-item active" aria-current="page">Add</li>

			</ol>
		</nav>
	</div>
	<!-- Content Row -->
	<div class="row mx-auto w-50 ">
		<div class="container-fluid  shadow bg-light">
			<?php
						if (isset($_SESSION['success'])) {
							echo '<p class="alert alert-success">'.$_SESSION['success'].'</p>';
							unset($_SESSION['success']);
						}
			?>
			<h4>Add retailer</h4>
				<hr>	
			<form action="controller/dbAddRetailer.php" method="post">
				
					<div class="form-group">
						
						<label for="text" class="text-primary">First Name:</label>
						<input class="form-control" name="retailerFirstName" type="text" placeholder="Enter the First name" >
					</div>
					<div class="form-group">
						
						<label for="text" class="text-primary">Last Name:</label>
						<input class="form-control" name="retailerSecondName" type="text" placeholder="Enter the Last name" >
					</div>
					<div class="form-group">
						
						<label for="text" class="text-primary">PAN No:</label>
						<input class="form-control" id="p1" name="PAN" type="number" placeholder="Enter the shop PAN number" >
					</div>
					<div class="form-group">
						
						<label for="text" class="text-primary">Email:</label>
						<input class="form-control" id="tp1" name="email" type="text" placeholder="Enter the Email Address" required >
					</div>
					<div class="form-group">
						
						<label for="text" class="text-primary">Phone No:</label>
						<input class="form-control" id="p1" name="phone" type="text" placeholder="Enter the Phone number" >
					</div>
					<div class="form-group">
						
						<label for="text" class="text-primary" >Address:</label>
						<input class="form-control" id="tp"  name="address" type="text" placeholder="Enter the Address"  required ></input>
						
					</div>
					<div class="form-group">
						
						<label for="text" class="text-primary">Shop Name:</label>
						<input type="text" placeholder="Enter the Shop Name"  required  class="form-control" id="shopName" name="shopName" ></input>
					</div>
					<div class="form-group">
						
						<label for="text" class="text-primary">Username:</label>
						<input type="text" placeholder="Enter the Username"  required  class="form-control" id="username" name="username" ></input>
					</div>
					<div class="form-group">
						
						<label for="text" class="text-primary">Password:</label>
						<input type="password" placeholder="Enter the Password"  required  class="form-control" id="retailerPassword" name="password" ></input>
					</div>
					<div class="row">
						<div class="col-6">
							<a href="admindash.php" class="form-control btn btn-primary"><i class="fas fa-arrow-left"></i>Back to dashboard</a>
						</div>
						<div class="col-6 mb-4">
							<button type="submit" name="submit" class="form-control btn btn-warning"><i class="fas fa-plus"></i>Add Retailer</button>
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
include('../scripts.php') ?>
</body>
</html>
<?php
}else
{
header('location: adminlogin.php');
}
?>