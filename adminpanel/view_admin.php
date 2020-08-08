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
    <h1 class="h3 "><i class="fas fa-edit " style="color: red;"></i>Manage Admins</h1>
    
  </div>
	<!-- Content Row -->
	<div class="row ">
    <div class="container-fluid  shadow bg-dark">
      <h2 class="text-center bg-success text-white p-2 mt-2 " > Admins:</h2>
    </div>
    <table class="table bg-dark border">
      <thead class="text-center text-danger table-success" >
        <th class="border">S.N</th>
        <th>Admin ID</th>
        <th>Profile Pic</th>
        <th>Admin Name</th>
        <th>Delete</th>
        <th>Edit</th>
      </thead>
      <?php 
      $sn=0;
        $result=mysqli_query($con, "SELECT * FROM adminlogin");
        while($data=mysqli_fetch_assoc($result))
        {
          ?>
      <tbody class="text-center text-white border" >
        <tr>
          <td class="border"><?php $sn++; echo $sn; ?></td>
          <td class="border"><?php echo $data['id'] ?></td>
     
          <td class="text-center border"><?php echo '<img class="img-fluid rounded-circle "  src='.$data['image'].'>'; ?></td> -->          
          <td><?php echo $data['admin_name']; ?></td>
          <td >
           <a href="controller/db_viewadmin.php?delete=<?php echo $data['id']; ?>" class='btn btn-danger'><i class="fas fa-trash " ></i></a>
         </td>

          <td> <a href="controller/db_viewadmin.php?edit=<?php echo $data['id']; ?>" class='btn btn-danger'><i class="fas fa-edit " ></i></a> 
          </td>
        </tr>
          <?php } ?>
      </tbody>
    </table>
    
  
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