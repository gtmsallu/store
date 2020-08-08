<?php
session_start();
if (isset($_SESSION['logged_in'])) {

if (isset($_SESSION['success'])) {
echo '<p class="alert alert-success">'.$_SESSION['success'].$_SESSION['adminname']."</p>";
unset($_SESSION['success']);
}
include('admindash_components/header.php');
include('admindash_components/sidebar.php');
?>
<div class="container-fluid ">
  <?php
  include('admindash_components/topnav.php');
  ?>
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    
  </div>
  <!-- Content Row -->
  <div class="row">
    
    
    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Order</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"> 


          </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-comments fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Users</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
                <?php
                include '../controller/dbconnection.php';
                $sql="SELECT COUNT(ID) AS NumberOfUsers FROM user_registration";
                $result=mysqli_query($con,$sql);
                $row=mysqli_fetch_assoc($result);
                $num_rows=$row['NumberOfUsers'];
                echo $num_rows;
                ?>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-comments fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="font-weight-bold text-uppercase text-gray-800 p-3">Users Details</div>
    <table class="table text-center">
      <thead class="table table-success">
        <tr>
          <th>ID</th>
          <th>User Name</th>
          <th>User Email</th>
          <th>User Mobile</th>
          <th>Date of Entry</th>
          <th>Delete User</th>
        </tr>
      </thead>
      <tbody>
        <?php 
           
           $query="SELECT * FROM user_registration";
           $row=mysqli_query($con,$query);
           while($data=mysqli_fetch_assoc($row)) {
          ?>
        <tr>
          <td>
              <?php echo $data['ID']; ?> 
          </td>
          <td>
            <?php echo $data['First_Name']." ".$data['Last_Name']; ?>
          </td>
          <td>
            <?php echo $data['Email']; ?>
          </td>
          <td>
            <?php echo $data['Mobile_Number']; ?>
          </td>
          <td>
            <?php echo $data['Created_On']; ?>
          </td>
          <td>
            <a href="process.php?delete=<?php echo $data['ID']; ?>" class='btn btn-danger' onclick=" checkdelete()" ><i class="fas fa-trash " ></i></a>
            
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