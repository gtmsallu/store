<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from demo.createx.studio/cartzilla/blog-list-sidebar.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Jul 2020 09:51:43 GMT -->
<head>
    <meta charset="utf-8">
    <title>Cartzilla | Blog list with sidebar
    </title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Khussi - Shop Now Be Wow">
    <meta name="keywords" content="khussi, ecommerce, shop-now-be-wow">
    <meta name="author" content="Walk Digital Soft.">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" color="#fe6a6a" href="safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="vendor/simplebar/dist/simplebar.min.css"/>
    <link rel="stylesheet" media="screen" href="vendor/tiny-slider/dist/tiny-slider.css"/>
    <link rel="stylesheet" media="screen" href="vendor/lightgallery.js/dist/css/lightgallery.min.css"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="css/theme.min.css">
    <!-- Google Tag Manager-->
    <script>
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      '../../www.googletagmanager.com/gtm5445.php?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-WKV3GT5');
    </script>
  </head>
  <!-- Body-->
  <body class="toolbar-enabled">
    <!-- Google Tag Manager (noscript)-->
    <noscript>
      <iframe src="http://www.googletagmanager.com/ns.php?id=GTM-WKV3GT5" height="0" width="0" style="display: none; visibility: hidden;"></iframe>
    </noscript>
    <!-- Sign in / sign up modal-->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <ul class="nav nav-tabs card-header-tabs" role="tablist">
              <li class="nav-item"><a class="nav-link active" href="#signin-tab" data-toggle="tab" role="tab" aria-selected="true"><i class="czi-unlocked mr-2 mt-n1"></i>Sign in</a></li>
              <li class="nav-item"><a class="nav-link" href="#signup-tab" data-toggle="tab" role="tab" aria-selected="false"><i class="czi-user mr-2 mt-n1"></i>Sign up</a></li>
            </ul>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body tab-content py-4">
            <form class="needs-validation tab-pane fade show active" autocomplete="off" novalidate id="signin-tab">
              <div class="form-group">
                <label for="si-email">Email address</label>
                <input class="form-control" type="email" id="si-email" placeholder="johndoe@example.com" required>
                <div class="invalid-feedback">Please provide a valid email address.</div>
              </div>
              <div class="form-group">
                <label for="si-password">Password</label>
                <div class="password-toggle">
                  <input class="form-control" type="password" id="si-password" required>
                  <label class="password-toggle-btn">
                    <input class="custom-control-input" type="checkbox"><i class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show password</span>
                  </label>
                </div>
              </div>
              <div class="form-group d-flex flex-wrap justify-content-between">
                <div class="custom-control custom-checkbox mb-2">
                  <input class="custom-control-input" type="checkbox" id="si-remember">
                  <label class="custom-control-label" for="si-remember">Remember me</label>
                </div><a class="font-size-sm" href="#">Forgot password?</a>
              </div>
              <button class="btn btn-primary btn-block btn-shadow" type="submit">Sign in</button>
            </form>
            <form class="needs-validation tab-pane fade" autocomplete="off" novalidate id="signup-tab">
              <div class="form-group">
                <label for="su-name">Full name</label>
                <input class="form-control" type="text" id="su-name" placeholder="John Doe" required>
                <div class="invalid-feedback">Please fill in your name.</div>
              </div>
              <div class="form-group">
                <label for="su-email">Email address</label>
                <input class="form-control" type="email" id="su-email" placeholder="johndoe@example.com" required>
                <div class="invalid-feedback">Please provide a valid email address.</div>
              </div>
              <div class="form-group">
                <label for="su-password">Password</label>
                <div class="password-toggle">
                  <input class="form-control" type="password" id="su-password" required>
                  <label class="password-toggle-btn">
                    <input class="custom-control-input" type="checkbox"><i class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show password</span>
                  </label>
                </div>
              </div>
              <div class="form-group">
                <label for="su-password-confirm">Confirm password</label>
                <div class="password-toggle">
                  <input class="form-control" type="password" id="su-password-confirm" required>
                  <label class="password-toggle-btn">
                    <input class="custom-control-input" type="checkbox"><i class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show password</span>
                  </label>
                </div>
              </div>
              <button class="btn btn-primary btn-block btn-shadow" type="submit">Sign up</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Navbar-->
    <!-- Navbar 3 Level (Light)-->
    <header class="box-shadow-sm">
      <!-- Topbar-->
      <div class="topbar topbar-dark bg-dark">
        <div class="container">
          <div class="topbar-text dropdown d-md-none"><a class="topbar-link dropdown-toggle" href="#" data-toggle="dropdown">Useful links</a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="tel:+977-01-5900554"><i class="czi-support text-muted mr-2"></i>(+977)01-5900554</a>
                <a class="dropdown-item" href="tel:+977-9813793434"><i class="czi-support text-muted mr-2"></i>(+977)9813793434</a>
                <a class="dropdown-item" href="tel:+977-9866995793"><i class="czi-support text-muted mr-2"></i>(+977)9866995793</a>
              </li>
              <li><a class="dropdown-item" href="order-tracking.php"><i class="czi-location text-muted mr-2"></i>Order tracking</a></li>
            </ul>
          </div>
          <div class="topbar-text text-nowrap d-none d-md-inline-block"><i class="czi-support"></i>
            <span class="text-muted mr-1">Tel:</span>
            <a class="topbar-link" href="tel:+977-01-5900554">(+977) 01-5900554</a>
            <a class="topbar-link" href="tel:+977-9813793434">, 9813793434</a>
            <a class="topbar-link" href="tel:+977-9866995793">, 9866995793</a>
          </div>
          <div class="cz-carousel cz-controls-static d-none d-md-block">
            <div class="cz-carousel-inner" data-carousel-options="{&quot;mode&quot;: &quot;gallery&quot;, &quot;nav&quot;: false}">
              <div class="topbar-text">Free shipping for order over $200</div>
              <div class="topbar-text">We return money within 30 days</div>
              <div class="topbar-text">Friendly 24/7 customer support</div>
            </div>
          </div>
          <div class="ml-3 text-nowrap"><a class="topbar-link mr-4 d-none d-md-inline-block" href="order-tracking.php"><i class="czi-location"></i>Order tracking</a>
            <div class="topbar-text dropdown disable-autohide"><a class="topbar-link dropdown-toggle" href="#" data-toggle="dropdown"><img class="mr-2" width="20" src="img/flags/en.png" alt="English"/>Eng / $</a>
              <ul class="dropdown-menu dropdown-menu-right">
                <li class="dropdown-item">
                  <select class="custom-select custom-select-sm">
                    <option value="nrs">रु NPR</option>
                    <option value="usd">$ USD</option>
                  </select>
                </li>
                <li><a class="dropdown-item pb-1" href="#"><img class="mr-2" width="20" src="img/flags/en.png" alt="English"/>English</a></li>
                <li><a class="dropdown-item pb-1" href="#"><img class="mr-2" width="20" src="img/flags/np.png" alt="Nepali"/>Nepali</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
      <div class="navbar-sticky bg-light">
        <div class="navbar navbar-expand-lg navbar-light">
          <div class="container"><a class="navbar-brand d-none d-sm-block mr-3 flex-shrink-0" href="index.php" style="min-width: 7rem;"><img width="142" src="img/logo-dark.png" alt="Cartzilla"/></a><a class="navbar-brand d-sm-none mr-2" href="index.php" style="min-width: 4.625rem;"><img width="74" src="img/logo-icon.png" alt="Cartzilla"/></a>
            <div class="input-group-overlay d-none d-lg-flex mx-4">
              <input class="form-control appended-form-control" type="text" placeholder="Search for products">
              <div class="input-group-append-overlay"><span class="input-group-text"><i class="czi-search"></i></span></div>
            </div>
            <div class="navbar-toolbar d-flex flex-shrink-0 align-items-center">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button><a class="navbar-tool navbar-stuck-toggler" href="#"><span class="navbar-tool-tooltip">Expand menu</span>
                <div class="navbar-tool-icon-box"><i class="navbar-tool-icon czi-menu"></i></div></a><a class="navbar-tool d-none d-lg-flex" href="account-wishlist.php"><span class="navbar-tool-tooltip">Wishlist</span>
                <div class="navbar-tool-icon-box"><i class="navbar-tool-icon czi-heart"></i></div></a><a class="navbar-tool ml-1 ml-lg-0 mr-n1 mr-lg-2" href="#signin-modal" data-toggle="modal">
                <div class="navbar-tool-icon-box"><i class="navbar-tool-icon czi-user"></i></div>
                <div class="navbar-tool-text ml-n3"><small>Hello, Sign in</small>My Account</div></a>
              <div class="navbar-tool dropdown ml-3"><a class="navbar-tool-icon-box bg-secondary dropdown-toggle" href="shop-cart.php"><span class="navbar-tool-label">4</span><i class="navbar-tool-icon czi-cart"></i></a><a class="navbar-tool-text" href="shop-cart.php"><small>My Cart</small>$265.00</a>
                <!-- Cart dropdown-->
                <div class="dropdown-menu dropdown-menu-right" style="width: 20rem;">
                  <div class="widget widget-cart px-3 pt-2 pb-3">
                    <div style="height: 15rem;" data-simplebar data-simplebar-auto-hide="false">
                      <div class="widget-cart-item pb-2 border-bottom">
                        <button class="close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                        <div class="media align-items-center"><a class="d-block mr-2" href="shop-single-v1.php"><img width="64" src="img/shop/cart/widget/01.jpg" alt="Product"/></a>
                          <div class="media-body">
                            <h6 class="widget-product-title"><a href="shop-single-v1.php">Women Colorblock Sneakers</a></h6>
                            <div class="widget-product-meta"><span class="text-accent mr-2">$150.<small>00</small></span><span class="text-muted">x 1</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="widget-cart-item py-2 border-bottom">
                        <button class="close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                        <div class="media align-items-center"><a class="d-block mr-2" href="shop-single-v1.php"><img width="64" src="img/shop/cart/widget/02.jpg" alt="Product"/></a>
                          <div class="media-body">
                            <h6 class="widget-product-title"><a href="shop-single-v1.php">TH Jeans City Backpack</a></h6>
                            <div class="widget-product-meta"><span class="text-accent mr-2">$79.<small>50</small></span><span class="text-muted">x 1</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="widget-cart-item py-2 border-bottom">
                        <button class="close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                        <div class="media align-items-center"><a class="d-block mr-2" href="shop-single-v1.php"><img width="64" src="img/shop/cart/widget/03.jpg" alt="Product"/></a>
                          <div class="media-body">
                            <h6 class="widget-product-title"><a href="shop-single-v1.php">3-Color Sun Stash Hat</a></h6>
                            <div class="widget-product-meta"><span class="text-accent mr-2">$22.<small>50</small></span><span class="text-muted">x 1</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="widget-cart-item py-2 border-bottom">
                        <button class="close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                        <div class="media align-items-center"><a class="d-block mr-2" href="shop-single-v1.php"><img width="64" src="img/shop/cart/widget/04.jpg" alt="Product"/></a>
                          <div class="media-body">
                            <h6 class="widget-product-title"><a href="shop-single-v1.php">Cotton Polo Regular Fit</a></h6>
                            <div class="widget-product-meta"><span class="text-accent mr-2">$9.<small>00</small></span><span class="text-muted">x 1</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex flex-wrap justify-content-between align-items-center py-3">
                      <div class="font-size-sm mr-2 py-2"><span class="text-muted">Subtotal:</span><span class="text-accent font-size-base ml-1">$265.<small>00</small></span></div><a class="btn btn-outline-secondary btn-sm" href="shop-cart.php">Expand cart<i class="czi-arrow-right ml-1 mr-n1"></i></a>
                    </div><a class="btn btn-primary btn-sm btn-block" href="checkout-details.php"><i class="czi-card mr-2 font-size-base align-middle"></i>Checkout</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="navbar navbar-expand-lg navbar-light navbar-stuck-menu mt-n2 pt-0 pb-2">
          <div class="container">
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <!-- Search-->
              <div class="input-group-overlay d-lg-none my-3">
                <div class="input-group-prepend-overlay"><span class="input-group-text"><i class="czi-search"></i></span></div>
                <input class="form-control prepended-form-control" type="text" placeholder="Search for products">
              </div>
              <!-- Departments menu-->
              <ul class="navbar-nav mega-nav pr-lg-2 mr-lg-2">
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle pl-0" href="#" data-toggle="dropdown"><i class="czi-view-grid mr-2"></i>Departments</a>
                  <div class="dropdown-menu px-2 pl-0 pb-4">
                    <div class="d-flex flex-wrap flex-md-nowrap">
                      <div class="mega-dropdown-column pt-4 px-3">
                        <div class="widget widget-links"><a class="d-block overflow-hidden rounded-lg mb-3" href="#"><img src="img/shop/departments/01.jpg" alt="Shoes"/></a>
                          <h6 class="font-size-base mb-2">Clothing</h6>
                          <ul class="widget-list">
                            <li class="widget-list-item"><a class="widget-list-link" href="#">Women's clothing</a></li>
                            <li class="widget-list-item"><a class="widget-list-link" href="#">Men's clothing</a></li>
                            <li class="widget-list-item"><a class="widget-list-link" href="#">Kid's clothing</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="mega-dropdown-column pt-4 px-3">
                        <div class="widget widget-links"><a class="d-block overflow-hidden rounded-lg mb-3" href="#"><img src="img/shop/departments/02.jpg" alt="Shoes"/></a>
                          <h6 class="font-size-base mb-2">Shoes</h6>
                          <ul class="widget-list">
                            <li class="widget-list-item"><a class="widget-list-link" href="#">Women's shoes</a></li>
                            <li class="widget-list-item"><a class="widget-list-link" href="#">Men's shoes</a></li>
                            <li class="widget-list-item"><a class="widget-list-link" href="#">Kid's shoes</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="mega-dropdown-column pt-4 px-3">
                        <div class="widget widget-links"><a class="d-block overflow-hidden rounded-lg mb-3" href="#"><img src="img/shop/departments/03.jpg" alt="Shoes"/></a>
                          <h6 class="font-size-base mb-2">Gadgets</h6>
                          <ul class="widget-list">
                            <li class="widget-list-item"><a class="widget-list-link" href="#">Smartphones &amp; Tablets</a></li>
                            <li class="widget-list-item"><a class="widget-list-link" href="#">Wearable gadgets</a></li>
                            <li class="widget-list-item"><a class="widget-list-link" href="#">E-book readers</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex flex-wrap flex-md-nowrap">
                      <div class="mega-dropdown-column pt-4 px-3">
                        <div class="widget widget-links"><a class="d-block overflow-hidden rounded-lg mb-3" href="#"><img src="img/shop/departments/04.jpg" alt="Shoes"/></a>
                          <h6 class="font-size-base mb-2">Furniture &amp; Decor</h6>
                          <ul class="widget-list">
                            <li class="widget-list-item"><a class="widget-list-link" href="#">Home furniture</a></li>
                            <li class="widget-list-item"><a class="widget-list-link" href="#">Office furniture</a></li>
                            <li class="widget-list-item"><a class="widget-list-link" href="#">Lighting and decoration</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="mega-dropdown-column pt-4 px-3">
                        <div class="widget widget-links"><a class="d-block overflow-hidden rounded-lg mb-3" href="#"><img src="img/shop/departments/05.jpg" alt="Shoes"/></a>
                          <h6 class="font-size-base mb-2">Accessories</h6>
                          <ul class="widget-list">
                            <li class="widget-list-item"><a class="widget-list-link" href="#">Hats</a></li>
                            <li class="widget-list-item"><a class="widget-list-link" href="#">Sunglasses</a></li>
                            <li class="widget-list-item"><a class="widget-list-link" href="#">Bags</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="mega-dropdown-column pt-4 px-3">
                        <div class="widget widget-links"><a class="d-block overflow-hidden rounded-lg mb-3" href="#"><img src="img/shop/departments/06.jpg" alt="Shoes"/></a>
                          <h6 class="font-size-base mb-2">Entertainment</h6>
                          <ul class="widget-list">
                            <li class="widget-list-item"><a class="widget-list-link" href="#">Kid's toys</a></li>
                            <li class="widget-list-item"><a class="widget-list-link" href="#">Video games</a></li>
                            <li class="widget-list-item"><a class="widget-list-link" href="#">Outdoor / Camping</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
              <!-- Primary menu-->
              <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="shop-grid-ls.php">Shop</a>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Account</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">My Account</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="account-orders.php">Orders History</a></li>
                        <li><a class="dropdown-item" href="account-profile.php">Profile Settings</a></li>
                        <li><a class="dropdown-item" href="account-address.php">Account Addresses</a></li>
                        <li><a class="dropdown-item" href="account-payment.php">Payment Methods</a></li>
                        <li><a class="dropdown-item" href="account-wishlist.php">Wishlist</a></li>
                        <li><a class="dropdown-item" href="account-tickets.php">Support Tickets</a></li>
                      </ul>
                    </li>
                    <li><a class="dropdown-item" href="account-signin.php">Sign In / Sign Up</a></li>
                    <li><a class="dropdown-item" href="account-password-recovery.php">Password Recovery</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Support</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="about.php">About Us</a></li>
                    <li><a class="dropdown-item" href="contacts.php">Contacts</a></li>
                    <li class="dropdown-divider"></li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Help Center</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="help-topics.php">Help Topics</a></li>
                        <li><a class="dropdown-item" href="help-submit-request.php">Submit a Request</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropdown active"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Blog's & Posts</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown"><a class="dropdown-item" href="blog-list-sidebar.php">Blog List</a>
                    </li>
                    <li class="dropdown"><a class="dropdown-item" href="blog-single-sidebar.php">Latest Articles</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- Page title-->
    <!-- Page Title (Light)-->
    <div class="bg-secondary py-4">
      <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
        <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb flex-lg-nowrap justify-content-center justify-content-lg-start">
              <li class="breadcrumb-item"><a class="text-nowrap" href="index.php"><i class="czi-home"></i>Home</a></li>
              <li class="breadcrumb-item text-nowrap"><a href="#">Blog</a>
              </li>
              <li class="breadcrumb-item text-nowrap active" aria-current="page">List with sidebar</li>
            </ol>
          </nav>
        </div>
        <div class="order-lg-1 pr-lg-4 text-center text-lg-left">
          <h1 class="h3 mb-0">Blog list with sidebar</h1>
        </div>
      </div>
    </div>
    <!-- Page Content-->
    <div class="container pb-5 mb-2 mb-md-4">
      <!-- Featured posts carousel-->
      <div class="featured-posts-carousel cz-carousel pt-5">
        <div class="cz-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;nav&quot;: false, &quot;autoHeight&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;750&quot;:{&quot;items&quot;:2, &quot;gutter&quot;: 20},&quot;991&quot;:{&quot;items&quot;:2, &quot;gutter&quot;: 30}}}">
          <article><a class="blog-entry-thumb mb-3" href="blog-single-sidebar.php"><span class="blog-entry-meta-label font-size-sm"><i class="czi-time"></i>Sep 10</span><img src="img/blog/featured/01.jpg" alt="Featured post"></a>
            <div class="d-flex justify-content-between mb-2 pt-1">
              <h2 class="h5 blog-entry-title mb-0"><a href="blog-single-sidebar.php">Healthy Food - New Way of Living</a></h2><a class="blog-entry-meta-link font-size-sm text-nowrap ml-3 pt-1" href="blog-single-sidebar.php#comments"><i class="czi-message"></i>13</a>
            </div>
            <div class="d-flex align-items-center font-size-sm"><a class="blog-entry-meta-link" href="#">
                <div class="blog-entry-author-ava"><img src="img/blog/meta/04.jpg" alt="Olivia Reyes"></div>Olivia Reyes</a><span class="blog-entry-meta-divider"></span>
              <div class="font-size-sm text-muted">in <a href='#' class='blog-entry-meta-link'>Lifestyle</a>, <a href='#' class='blog-entry-meta-link'>Nutrition</a></div>
            </div>
          </article>
          <article><a class="blog-entry-thumb mb-3" href="blog-single-sidebar.php"><span class="blog-entry-meta-label font-size-sm"><i class="czi-time"></i>Aug 27</span><img src="img/blog/featured/02.jpg" alt="Featured post"></a>
            <div class="d-flex justify-content-between mb-2 pt-1">
              <h2 class="h5 blog-entry-title mb-0"><a href="blog-single-sidebar.php">Online Payment Security Tips for Shoppers</a></h2><a class="blog-entry-meta-link font-size-sm text-nowrap ml-3 pt-1" href="blog-single-sidebar.php#comments"><i class="czi-message"></i>9</a>
            </div>
            <div class="d-flex align-items-center font-size-sm"><a class="blog-entry-meta-link" href="#">
                <div class="blog-entry-author-ava"><img src="img/blog/meta/05.jpg" alt="Rafael Marquez"></div>Rafael Marquez</a><span class="blog-entry-meta-divider"></span>
              <div class="font-size-sm text-muted">in <a href='#' class='blog-entry-meta-link'>Online shpopping</a></div>
            </div>
          </article>
          <article><a class="blog-entry-thumb mb-3" href="blog-single-sidebar.php"><span class="blog-entry-meta-label font-size-sm"><i class="czi-time"></i>Aug 16</span><img src="img/blog/featured/03.jpg" alt="Featured post"></a>
            <div class="d-flex justify-content-between mb-2 pt-1">
              <h2 class="h5 blog-entry-title mb-0"><a href="blog-single-sidebar.php">We Launched New Store in San Francisco!</a></h2><a class="blog-entry-meta-link font-size-sm text-nowrap ml-3 pt-1" href="blog-single-sidebar.php#comments"><i class="czi-message"></i>23</a>
            </div>
            <div class="d-flex align-items-center font-size-sm"><a class="blog-entry-meta-link" href="#">
                <div class="blog-entry-author-ava"><img src="img/blog/meta/03.jpg" alt="Paul Woodred"></div>Paul Woodred</a><span class="blog-entry-meta-divider"></span>
              <div class="font-size-sm text-muted">in <a href='#' class='blog-entry-meta-link'>Cartzilla news</a></div>
            </div>
          </article>
        </div>
      </div>
      <hr class="mt-5">
      <div class="row pt-5 mt-2">
        <!-- Entries list-->
        <section class="col-lg-8">
          <!-- Entry-->
          <article class="blog-list border-bottom pb-4 mb-5">
            <div class="left-column">
              <div class="d-flex align-items-center font-size-sm pb-2 mb-1"><a class="blog-entry-meta-link" href="#">
                  <div class="blog-entry-author-ava"><img src="img/blog/meta/01.jpg" alt="Emma Gallaher"></div>Emma Gallaher</a><span class="blog-entry-meta-divider"></span><a class="blog-entry-meta-link" href="#">Aug 15</a></div>
              <h2 class="h5 blog-entry-title"><a href="blog-single-sidebar.php">Global Travel and Vacations on a Tight Budget</a></h2>
            </div>
            <div class="right-column">
              <div class="d-flex justify-content-between mb-1">
                <div class="font-size-sm text-muted pr-2 mb-2">in <a href='#' class='blog-entry-meta-link'>Travel</a>, <a href='#' class='blog-entry-meta-link'>Personal finance</a></div>
                <div class="font-size-sm mb-2"><a class="blog-entry-meta-link text-nowrap" href="blog-single-sidebar.php#comments"><i class="czi-message"></i>8</a></div>
              </div>
              <p class="font-size-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt… <a href='blog-single-sidebar.php' class='blog-entry-meta-link font-weight-medium'>[Read more]</a></p>
            </div>
          </article>
          <!-- Entry-->
          <article class="blog-list border-bottom pb-4 mb-5">
            <div class="left-column">
              <div class="d-flex align-items-center font-size-sm pb-2 mb-1"><a class="blog-entry-meta-link" href="#">
                  <div class="blog-entry-author-ava"><img src="img/blog/meta/02.jpg" alt="Cynthia Gomez"></div>Cynthia Gomez</a><span class="blog-entry-meta-divider"></span><a class="blog-entry-meta-link" href="#">Jul 23</a></div>
              <h2 class="h5 blog-entry-title"><a href="blog-single-sidebar.php">Top New Trends in Suburban High Fashion</a></h2>
            </div>
            <div class="right-column"><a class="blog-entry-thumb mb-3" href="blog-single-sidebar.php"><img src="img/blog/01.jpg" alt="Post"></a>
              <div class="d-flex justify-content-between mb-1">
                <div class="font-size-sm text-muted pr-2 mb-2">in <a href='#' class='blog-entry-meta-link'>Shopping</a>, <a href='#' class='blog-entry-meta-link'>Fashion</a></div>
                <div class="font-size-sm mb-2"><a class="blog-entry-meta-link text-nowrap" href="blog-single-sidebar.php#comments"><i class="czi-message"></i>19</a></div>
              </div>
              <p class="font-size-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation… <a href='blog-single-sidebar.php' class='blog-entry-meta-link font-weight-medium'>[Read more]</a></p>
            </div>
          </article>
          <!-- Entry-->
          <article class="blog-list border-bottom pb-4 mb-5">
            <div class="left-column">
              <div class="d-flex align-items-center font-size-sm pb-2 mb-1"><a class="blog-entry-meta-link" href="#">
                  <div class="blog-entry-author-ava"><img src="img/blog/meta/03.jpg" alt="Paul Woodred"></div>Paul Woodred</a><span class="blog-entry-meta-divider"></span><a class="blog-entry-meta-link" href="#">Jul 6</a></div>
              <h2 class="h5 blog-entry-title"><a href="blog-single-sidebar.php">Shopping Tips. Places Where to Buy Cheap</a></h2>
            </div>
            <div class="right-column"><a class="blog-entry-thumb mb-3" href="blog-single-sidebar.php"><img src="img/blog/02.jpg" alt="Post"></a>
              <div class="d-flex justify-content-between mb-1">
                <div class="font-size-sm text-muted pr-2 mb-2">in <a href='#' class='blog-entry-meta-link'>Shopping</a>, <a href='#' class='blog-entry-meta-link'>Personal finance</a></div>
                <div class="font-size-sm mb-2"><a class="blog-entry-meta-link text-nowrap" href="blog-single-sidebar.php#comments"><i class="czi-message"></i>15</a></div>
              </div>
              <p class="font-size-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation… <a href='blog-single-sidebar.php' class='blog-entry-meta-link font-weight-medium'>[Read more]</a></p>
            </div>
          </article>
          <!-- Entry-->
          <article class="blog-list border-bottom pb-4 mb-4">
            <div class="left-column">
              <div class="d-flex align-items-center font-size-sm pb-2 mb-1"><a class="blog-entry-meta-link" href="#">
                  <div class="blog-entry-author-ava"><img src="img/blog/meta/04.jpg" alt="Olivia Reyes"></div>Olivia Reyes</a><span class="blog-entry-meta-divider"></span><a class="blog-entry-meta-link" href="#">Jun 12</a></div>
              <h2 class="h5 blog-entry-title"><a href="blog-single-sidebar.php">Google Pay is Now Available in All Outlets</a></h2>
            </div>
            <div class="right-column">
              <div class="d-flex justify-content-between mb-1">
                <div class="font-size-sm text-muted pr-2 mb-2">in <a href='#' class='blog-entry-meta-link'>Cartzilla news</a></div>
                <div class="font-size-sm mb-2"><a class="blog-entry-meta-link text-nowrap" href="blog-single-sidebar.php#comments"><i class="czi-message"></i>7</a></div>
              </div>
              <p class="font-size-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt… <a href='blog-single-sidebar.php' class='blog-entry-meta-link font-weight-medium'>[Read more]</a></p>
            </div>
          </article>
          <!-- Entry-->
          <article class="blog-list border-bottom pb-4 mb-5">
            <div class="left-column">
              <div class="d-flex align-items-center font-size-sm pb-2 mb-1"><a class="blog-entry-meta-link" href="#">
                  <div class="blog-entry-author-ava"><img src="img/blog/meta/05.jpg" alt="Rafael Marquez"></div>Rafael Marquez</a><span class="blog-entry-meta-divider"></span><a class="blog-entry-meta-link" href="#">May 29</a></div>
              <h2 class="h5 blog-entry-title"><a href="blog-single-sidebar.php">We Launched Regular Drone Delivery in California. Watch Demo Video</a></h2>
            </div>
            <div class="right-column cz-gallery"><a class="blog-entry-thumb gallery-item video-item mb-3" href="https://www.youtube.com/watch?v=TedKIlo0c04"><span class="blog-entry-meta-label font-size-sm"><i class="czi-video"></i><span class="font-size-ms">Watch video</span></span><img src="img/blog/03.jpg" alt="Post"></a>
              <div class="d-flex justify-content-between mb-1">
                <div class="font-size-sm text-muted pr-2 mb-2">in <a href='#' class='blog-entry-meta-link'>Cartzilla news</a></div>
                <div class="font-size-sm mb-2"><a class="blog-entry-meta-link text-nowrap" href="blog-single-sidebar.php#comments"><i class="czi-message"></i>31</a></div>
              </div>
              <p class="font-size-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation… <a href='blog-single-sidebar.php' class='blog-entry-meta-link font-weight-medium'>[Read more]</a></p>
            </div>
          </article>
          <!-- Pagination-->
          <nav class="d-flex justify-content-between pt-2" aria-label="Page navigation">
            <ul class="pagination">
              <li class="page-item"><a class="page-link" href="#"><i class="czi-arrow-left mr-2"></i>Prev</a></li>
            </ul>
            <ul class="pagination">
              <li class="page-item d-sm-none"><span class="page-link page-link-static">1 / 5</span></li>
              <li class="page-item active d-none d-sm-block" aria-current="page"><span class="page-link">1<span class="sr-only">(current)</span></span></li>
              <li class="page-item d-none d-sm-block"><a class="page-link" href="#">2</a></li>
              <li class="page-item d-none d-sm-block"><a class="page-link" href="#">3</a></li>
              <li class="page-item d-none d-sm-block"><a class="page-link" href="#">4</a></li>
              <li class="page-item d-none d-sm-block"><a class="page-link" href="#">5</a></li>
            </ul>
            <ul class="pagination">
              <li class="page-item"><a class="page-link" href="#" aria-label="Next">Next<i class="czi-arrow-right ml-2"></i></a></li>
            </ul>
          </nav>
        </section>
        <aside class="col-lg-4">
          <!-- Sidebar-->
          <div class="cz-sidebar border-left ml-lg-auto" id="blog-sidebar">
            <div class="cz-sidebar-header box-shadow-sm">
              <button class="close ml-auto" type="button" data-dismiss="sidebar" aria-label="Close"><span class="d-inline-block font-size-xs font-weight-normal align-middle">Close sidebar</span><span class="d-inline-block align-middle ml-2" aria-hidden="true">&times;</span></button>
            </div>
            <div class="cz-sidebar-body py-lg-1" data-simplebar data-simplebar-auto-hide="true">
              <!-- Categories-->
              <div class="widget widget-links mb-grid-gutter pb-grid-gutter border-bottom">
                <h3 class="widget-title">Blog categories</h3>
                <ul class="widget-list">
                  <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Online shopping</span><span class="font-size-xs text-muted ml-3">18</span></a></li>
                  <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Fashion</span><span class="font-size-xs text-muted ml-3">25</span></a></li>
                  <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Personal finance</span><span class="font-size-xs text-muted ml-3">13</span></a></li>
                  <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Travel &amp; vacation</span><span class="font-size-xs text-muted ml-3">7</span></a></li>
                  <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Lifestyle</span><span class="font-size-xs text-muted ml-3">34</span></a></li>
                  <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Technology</span><span class="font-size-xs text-muted ml-3">6</span></a></li>
                </ul>
              </div>
              <!-- Trending posts-->
              <div class="widget mb-grid-gutter pb-grid-gutter border-bottom">
                <h3 class="widget-title">Trending posts</h3>
                <div class="media align-items-center mb-3"><a href="blog-single.php"><img class="rounded" src="img/blog/widget/01.jpg" width="64" alt="Post image"></a>
                  <div class="media-body pl-3">
                    <h6 class="blog-entry-title font-size-sm mb-0"><a href="blog-single.php">Retro Cameras are Trending. Why so Popular?</a></h6><span class="font-size-ms text-muted">by <a href='#' class='blog-entry-meta-link'>Andy Williams</a></span>
                  </div>
                </div>
                <div class="media align-items-center mb-3"><a href="blog-single.php"><img class="rounded" src="img/blog/widget/02.jpg" width="64" alt="Post image"></a>
                  <div class="media-body pl-3">
                    <h6 class="blog-entry-title font-size-sm mb-0"><a href="blog-single.php">New Trends in Suburban Fashion</a></h6><span class="font-size-ms text-muted">by <a href='#' class='blog-entry-meta-link'>Susan Mayer</a></span>
                  </div>
                </div>
                <div class="media align-items-center"><a href="blog-single.php"><img class="rounded" src="img/blog/widget/03.jpg" width="64" alt="Post image"></a>
                  <div class="media-body pl-3">
                    <h6 class="blog-entry-title font-size-sm mb-0"><a href="blog-single.php">Augmented Reality - Game Changing Technology</a></h6><span class="font-size-ms text-muted">by <a href='#' class='blog-entry-meta-link'>John Doe</a></span>
                  </div>
                </div>
              </div>
              <!-- Popular tags-->
              <div class="widget mb-grid-gutter">
                <h3 class="widget-title">Popular tags</h3><a class="btn-tag mr-2 mb-2" href="#">#fashion</a><a class="btn-tag mr-2 mb-2" href="#">#gadgets</a><a class="btn-tag mr-2 mb-2" href="#">#online shopping</a><a class="btn-tag mr-2 mb-2" href="#">#top brands</a><a class="btn-tag mr-2 mb-2" href="#">#travel</a><a class="btn-tag mr-2 mb-2" href="#">#cartzilla news</a><a class="btn-tag mr-2 mb-2" href="#">#personal finance</a><a class="btn-tag mr-2 mb-2" href="#">#tips &amp; tricks</a>
              </div>
              <!-- Promo banner-->
              <div class="bg-size-cover bg-position-center rounded-lg py-5" style="background-image: url(img/blog/banner-bg.jpg);">
                <div class="py-5 px-4 text-center">
                  <h5 class="mb-2">Your Add Banner Here</h5>
                  <p class="font-size-sm text-muted">Hurry up to reserve your spot</p><a class="btn btn-primary btn-shadow btn-sm" href="#">Contact us</a>
                </div>
              </div>
            </div>
          </div>
        </aside>
      </div>
    </div>
    <!-- Footer-->
    <!-- Footer-->
    <footer class="bg-dark pt-5">
      <div class="container">
        <div class="row pb-2">
          <div class="col-md-4 col-sm-6">
            <div class="widget widget-links widget-light pb-2 mb-4">
              <h3 class="widget-title text-light">Shop departments</h3>
              <ul class="widget-list">
                <li class="widget-list-item"><a class="widget-list-link" href="#">Sneakers &amp; Athletic</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Athletic Apparel</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Sandals</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Jeans</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Shirts &amp; Tops</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Shorts</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">T-Shirts</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Swimwear</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Clogs &amp; Mules</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Bags &amp; Wallets</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Accessories</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Sunglasses &amp; Eyewear</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Watches</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="widget widget-links widget-light pb-2 mb-4">
              <h3 class="widget-title text-light">Account &amp; shipping info</h3>
              <ul class="widget-list">
                <li class="widget-list-item"><a class="widget-list-link" href="#">Your account</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Shipping rates &amp; policies</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Refunds &amp; replacements</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Order tracking</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Delivery info</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Taxes &amp; fees</a></li>
              </ul>
            </div>
            <div class="widget widget-links widget-light pb-2 mb-4">
              <h3 class="widget-title text-light">About us</h3>
              <ul class="widget-list">
                <li class="widget-list-item"><a class="widget-list-link" href="#">About company</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Our team</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Careers</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">News</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="widget pb-2 mb-4">
              <h3 class="widget-title text-light pb-1">Stay informed</h3>
              <form class="cz-subscribe-form validate" action="https://studio.us12.list-manage.com/subscribe/post?u=c7103e2c981361a6639545bd5&amp;amp;id=29ca296126" method="post" name="mc-embedded-subscribe-form" target="_blank" novalidate>
                <div class="input-group input-group-overlay flex-nowrap">
                  <div class="input-group-prepend-overlay"><span class="input-group-text text-muted font-size-base"><i class="czi-mail"></i></span></div>
                  <input class="form-control prepended-form-control" type="email" name="EMAIL" placeholder="Your email" required>
                  <div class="input-group-append">
                    <button class="btn btn-primary" type="submit" name="subscribe">Subscribe*</button>
                  </div>
                </div>
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true">
                  <input class="cz-subscribe-form-antispam" type="text" name="b_c7103e2c981361a6639545bd5_29ca296126" tabindex="-1">
                </div><small class="form-text text-light opacity-50">*Subscribe to our newsletter to receive early discount offers, updates and new products info.</small>
                <div class="subscribe-status"></div>
              </form>
            </div>
            <div class="widget pb-2 mb-4">
              <h3 class="widget-title text-light pb-1">Download our app</h3>
              <div class="d-flex flex-wrap">
                <div class="mr-2 mb-2"><a class="btn-market btn-apple" href="#" role="button"><span class="btn-market-subtitle">Download on the</span><span class="btn-market-title">App Store</span></a></div>
                <div class="mb-2"><a class="btn-market btn-google" href="#" role="button"><span class="btn-market-subtitle">Download on the</span><span class="btn-market-title">Google Play</span></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="pt-5 bg-darker">
        <div class="container">
          <div class="row pb-3">
            <div class="col-md-3 col-sm-6 mb-4">
              <div class="media"><i class="czi-rocket text-primary" style="font-size: 2.25rem;"></i>
                <div class="media-body pl-3">
                  <h6 class="font-size-base text-light mb-1">Fast and free delivery</h6>
                  <p class="mb-0 font-size-ms text-light opacity-50">Free delivery for all orders over $200</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
              <div class="media"><i class="czi-currency-exchange text-primary" style="font-size: 2.25rem;"></i>
                <div class="media-body pl-3">
                  <h6 class="font-size-base text-light mb-1">Money back guarantee</h6>
                  <p class="mb-0 font-size-ms text-light opacity-50">We return money within 30 days</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
              <div class="media"><i class="czi-support text-primary" style="font-size: 2.25rem;"></i>
                <div class="media-body pl-3">
                  <h6 class="font-size-base text-light mb-1">24/7 customer support</h6>
                  <p class="mb-0 font-size-ms text-light opacity-50">Friendly 24/7 customer support</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
              <div class="media"><i class="czi-card text-primary" style="font-size: 2.25rem;"></i>
                <div class="media-body pl-3">
                  <h6 class="font-size-base text-light mb-1">Secure online payment</h6>
                  <p class="mb-0 font-size-ms text-light opacity-50">We possess SSL / Secure сertificate</p>
                </div>
              </div>
            </div>
          </div>
          <hr class="hr-light pb-4 mb-3">
          <div class="row pb-2">
            <div class="col-md-6 text-center text-md-left mb-4">
              <div class="text-nowrap mb-4"><a class="d-inline-block align-middle mt-n1 mr-3" href="#"><img class="d-block" width="117" src="img/footer-logo-light.png" alt="Cartzilla"/></a>
                <div class="btn-group dropdown disable-autohide">
                  <button class="btn btn-outline-light border-light btn-sm dropdown-toggle px-2" type="button" data-toggle="dropdown"><img class="mr-2" width="20" src="img/flags/en.png" alt="English"/>Eng / Rs.
                  </button>
                  <ul class="dropdown-menu">
                    <li class="dropdown-item">
                      <select class="custom-select custom-select-sm">
                        <option value="nrs">रु NPR</option>
                        <option value="usd">$ USD</option>
                      </select>
                    </li>
                    <li><a class="dropdown-item pb-1" href="#"><img class="mr-2" width="20" src="img/flags/en.png" alt="English"/>English</a></li>
                    <li><a class="dropdown-item pb-1" href="#"><img class="mr-2" width="20" src="img/flags/np.png" alt="Nepali"/>Nepali</a></li>
                  </ul>
                </div>
              </div>
              <div class="widget widget-links widget-light">
                <ul class="widget-list d-flex flex-wrap justify-content-center justify-content-md-start">
                  <li class="widget-list-item mr-4"><a class="widget-list-link" href="#">Outlets</a></li>
                  <li class="widget-list-item mr-4"><a class="widget-list-link" href="#">Affiliates</a></li>
                  <li class="widget-list-item mr-4"><a class="widget-list-link" href="#">Support</a></li>
                  <li class="widget-list-item mr-4"><a class="widget-list-link" href="#">Privacy</a></li>
                  <li class="widget-list-item mr-4"><a class="widget-list-link" href="#">Terms of use</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 text-center text-md-right mb-4">
              <div class="mb-3"><a class="social-btn sb-light sb-twitter ml-2 mb-2" href="#"><i class="czi-twitter"></i></a><a class="social-btn sb-light sb-facebook ml-2 mb-2" href="#"><i class="czi-facebook"></i></a><a class="social-btn sb-light sb-instagram ml-2 mb-2" href="#"><i class="czi-instagram"></i></a><a class="social-btn sb-light sb-pinterest ml-2 mb-2" href="#"><i class="czi-pinterest"></i></a><a class="social-btn sb-light sb-youtube ml-2 mb-2" href="#"><i class="czi-youtube"></i></a></div><img class="d-inline-block" width="187" src="img/cards-alt.png" alt="Payment methods"/>
            </div>
          </div>
          <div class="pb-4 font-size-xs text-light opacity-50 text-center text-md-left">© All rights reserved. Made by <a class="text-light" href="https://createx.studio/" target="_blank" rel="noopener">Createx Studio</a></div>
        </div>
      </div>
    </footer>
    <!-- Toolbar for handheld devices-->
    <div class="cz-handheld-toolbar">
      <div class="d-table table-fixed w-100"><a class="d-table-cell cz-handheld-toolbar-item" href="#blog-sidebar" data-toggle="sidebar"><span class="cz-handheld-toolbar-icon"><i class="czi-sign-in"></i></span><span class="cz-handheld-toolbar-label">Sidebar</span></a><a class="d-table-cell cz-handheld-toolbar-item" href="account-wishlist.php"><span class="cz-handheld-toolbar-icon"><i class="czi-heart"></i></span><span class="cz-handheld-toolbar-label">Wishlist</span></a><a class="d-table-cell cz-handheld-toolbar-item" href="#navbarCollapse" data-toggle="collapse" onclick="window.scrollTo(0, 0)"><span class="cz-handheld-toolbar-icon"><i class="czi-menu"></i></span><span class="cz-handheld-toolbar-label">Menu</span></a><a class="d-table-cell cz-handheld-toolbar-item" href="shop-cart.php"><span class="cz-handheld-toolbar-icon"><i class="czi-cart"></i><span class="badge badge-primary badge-pill ml-1">4</span></span><span class="cz-handheld-toolbar-label">$265.00</span></a>
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
    <script src="vendor/lightgallery.js/dist/js/lightgallery.min.js"></script>
    <script src="vendor/lg-video.js/dist/lg-video.min.js"></script>
    <!-- Main theme script-->
    <script src="js/theme.min.js"></script>
  </body>

<!-- Mirrored from demo.createx.studio/cartzilla/blog-list-sidebar.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Jul 2020 09:51:43 GMT -->
</html>