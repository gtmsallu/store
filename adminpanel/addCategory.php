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
	
	<!-- Content Row -->
	<div class="row mx-auto  ">
		<div class="container-fluid  shadow my-3 ">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item " aria-current="page">Products</li>
					<li class="breadcrumb-item " aria-current="page"><a href="category.php">Category</a></li>
					<li class="breadcrumb-item active" aria-current="page" >Add Category</li>
				</ol>
			</nav>
			<h4 class="text-justify p-2 mt-2"> Add New Category:</h4>
			<?php
						if (isset($_SESSION['success'])) {
							echo '<p class="alert alert-success">'.$_SESSION['success'].'</p>';
							unset($_SESSION['success']);
						}if (isset($_SESSION['error'])) {
							echo '<p class="alert alert-danger">'.$_SESSION['error'].'</p>';
							unset($_SESSION['error']);
						}
			?>
			<form action="controller/dbaddCategory.php" method="post" enctype="multipart/form-data">
				<div class="form-group">
					
					<label for="text" class="text-primary">Name</label>
					<input class="form-control" name="category_name" type="text" placeholder="Enter the category name" id="category">
				</div>
				<div class="form-group">
					
					<label for="text" class="text-primary">Banner (200*300)</label>
					<input class="form-control" name="category_banner" type="file"  accept="image/*"   >
				</div>
				<div class="form-group">
					
					<label for="text" class="text-primary">Icon (32*32)</label>
					<input class="form-control" name="category_icon" type="file"  accept="image/*"  >
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