<?php
session_start();
include '../controller/dbConnection.php';
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
				<li class="breadcrumb-item " aria-current="page"><a href="category.php">Sub Category</a></li>
				<li class="breadcrumb-item active" aria-current="page">Edit</li>
			</ol>
		</nav>
	</div>
	<!-- Content Row -->
	<div class="row mx-auto w-50 ">
		<div class="container-fluid  shadow bg-light p-3">
			<?php
						if (isset($_SESSION['success'])) {
							echo '<p class="alert alert-success">'.$_SESSION['success'].'</p>';
							unset($_SESSION['success']);
						}
			?><?php
			if (isset($_GET['edit'])) {
			$id=$_GET['edit'];
			$editQuery="SELECT * FROM categories WHERE cat_id=$id";
			$result=mysqli_query($con, $editQuery);
			while($data=mysqli_fetch_assoc($result)) {
			?>
			<form action="controller/dbeditCategory.php" method="post">
				
				<div class="form-group row ">
					<div class="col-3">
						<label for="text" class="text-primary" hidden> ID:</label>
					</div>
					<div class="col-9">
						<input class="form-control" name="cat_id" type="text" value="<?php echo $id ?>" hidden >
					</div>
				</div>
				
				<div class="form-group row ">
					<div class="col-3">
						<label for="text" class="text-primary">Name:</label>
					</div>
					<div class="col-9">
						<input class="form-control" name="cat_name" type="text" value="<?php echo $data['cat_name'] ?>" required >
					</div>
				</div>
				
				
				
				
				<div class="row">
					<div class="col-6">
						<a href="admindash.php" class="form-control btn btn-primary"><i class="fas fa-arrow-left"></i>Back to dashboard</a>
					</div>
					<div class="col-6 mb-4">
						<button type="submit" name="submit" class="form-control btn btn-warning"><i class="fas fa-tick"></i>Update</button>
					</div>
				</form>
				<?php
				}
					}
				
				?>
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