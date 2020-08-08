<?php
session_start();

if (!isset($_SESSION['type'])) {
include('controller/dbConnection.php');

include('components/header.php');
?>
  <!-- Body-->
  <body class="toolbar-enabled">
    <!-- Google Tag Manager (noscript)-->
    <noscript>
      <iframe src="http://www.googletagmanager.com/ns.php?id=GTM-WKV3GT5" height="0" width="0" style="display: none; visibility: hidden;"></iframe>
    </noscript>

    <!-- Sign in / sign up modal-->
    <?php  include('components/signinupmodel.php');?>

    <!-- Navbar-->
    <!-- Navbar 3 Level (Light)-->
    <header class="box-shadow-sm">
        <!-- Topbar-->
        <?php 
         include('components/topbar.php');
         include('components/navbar.php');?>

       
    </header>
    <!-- Page title-->
    <!-- Page Content-->
    <div class="container py-4 py-lg-5 my-4">
      <div class="row">
        <div class="col-md-6">
          <div class="card border-0 box-shadow">
            <div class="card-body">
               <?php 

                         if(isset($_SESSION['error']))
                         {
                             echo "<p class='alert alert-danger'>".$_SESSION['error'].'</p>';
                            unset($_SESSION['error']);
                         }
                          if(isset($_SESSION['success']))
                         {
                             echo "<p class='alert alert-success'>Welcome".$_SESSION['success'].'</p>';
                            unset($_SESSION['success']);
                         }
      
      
                        ?>
              <h2 class="h4 mb-1">Sign in</h2>
              <hr>
              <h3 class="font-size-base pt-4 pb-2">Only for Retailers</h3>
              <form class="needs-validation" novalidate action="controller/dbRetailerLogin.php " method="post">
                <div class="input-group-overlay form-group">
                  <div class="input-group-prepend-overlay"><span class="input-group-text"><i class="czi-mail"></i></span></div>
                  <input class="form-control prepended-form-control" type="text"  name="username" placeholder="username" required>
                </div>
                <div class="input-group-overlay form-group">
                  <div class="input-group-prepend-overlay"><span class="input-group-text"><i class="czi-locked"></i></span></div>
                  <div class="password-toggle">
                    <input class="form-control prepended-form-control" type="password" name="password" placeholder="password" required>
                    <label class="password-toggle-btn">
                      <input class="custom-control-input" type="checkbox"><i class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show password</span>
                    </label>
                  </div>
                </div>
                <div class="d-flex flex-wrap justify-content-between">
                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" checked id="remember_me">
                    <label class="custom-control-label" for="remember_me">Remember me</label>
                  </div><a class="nav-link-inline font-size-sm" href="account-password-recovery.php">Forgot password?</a>
                </div>
                <hr class="mt-4">
                <div class="text-right pt-4">
                  <button class="btn btn-primary" name="submit" type="submit"><i class="czi-sign-in mr-2 ml-n21"></i>Sign In</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-6 pt-4 mt-3 mt-md-0">
         
          <h2 class="h4 mb-3">Get in Touch</h2>
          <p class="font-size-sm text-muted mb-4">We will verify your Credentials and get back soon.</p>
          <form class="needs-validation" novalidate action="controller/dbSendMsg.php"  method="post" >
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-fn">First Name</label>
                  <input class="form-control" type="text" name="retailerFirstName" required id="reg-fn">
                  <div class="invalid-feedback">Please enter your first name!</div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-ln">Last Name</label>
                  <input class="form-control" type="text" name="retailerLastName"  required id="reg-ln">
                  <div class="invalid-feedback">Please enter your last name!</div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="reatiler-reg-email">Shop Name</label>
                  <input class="form-control" name="retailerShopName"  type="text" required id="reatiler-reg-email">
                  <div class="invalid-feedback">Please enter your Shop Name!</div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="retailer-reg-phone">Phone Number</label>
                  <input class="form-control" name="retailerPhone"  type="text" required id="retailer-reg-phone">
                  <div class="invalid-feedback">Please enter your phone number!</div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-pan">PAN No.</label>
                  <input class="form-control" name="retailerPAN"  type="text" required id="reg-pan">
                  <div class="invalid-feedback">Please enter your PAN No.!</div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="retailer-address">Shop Address</label>
                  <input class="form-control" type="text" name="retailerAdd"  required id="retailer-address">
                  <div class="invalid-feedback">Please enter your Shop Address!</div>
                </div>
              </div>
            </div>
            <div class="text-right">
              <button class="btn btn-primary" name="submit" type="submit"><i class="czi-user mr-2 ml-n1"></i>Send Message</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Footer-->
    <?php include 'components/footer.php'; ?>
    <!-- Toolbar for handheld devices-->
    <div class="cz-handheld-toolbar">
      <div class="d-table table-fixed w-100"><a class="d-table-cell cz-handheld-toolbar-item" href="account-wishlist.php"><span class="cz-handheld-toolbar-icon"><i class="czi-heart"></i></span><span class="cz-handheld-toolbar-label">Wishlist</span></a><a class="d-table-cell cz-handheld-toolbar-item" href="#navbarCollapse" data-toggle="collapse" onclick="window.scrollTo(0, 0)"><span class="cz-handheld-toolbar-icon"><i class="czi-menu"></i></span><span class="cz-handheld-toolbar-label">Menu</span></a><a class="d-table-cell cz-handheld-toolbar-item" href="shop-cart.php"><span class="cz-handheld-toolbar-icon"><i class="czi-cart"></i><span class="badge badge-primary badge-pill ml-1">4</span></span><span class="cz-handheld-toolbar-label">$265.00</span></a>
      </div>
    </div>
    <!-- Back To Top Button--><a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted font-size-sm mr-2">Top</span><i class="btn-scroll-top-icon czi-arrow-up">   </i></a>
    <!-- Vendor scrits: js libraries and plugins-->
    <script src="vendor/jquery/dist/jquery.slim.min.js"></script>
    <script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
    <script src="vendor/simplebar/dist/simplebar.min.js"></script>
    <script src="vendor/tiny-slider/dist/min/tiny-slider.js"></script>
    <script src="vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <!-- Main theme script-->
    <script src="js/theme.min.js"></script>
  </body>


</html>
<?php 
}else{
  header('location: retailer/index.php');
  exit();
} ?>