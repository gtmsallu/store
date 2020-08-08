<nav class="navbar navbar-expand-sm navbar-dark bg-dark  scrolling-navbar sticky-top shadow p-2" style="margin-left: -15px;margin-right:-15px; ">
  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
      </button>
    <div class="container " >
      <form class="form-inline  my-lg-0">
        <div class="input-group">
          <input class="form-control mr-sm-2 " type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-btn">
            <button class="btn btn-default btn-dark my-2 my-sm-0"  type="submit" title="search"><i class="fas fa-search"></i></button>
          </div>
        </div>
        
        
      </form>
      <a class="navbar-brand " href="index.php" ></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarid" aria-controls="navbarid" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      
        
        
        
        <?php
        if (isset($_SESSION['logged_in'])) {
        ?>
        <form action="admindash_components/logout_session.php" method="post">
          <div class="dropdown text-right">
            <button class="btn hover-white btn-dark dropdown-toggle" data-toggle="dropdown" type="submit" title="Admin Profile"><i class="far fa-user-circle  "></i></button>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="adminprofile.php" class="dropdown-item" >Admin Profile</a>
              
              <button type="submit" name="logout" class="dropdown-item">Logout</button>
            </div>
          </div>
        </form>
        <?php
        } else
        {
        ?>
        <form>
          <div class="dropdown text-right">
            <button class="btn hover-white dropdown-toggle" data-toggle="dropdown"  type="submit" title="My Account"><span class="label label-pill label-danger count"></span><i class="far fa-user-circle " data-toggle="tooltip" data-placement="bottom"></i></button>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="register.php" class="dropdown-item ">Register</a>
              
              <a href="login.php" class="dropdown-item" > login</a>
            </div>
          </div>
        </form>
        <?php
        }
        ?>
        
        
     
    </div>
  </nav>
