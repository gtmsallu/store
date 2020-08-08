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
    <h1 class="h3 "><i class="fas fa-file " ></i>Manage Reports</h1>
    
  </div>
  <!-- Content Row -->
  <div class="row ">
    <div class="container-fluid  shadow bg-dark">
      <h2 class="text-center bg-success text-white p-2 mt-2 " > Reports:</h2>
    </div>
    <table class="table bg-dark border">
      <thead class="text-center text-danger table-success" >
        <!--  <th class="border">S.N</th> -->
        <th>Report ID</th>
        <th>Reporter</th>
        <th>Contact</th>
        <th>Category</th>
        <th>Desciption</th>
        <th>Suspects</th>
        <th>Location</th>
        <th>Date</th>
        <?php 
         if (isset($_SESSION['error'])) {
        echo '<p class="alert alert-danger">'.$_SESSION['error']."</p>";
        unset($_SESSION['error']);
        }
         ?>
       
        <th>Evidence</th>
        <th>Delete</th>
        
      </thead>
      <?php
      $sn=0;
      $result=mysqli_query($con, "SELECT * FROM crime_report");
      while($data=mysqli_fetch_assoc($result))
      {
      ?>
      <tbody class="text-center text-white border" >
        <tr>
          <!--  <td class="border"><?php $sn++; echo $sn; ?></td>  -->
          <td class="border"><?php echo $data['id'] ?></td>
          <td class="border"><?php echo $data['Reporter'] ?></td>
          <td class="border"><?php echo $data['Contact'] ?></td>
          <td class="border"><?php echo $data['Category'] ?></td>
          <td class="border"><?php echo $data['Description'] ?></td>
          <td class="border"><?php echo $data['Suspects'] ?></td>
          <td class="border"><?php echo $data['Crime_location'] ?></td>
          <td class="border"><?php echo $data['Date_of_crime'] ?></td>
          
          <td class="border"><a href="download.php?id=<?php echo $data['id']; ?>" class="btn btn-primary" >Download</a> </td>
          <td >
            <a href="controller/db_viewreport.php?delete=<?php echo $data['id']; ?>" class='btn btn-danger ' onclick="checkdelete()"  ><i class="fas fa-trash " ></i></a>
           
          </td>
          
        </tr>
        <?php } ?>
      </tbody>
    </table>
     <script type="text/javascript">
            function checkdelete(){

              return confirm("Do u really want to delete report?");
            }
      </script>
    
    
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