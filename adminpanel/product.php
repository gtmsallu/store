<?php
session_start();
if (isset($_SESSION['logged_in'])) {


include('admindash_components/header.php');
include('admindash_components/sidebar.php');
?>
<div class="container-fluid ">
  <?php
  include('admindash_components/topnav.php');
  ?>
  <!-- Page Heading -->
  <div class="d-sm-flex flex-reverse  p-2 mt-2 align-items-center justify-content-end mb-4">
    <h3 class="h4 mb-0  "><button class="btn btn-primary"><a href="addProduct.php" class="text-white">Add Product</a></button></h3>
    
  </div>
  <!-- Content Row -->
 
    
    
    <!-- Pending Requests Card Example -->
    
  <div class="container-fluid">






    <?php
            if (isset($_SESSION['success'])) {
              echo '<p class="alert alert-success">'.$_SESSION['success'].'</p>';
              unset($_SESSION['success']);
            }
            if (isset($_SESSION['error'])) {
              echo '<p class="alert alert-danger">'.$_SESSION['error'].'</p>';
              unset($_SESSION['error']);
            }
      ?>
    <div class="font-weight-bold text-uppercase text-gray-800 p-3">Products Details</div>
    <hr>
    <table class="table text-center">
      <thead class="table table-success">
        <tr>
          <th>ID</th>
          <th>Product Name</th>
          <th>Type</th>
          <th>Category</th>
          <th hidden>Sub Category</th>
          <th>Main Image</th>
          <th hidden="">Extra Image</th>
          <th>Price(per piece)</th>
          <th>Quantity</th>
          <th>Discription</th>
          <th>Shipping Price</th>
          <th>Edit</th>
          <th>Delete </th>
        </tr>
      </thead>
      <tbody>
        <?php 
           
           $query="SELECT * FROM products WHERE p_type='retailer' ";
           $row=mysqli_query($con,$query);
           while($data=mysqli_fetch_assoc($row)) {
          ?>
        <tr>
          <td>
              <?php echo $data['p_id'] ?> 
          </td>
          <td>
          <?php echo $data['p_name'] ?>
          </td>
          <td>
             <?php echo $data['p_type'] ?>
          </td>
          <td>
             <?php echo $data['category'] ?>
          </td>
          <td hidden>
             <?php echo $data['subcategory'] ?>
          </td>
          </td>
          <td>
            <img src="<?php echo $data['main_img']; ?>">
          </td>
          <td>
             <?php echo $data['p_price'] ?>
          </td>
          <td>
             <?php echo $data['p_quantity'] ?>
          </td>
          <td>
            <?php echo $data['description'] ?>
          </td>
          <td>
            <?php echo $data['shipping_fee'] ?>
          </td>
          <td>
            <a href="editProduct.php?edit=<?php echo $data['p_id']; ?>" class='btn btn-primary' ><i class="fas fa-edit " ></i></a>
            
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