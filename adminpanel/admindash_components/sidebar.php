<ul class="navbar-nav sidebar   sidebar-dark accordion" style="background: #0a0a0b"  id="accordionSidebar" >
	<!-- Sidebar - Brand -->
	<?php 
    include '../controller/dbConnection.php';
    $query=mysqli_query($con,"SELECT * FROM logo") ;
    $result=mysqli_fetch_assoc($query);


    ?>
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="admindash.php">
		<div class="sidebar-brand-icon ">
         <img  src="../<?php echo $result['logo_Img'];?>"></img>
        </div>
<!-- 		<div class="sidebar-brand-text mx-3"> <img src="img/logo-dark.png"></img></div>
 -->	</a>
	 
	<!-- Divider -->
	<hr class="sidebar-divider my-0">
	<!-- Nav Item - Dashboard -->
	<li class="nav-item active">
		<a class="nav-link" href="admindash.php">
			<i class="fas fa-fw fa-tachometer-alt"></i>
			<span>Dashboard</span></a>
		</li>
		<!-- Divider -->
		<hr class="sidebar-divider my-1">
		<!-- Heading -->
		<div class="sidebar-heading">
			Interface
		</div>
		<!-- Nav Item - Pages Collapse Menu -->
		
		<!-- Nav Item - Utilities Collapse Menu -->
		<li class="nav-item">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProducts" aria-expanded="true" aria-controls="collapseProducts">
				<i class="fas fa-fw fa-wrench"></i>
				<span>Products</span>
			</a>
			<div id="collapseProducts" class="collapse" aria-labelledby="headingReports" data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">
					<h6 class="collapse-header">Categories:</h6>
					<a class="collapse-item" href="category.php">Category</a>
					<a class="collapse-item" href="subCategory.php">Subcategory</a>
					<h6 class="collapse-header">Products:</h6>
					<a class="collapse-item" href="product.php">Products</a>



					 
				</div>
			</div>
		</li>
		<li class="nav-item">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRetailer" aria-expanded="true">
				<i class="fas fa-fw fa-wrench"></i>
				<span>Retailers</span>
			</a>
			<div id="collapseRetailer" class="collapse" aria-labelledby="headingReports" data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">
					          					<h6 class="collapse-header">Retailers:</h6>

					<a class="collapse-item" href="addRetailers.php">Add Retailers</a>
					<a class="collapse-item" href="listRetailers.php">List Retailers</a>
					<hr>
					<a class="collapse-item" href="orderlist.php">Orders</a>
          			<a class="collapse-item " href="retailerMsg.php" ><span >Message</span></a>
          			

          			
					          
				</div>
			</div>
		</li>
		<!-- Divider -->
		<li class="nav-item">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSettings" aria-expanded="true">
				<i class="fas fa-fw fa-wrench"></i>
				<span>Frontend Settings</span>
			</a>
			<div id="collapseSettings" class="collapse" aria-labelledby="headingReports" data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">
					<h6 class="collapse-header">Custom setting:</h6>
					<a class="collapse-item" href="logoSet.php">Logo settings</a>
					<a class="collapse-item" href="generalSet.php">General settings</a>
          			<a class="collapse-item collapsed" href="#" data-toggle="collapse" data-target="#collapsePolicy" aria-expanded="true" ><span >Policy pages</span></a>
          			<div id="collapsePolicy" class="collapse">
          				<div class="bg-light py-2 collapse-inner rounded">
          					<h6 class="collapse-header">Custom pages:</h6>
					<a class="collapse-item" href="policy.php">Privacy policy</a>
					<a class="collapse-item" href="terms.php">Terms and conditions</a>
          				</div>
          			</div>
          				

          			
					          
				</div>
			</div>
		</li>
		<!-- Divider -->
		
	
	
		
		
				<!-- Sidebar Toggler (Sidebar) -->
				<div class="text-center d-none d-md-inline" >
					<button class="rounded-circle border-0" id="sidebarToggle"></button>
				</div>
			</ul>
			<!-- End of Sidebar -->
			
		 