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
				<li class="breadcrumb-item active" aria-current="page"><a href="addRetailers.php">Retailers</a></li>
				<li class="breadcrumb-item active" aria-current="page">Message</li>
			</ol>
		</nav>
	</div>
	<!-- Content Row -->
	<div class="row  ">
		<div class="container-fluid">
			<?php 
			if (isset($_SESSION['success'])) {
							echo '<p class="alert alert-success">'.$_SESSION['success'].'</p>';
							unset($_SESSION['success']);
						}elseif (isset($_SESSION['error'])) {
							echo '<p class="alert alert-error">'.$_SESSION['error'].'</p>';
							unset($_SESSION['success']);
						}
						  ?>
			
			<table class="table text-center bg-dark ">
				<thead class="table text-danger table-success">
					<tr>
						<th>ID</th>
						<th>Retailer Name</th>
						<th>Shop Name</th>
						<th>Phone Number</th>
						<th>PAN Number</th>
						<th>Shop Address</th>
						<th>Date of Entry</th>
						<th>Delete</th>
					</tr>
				</thead>
				<tbody class="text-white">
					<?php
					$database="retailer_msg";
					$query="SELECT * FROM ".$database;
					$row=mysqli_query($con,$query);
					$count=0;
					while($data=mysqli_fetch_assoc($row)) {
					?>
					<tr>
						<td>
							<?php echo $data['id']; ?>
						</td>
						<td>
							<?php echo $data['retailer_name']; ?>
						</td>
						<td>
							<?php echo $data['shop_name']; ?>
						</td>
						<td>
							<?php echo $data['phone_number']; ?>
						</td>
						<td>
							<?php echo $data['PAN_number']; ?>
						</td>
						<td>
							<?php echo $data['shop_address']; ?>
						</td>
						
						<td>
							<?php echo $data['created_on']; ?>
						</td>
						<td>
							<a href="controller/db_delRetailer.php?delete=<?php echo $data['id']; ?>&database=<?php echo $database; ?>" class='btn btn-danger'><i class="fas fa-trash " ></i></a>
							
						</td>
					</tr>
					<?php
					}
					?>
				</tbody>
			</table>
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