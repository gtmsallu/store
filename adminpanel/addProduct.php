<?php
session_start();
include ('../controller/dbConnection.php');
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
				<li class="breadcrumb-item " aria-current="page"><a href="product.php">Products</a></li>
				<li class="breadcrumb-item active" aria-current="page">Add Products</li>

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
			<h4>Add Products</h4>
				<hr>	
			<form action="controller/db_addProduct.php" method="post" enctype="multipart/form-data">
				
					<div class="form-group">
						
						<label for="text" class="text-primary">Product Name:</label>
						<input class="form-control" name="productName" type="text" placeholder="Enter the First name" >
					</div>
					<div class="form-group">
						
						<label for="text" class="text-primary">Type:</label>
						<select class="custom-select" name="p_type">
							<option selected disabled>Select product type</option>
							<option value="customer">Customer </option>
							<option value="retailer">Retailer </option>
					</select>
					</div>

					<div class="form-group">
						
						<label for="text" class="text-primary">Category:</label>
						<select class="custom-select" name="category">
							<option selected>Select category</option>
							<?php 
								$query="SELECT * FROM categories";
								$row=mysqli_query($con, $query);
								while ($data=mysqli_fetch_assoc($row)) {
									?>
								
							<option value="<?php echo $data['cat_name'] ?>"> <?php echo $data['cat_name'] ?></option>
							<?php 
							}
							 ?>
						</select>
					</div>
					<div class="form-group" hidden>
						
						<label for="text" class="text-primary">Sub Category:</label>
						<select class="custom-select" name="subCategory">
							<option selected>Select Sub category</option>
							<?php 
								$query="SELECT * FROM sub_categories";
								$row=mysqli_query($con, $query);
								while ($data=mysqli_fetch_assoc($row)) {
									?>
								
							<option value="<?php echo $data['subcategory_name'] ?>"> <?php echo $data['subcategory_name'] ?></option>
							<?php 
							}
							 ?>
						</select>
					</div>
					<div class="form-group">
						
						<label for="text" class="text-primary">Main Image(200/300):</label>
						<input class="form-control" id="p1" name="mainImg" type="file" accept="image/*" required>
					</div>
					<div class="form-group">
						
						<label for="text" class="text-primary">Extra Image(200/300):</label>
						<input class="form-control" id="tp1" name="extraImg" type="file" >
						<input class="form-control" id="tp2" name="extraImg1" type="file" >
					</div>
					<div class="form-group">
						
						<label for="text" class="text-primary">Price:</label>
						<input class="form-control" id="p1" name="price" type="number" placeholder="Enter the Product price" >
					</div>
					<div class="form-group">
						
						<label for="text" class="text-primary" >Quantity:</label>
						<input class="form-control" id="tp"  name="quantity" type="number" placeholder="Enter the Product quantity"  required ></input>
						
					</div>
					<div class="form-group">
						
						<label for="text" class="text-primary">Descriptions:</label>
						<textarea class="form-control" name="description" rows="3" placeholder="Enter some details about product..."></textarea>
					</div>
					<div class="form-group">
						
						<label for="text" class="text-primary">Shipping Fee:</label>
						<input type="number"  required  class="form-control" id="shippingFee" name="shippingFee" ></input>
					</div>
					
					<div class="row">
						<div class="col-6">
							<a href="admindash.php" class="form-control btn btn-primary"><i class="fas fa-arrow-left"></i>Back to dashboard</a>
						</div>
						<div class="col-6 mb-4">
							<button type="submit" name="submit" class="form-control btn btn-warning"><i class="fas fa-plus"></i>Add</button>
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