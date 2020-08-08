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
	<div class="d-sm-flex bg-dark text-white p-2 mt-2 align-items-center justify-content-between mb-4">
		<h1 class="h3 ">General Settings:</h1>
		
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
			<form action="controller/dbaddcat.php" method="post">
				<div class="form-group">
					
					<label for="text" class="text-primary">:</label>
					<input class="form-control" name="category_name" type="text" placeholder="Enter the category name" id="category">
				</div>
				<div class="row">
					<div class="col-6">
						<a href="admindash.php" class="form-control btn btn-primary"><i class="fas fa-arrow-left"></i>Back to dashboard</a>
					</div>
					<div class="col-6 mb-4">
						<button type="submit" name="submit" class="form-control btn btn-warning"><i class="fas fa-check"></i>Publish</button>
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