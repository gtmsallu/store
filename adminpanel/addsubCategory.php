<?php
session_start();
include('../controller/dbConnection.php');

if (isset($_SESSION['logged_in'])) {
include('admindash_components/header.php');
include('admindash_components/sidebar.php');
?>
<div class="container-fluid">
	<?php
	include('admindash_components/topnav.php');
	?>
	<!-- Page Heading -->
	<div class="container-fluid py-3">
		<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item " aria-current="page">Products</li>
					<li class="breadcrumb-item " aria-current="page"><a href="subCategory.php">Sub Category</a></li>
					<li class="breadcrumb-item active" aria-current="page" >Add SubCategory</li>
				</ol>
			</nav>
	</div>
	<!-- Content Row -->
	<div class="row mx-auto w-50 ">
		
		<div class="container-fluid  shadow my-3 ">
			
			<h4 class="text-justify p-2 mt-2"> Add Sub Category:</h4>
			<?php
						if (isset($_SESSION['success'])) {
							echo '<p class="alert alert-success">'.$_SESSION['success'].'</p>';
							unset($_SESSION['success']);
						}


			?>
			
			
			

			
			<form action="controller/dbaddsubCategory.php" method="post" e>
				<div class="form-group">
					
					<label for="text" class="text-primary">Name</label>
					<input class="form-control" name="category_name" type="text" placeholder="Enter the category name" id="category">
				</div>
				<div class="form-group">
					
					<label for="text" class="text-primary">Category</label>
					<select class="custom-select">
						<option selected disabled>Select category</option>
						<?php
					$database="categories";
					$query="SELECT * FROM ".$database;
					$row=mysqli_query($con,$query);
					$count=0;
					while($data=mysqli_fetch_assoc($row)) {
					?>
						<option value="<?php echo $data['cat_name'] ;?>" ><?php echo $data['cat_name'] ?></option>
						<?php
					}
					?>
					</select>
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