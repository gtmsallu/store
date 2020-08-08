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
	<div class="d-sm-flex flex-reverse  p-2 mt-2 align-items-center justify-content-end mb-4">
		<button class="btn btn-primary  "><a class="text-white" href="addCategory.php">Add Category</a></button>
		
		
	</div>
	<!-- Content Row -->
	<div class="row container-fluid ">
		
		<div class="container-fluid py-3 mb-3 shadow">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item " aria-current="page">Product</li>
					<li class="breadcrumb-item active" aria-current="page">Category</li>
				</ol>
			</nav>
			<?php
						if (isset($_SESSION['success'])) {
							echo '<p class="alert alert-success">'.$_SESSION['success'].'</p>';
							unset($_SESSION['success']);
						}
			?>
			<table class="table text-center ">
				<thead class="table text-danger table-success">
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Banner</th>
						<th>Icon</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
				</thead>
				<tbody class="text-dark">
					<?php
					$query="SELECT * FROM categories";
					$row=mysqli_query($con,$query);
					$count=0;
					while($data=mysqli_fetch_assoc($row)) {
					?>
					<tr>
						<td>
							<?php echo $data['cat_id']; ?>
						</td>
						<td>
							<?php echo $data['cat_name']; ?>
						</td>
						<td>
							<img src="<?php echo $data['cat_banner']; ?>">
						</td>
						<td>
							<img src="<?php echo $data['cat_icon']; ?>">
						</td>
						<td>
							<button class="btn btn-primary" type="submit" ><a href="editCategory.php?edit=<?php echo $data['cat_id']?>"><i class="fas fa-edit text-white"></i></a></button>
						</td>
						
						<td>
							<a href="controller/db_delCategory.php?delete=<?php echo $data['cat_id']; ?>" class='btn btn-danger'><i class="fas fa-trash " ></i></a>
							
						</td>
					</tr>
					<?php
					}
					?>
				</tbody>
			</table>
			<div class="d-flex justify-content-end">
				<nav aria-label="Page navigation ">
					<ul class="pagination">
						<li class="page-item">
							<a class="page-link" href="#" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
						</li>
						<li class="page-item"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item">
							<a class="page-link" href="#" aria-label="Next">
								<span aria-hidden="true">&raquo;</span>
							</a>
						</li>
					</ul>
				</nav>
				
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