<?php
session_start();
include '../controller/dbconnection.php';
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
		<h1 class="h3 ">Categories:</h1>
		
	</div>
	<!-- Content Row -->
	<div class="row  ">
		<div class="container-fluid">
    <div class="font-weight-bold bg-dark text-primary p-3">Categories Details</div>
    <table class="table text-center bg-dark ">
      <thead class="table text-danger table-success">
        <tr>
          <th>S.N.</th>
          <th>ID</th>
          <th>Category Name</th>
          
          <th>Date of Entry</th>
          <th>Delete Category</th>
        </tr>
      </thead>
      <tbody class="text-white">
        <?php 
            $database="categories";
           $query="SELECT * FROM ".$database;
           $row=mysqli_query($con,$query);
           $count=0;
           while($data=mysqli_fetch_assoc($row)) {
          ?>
        <tr>
          <td><?php $count++; echo $count; ?></td>
          <td>
              <?php echo $data['cat_id']; ?> 
          </td>
          <td>
            <?php echo $data['cat_name']; ?>
          </td>
          <td>
            <?php echo $data['created_on']; ?>
          </td>
          <td>
            <a href="controller/db_view.php?delete=<?php echo $data['cat_id']; ?>&database=<?php echo $database; ?>" class='btn btn-danger'><i class="fas fa-trash " ></i></a>
            
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