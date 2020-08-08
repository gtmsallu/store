<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from demo.createx.studio/cartzilla/shop-grid-ls.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Jul 2020 09:27:47 GMT -->
<head>
    <meta charset="utf-8">
    <title>Cartzilla | Shop grid left sidebar
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
    <link rel="stylesheet" media="screen" href="vendor/nouislider/distribute/nouislider.min.css"/>
    <link rel="stylesheet" media="screen" href="vendor/drift-zoom/dist/drift-basic.min.css"/>
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
    <!-- Quick View Modal-->
    <div class="modal-quick-view modal fade" id="quick-view" tabindex="-1">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title product-title"><a href="shop-single-v1.php" data-toggle="tooltip" data-placement="right" title="Go to product page">Sports Hooded Sweatshirt<i class="czi-arrow-right font-size-lg ml-2"></i></a></h4>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <div class="row">
              <!-- Product gallery-->
              <div class="col-lg-7 pr-lg-0">
                <div class="cz-product-gallery">
                  <div class="cz-preview order-sm-2">
                    <div class="cz-preview-item active" id="first"><img class="cz-image-zoom" src="img/shop/single/gallery/01.jpg" data-zoom="img/shop/single/gallery/01.jpg" alt="Product image">
                      <div class="cz-image-zoom-pane"></div>
                    </div>
                    <div class="cz-preview-item" id="second"><img class="cz-image-zoom" src="img/shop/single/gallery/02.jpg" data-zoom="img/shop/single/gallery/02.jpg" alt="Product image">
                      <div class="cz-image-zoom-pane"></div>
                    </div>
                    <div class="cz-preview-item" id="third"><img class="cz-image-zoom" src="img/shop/single/gallery/03.jpg" data-zoom="img/shop/single/gallery/03.jpg" alt="Product image">
                      <div class="cz-image-zoom-pane"></div>
                    </div>
                    <div class="cz-preview-item" id="fourth"><img class="cz-image-zoom" src="img/shop/single/gallery/04.jpg" data-zoom="img/shop/single/gallery/04.jpg" alt="Product image">
                      <div class="cz-image-zoom-pane"></div>
                    </div>
                  </div>
                  <div class="cz-thumblist order-sm-1"><a class="cz-thumblist-item active" href="#first"><img src="img/shop/single/gallery/th01.jpg" alt="Product thumb"></a><a class="cz-thumblist-item" href="#second"><img src="img/shop/single/gallery/th02.jpg" alt="Product thumb"></a><a class="cz-thumblist-item" href="#third"><img src="img/shop/single/gallery/th03.jpg" alt="Product thumb"></a><a class="cz-thumblist-item" href="#fourth"><img src="img/shop/single/gallery/th04.jpg" alt="Product thumb"></a></div>
                </div>
              </div>
              <!-- Product details-->
              <div class="col-lg-5 pt-4 pt-lg-0 cz-image-zoom-pane">
                <div class="product-details ml-auto pb-3">
                  <div class="d-flex justify-content-between align-items-center mb-2"><a href="shop-single-v1.php#reviews">
                      <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                      </div><span class="d-inline-block font-size-sm text-body align-middle mt-1 ml-1">74 Reviews</span></a>
                    <button class="btn-wishlist" type="button" data-toggle="tooltip" title="Add to wishlist"><i class="czi-heart"></i></button>
                  </div>
                  <div class="mb-3"><span class="h3 font-weight-normal text-accent mr-1">$18.<small>99</small></span>
                    <del class="text-muted font-size-lg mr-3">$25.<small>00</small></del><span class="badge badge-danger badge-shadow align-middle mt-n2">Sale</span>
                  </div>
                  <div class="font-size-sm mb-4"><span class="text-heading font-weight-medium mr-1">Color:</span><span class="text-muted">Red/Dark blue/White</span></div>
                  <div class="position-relative mr-n4 mb-3">
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="color" id="color1" checked>
                      <label class="custom-option-label rounded-circle" for="color1"><span class="custom-option-color rounded-circle" style="background-image: url(img/shop/single/color-opt-1.png)"></span></label>
                    </div>
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="color" id="color2">
                      <label class="custom-option-label rounded-circle" for="color2"><span class="custom-option-color rounded-circle" style="background-image: url(img/shop/single/color-opt-2.png)"></span></label>
                    </div>
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="color" id="color3">
                      <label class="custom-option-label rounded-circle" for="color3"><span class="custom-option-color rounded-circle" style="background-image: url(img/shop/single/color-opt-3.png)"></span></label>
                    </div>
                    <div class="product-badge product-available mt-n1"><i class="czi-security-check"></i>Product available</div>
                  </div>
                  <form class="mb-grid-gutter">
                    <div class="form-group">
                      <label class="font-weight-medium pb-1" for="product-size">Size:</label>
                      <select class="custom-select" required id="product-size">
                        <option value="">Select size</option>
                        <option value="xs">XS</option>
                        <option value="s">S</option>
                        <option value="m">M</option>
                        <option value="l">L</option>
                        <option value="xl">XL</option>
                      </select>
                    </div>
                    <div class="form-group d-flex align-items-center">
                      <select class="custom-select mr-3" style="width: 5rem;">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                      </select>
                      <button class="btn btn-primary btn-shadow btn-block" type="submit"><i class="czi-cart font-size-lg mr-2"></i>Add to Cart</button>
                    </div>
                  </form>
                  <h5 class="h6 mb-3 pb-2 border-bottom"><i class="czi-announcement text-muted font-size-lg align-middle mt-n1 mr-2"></i>Product info</h5>
                  <h6 class="font-size-sm mb-2">Style</h6>
                  <ul class="font-size-sm pl-4">
                    <li>Hooded top</li>
                  </ul>
                  <h6 class="font-size-sm mb-2">Composition</h6>
                  <ul class="font-size-sm pl-4">
                    <li>Elastic rib: Cotton 95%, Elastane 5%</li>
                    <li>Lining: Cotton 100%</li>
                    <li>Cotton 80%, Polyester 20%</li>
                  </ul>
                  <h6 class="font-size-sm mb-2">Art. No.</h6>
                  <ul class="font-size-sm pl-4 mb-0">
                    <li>183260098</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
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
                <li class="nav-item active"><a class="nav-link" href="shop-grid-ls.php">Shop</a>
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
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Blog's & Posts</a>
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
    <!-- Page Title-->
    <div class="page-title-overlap bg-dark pt-4">
      <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
        <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
              <li class="breadcrumb-item"><a class="text-nowrap" href="index.php"><i class="czi-home"></i>Home</a></li>
              <li class="breadcrumb-item text-nowrap"><a href="#">Shop</a>
              </li>
              <li class="breadcrumb-item text-nowrap active" aria-current="page">Grid left sidebar</li>
            </ol>
          </nav>
        </div>
        <div class="order-lg-1 pr-lg-4 text-center text-lg-left">
          <h1 class="h3 text-light mb-0">Shop grid left sidebar</h1>
        </div>
      </div>
    </div>
    <!-- Page Content-->
    <div class="container pb-5 mb-2 mb-md-4">
      <div class="row">
        <!-- Sidebar-->
        <aside class="col-lg-4">
          <!-- Sidebar-->
          <div class="cz-sidebar rounded-lg box-shadow-lg" id="shop-sidebar">
            <div class="cz-sidebar-header box-shadow-sm">
              <button class="close ml-auto" type="button" data-dismiss="sidebar" aria-label="Close"><span class="d-inline-block font-size-xs font-weight-normal align-middle">Close sidebar</span><span class="d-inline-block align-middle ml-2" aria-hidden="true">&times;</span></button>
            </div>
            <div class="cz-sidebar-body">
              <!-- Categories-->
              <div class="widget widget-categories mb-4 pb-4 border-bottom">
                <h3 class="widget-title">Categories</h3>
                <div class="accordion mt-n1" id="shop-categories">
                  <!-- Shoes-->
                  <div class="card">
                    <div class="card-header">
                      <h3 class="accordion-heading"><a class="collapsed" href="#shoes" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="shoes">Shoes<span class="accordion-indicator"></span></a></h3>
                    </div>
                    <div class="collapse" id="shoes" data-parent="#shop-categories">
                      <div class="card-body">
                        <div class="widget widget-links cz-filter">
                          <div class="input-group-overlay input-group-sm mb-2">
                            <input class="cz-filter-search form-control form-control-sm appended-form-control" type="text" placeholder="Search">
                            <div class="input-group-append-overlay"><span class="input-group-text"><i class="czi-search"></i></span></div>
                          </div>
                          <ul class="widget-list cz-filter-list pt-1" style="height: 12rem;" data-simplebar data-simplebar-auto-hide="false">
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">View all</span><span class="font-size-xs text-muted ml-3">1,953</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Pumps &amp; High Heels</span><span class="font-size-xs text-muted ml-3">247</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Ballerinas &amp; Flats</span><span class="font-size-xs text-muted ml-3">156</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Sandals</span><span class="font-size-xs text-muted ml-3">310</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Sneakers</span><span class="font-size-xs text-muted ml-3">402</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Boots</span><span class="font-size-xs text-muted ml-3">393</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Ankle Boots</span><span class="font-size-xs text-muted ml-3">50</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Loafers</span><span class="font-size-xs text-muted ml-3">93</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Slip-on</span><span class="font-size-xs text-muted ml-3">122</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Flip Flops</span><span class="font-size-xs text-muted ml-3">116</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Clogs &amp; Mules</span><span class="font-size-xs text-muted ml-3">24</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Athletic Shoes</span><span class="font-size-xs text-muted ml-3">31</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Oxfords</span><span class="font-size-xs text-muted ml-3">9</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Smart Shoes</span><span class="font-size-xs text-muted ml-3">18</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Clothing-->
                  <div class="card">
                    <div class="card-header">
                      <h3 class="accordion-heading"><a href="#clothing" role="button" data-toggle="collapse" aria-expanded="true" aria-controls="clothing">Clothing<span class="accordion-indicator"></span></a></h3>
                    </div>
                    <div class="collapse show" id="clothing" data-parent="#shop-categories">
                      <div class="card-body">
                        <div class="widget widget-links cz-filter">
                          <div class="input-group-overlay input-group-sm mb-2">
                            <input class="cz-filter-search form-control form-control-sm appended-form-control" type="text" placeholder="Search">
                            <div class="input-group-append-overlay"><span class="input-group-text"><i class="czi-search"></i></span></div>
                          </div>
                          <ul class="widget-list cz-filter-list pt-1" style="height: 12rem;" data-simplebar data-simplebar-auto-hide="false">
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">View all</span><span class="font-size-xs text-muted ml-3">2,548</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Blazers &amp; Suits</span><span class="font-size-xs text-muted ml-3">235</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Blouses</span><span class="font-size-xs text-muted ml-3">410</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Cardigans &amp; Jumpers</span><span class="font-size-xs text-muted ml-3">107</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Dresses</span><span class="font-size-xs text-muted ml-3">93</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Hoodie &amp; Sweatshirts</span><span class="font-size-xs text-muted ml-3">122</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Jackets &amp; Coats</span><span class="font-size-xs text-muted ml-3">116</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Jeans</span><span class="font-size-xs text-muted ml-3">215</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Lingerie</span><span class="font-size-xs text-muted ml-3">150</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Maternity Wear</span><span class="font-size-xs text-muted ml-3">8</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Nightwear</span><span class="font-size-xs text-muted ml-3">26</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Shirts</span><span class="font-size-xs text-muted ml-3">164</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Shorts</span><span class="font-size-xs text-muted ml-3">147</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Socks &amp; Tights</span><span class="font-size-xs text-muted ml-3">139</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Sportswear</span><span class="font-size-xs text-muted ml-3">65</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Swimwear</span><span class="font-size-xs text-muted ml-3">18</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">T-shirts &amp; Vests</span><span class="font-size-xs text-muted ml-3">209</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Tops</span><span class="font-size-xs text-muted ml-3">132</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Trousers</span><span class="font-size-xs text-muted ml-3">105</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Underwear</span><span class="font-size-xs text-muted ml-3">87</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Bags-->
                  <div class="card">
                    <div class="card-header">
                      <h3 class="accordion-heading"><a class="collapsed" href="#bags" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="bags">Bags<span class="accordion-indicator"></span></a></h3>
                    </div>
                    <div class="collapse" id="bags" data-parent="#shop-categories">
                      <div class="card-body">
                        <div class="widget widget-links cz-filter">
                          <div class="input-group-overlay input-group-sm mb-2">
                            <input class="cz-filter-search form-control form-control-sm appended-form-control" type="text" placeholder="Search">
                            <div class="input-group-append-overlay"><span class="input-group-text"><i class="czi-search"></i></span></div>
                          </div>
                          <ul class="widget-list cz-filter-list pt-1" style="height: 12rem;" data-simplebar data-simplebar-auto-hide="false">
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">View all</span><span class="font-size-xs text-muted ml-3">801</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Handbags</span><span class="font-size-xs text-muted ml-3">238</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Backpacks</span><span class="font-size-xs text-muted ml-3">116</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Wallets</span><span class="font-size-xs text-muted ml-3">104</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Luggage</span><span class="font-size-xs text-muted ml-3">115</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Lumbar Packs</span><span class="font-size-xs text-muted ml-3">17</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Duffle Bags</span><span class="font-size-xs text-muted ml-3">9</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Bag / Travel Accessories</span><span class="font-size-xs text-muted ml-3">93</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Diaper Bags</span><span class="font-size-xs text-muted ml-3">5</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Lunch Bags</span><span class="font-size-xs text-muted ml-3">8</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Messenger Bags</span><span class="font-size-xs text-muted ml-3">2</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Laptop Bags</span><span class="font-size-xs text-muted ml-3">31</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Briefcases</span><span class="font-size-xs text-muted ml-3">45</span></a></li>
                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Sport Bags</span><span class="font-size-xs text-muted ml-3">18</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Sunglasses-->
                  <div class="card">
                    <div class="card-header">
                      <h3 class="accordion-heading"><a class="collapsed" href="#sunglasses" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sunglasses">Sunglasses<span class="accordion-indicator"></span></a></h3>
                    </div>
                    <div class="collapse" id="sunglasses" data-parent="#shop-categories">
                      <div class="card-body">
                        <div class="widget widget-links">
                          <ul class="widget-list">
                            <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>View all</span><span class="font-size-xs text-muted ml-3">1,842</span></a></li>
                            <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Fashion Sunglasses</span><span class="font-size-xs text-muted ml-3">953</span></a></li>
                            <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Sport Sunglasses</span><span class="font-size-xs text-muted ml-3">589</span></a></li>
                            <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Classic Sunglasses</span><span class="font-size-xs text-muted ml-3">300</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Watches-->
                  <div class="card">
                    <div class="card-header">
                      <h3 class="accordion-heading"><a class="collapsed" href="#watches" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="watches">Watches<span class="accordion-indicator"></span></a></h3>
                    </div>
                    <div class="collapse" id="watches" data-parent="#shop-categories">
                      <div class="card-body">
                        <div class="widget widget-links">
                          <ul class="widget-list">
                            <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>View all</span><span class="font-size-xs text-muted ml-3">734</span></a></li>
                            <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Fashion Watches</span><span class="font-size-xs text-muted ml-3">572</span></a></li>
                            <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Casual Watches</span><span class="font-size-xs text-muted ml-3">110</span></a></li>
                            <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Luxury Watches</span><span class="font-size-xs text-muted ml-3">34</span></a></li>
                            <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Sport Watches</span><span class="font-size-xs text-muted ml-3">18</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Accessories-->
                  <div class="card">
                    <div class="card-header">
                      <h3 class="accordion-heading"><a class="collapsed" href="#accessories" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="accessories">Accessories<span class="accordion-indicator"></span></a></h3>
                    </div>
                    <div class="collapse" id="accessories" data-parent="#shop-categories">
                      <div class="card-body">
                        <div class="widget widget-links">
                          <ul class="widget-list">
                            <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>View all</span><span class="font-size-xs text-muted ml-3">920</span></a></li>
                            <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Belts</span><span class="font-size-xs text-muted ml-3">364</span></a></li>
                            <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Hats</span><span class="font-size-xs text-muted ml-3">405</span></a></li>
                            <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Jewelry</span><span class="font-size-xs text-muted ml-3">131</span></a></li>
                            <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Cosmetics</span><span class="font-size-xs text-muted ml-3">20</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Price range-->
              <div class="widget mb-4 pb-4 border-bottom">
                <h3 class="widget-title">Price</h3>
                <div class="cz-range-slider" data-start-min="250" data-start-max="680" data-min="0" data-max="1000" data-step="1">
                  <div class="cz-range-slider-ui"></div>
                  <div class="d-flex pb-1">
                    <div class="w-50 pr-2 mr-2">
                      <div class="input-group input-group-sm">
                        <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                        <input class="form-control cz-range-slider-value-min" type="text">
                      </div>
                    </div>
                    <div class="w-50 pl-2">
                      <div class="input-group input-group-sm">
                        <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                        <input class="form-control cz-range-slider-value-max" type="text">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Filter by Brand-->
              <div class="widget cz-filter mb-4 pb-4 border-bottom">
                <h3 class="widget-title">Brand</h3>
                <div class="input-group-overlay input-group-sm mb-2">
                  <input class="cz-filter-search form-control form-control-sm appended-form-control" type="text" placeholder="Search">
                  <div class="input-group-append-overlay"><span class="input-group-text"><i class="czi-search"></i></span></div>
                </div>
                <ul class="widget-list cz-filter-list list-unstyled pt-1" style="max-height: 12rem;" data-simplebar data-simplebar-auto-hide="false">
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="adidas">
                      <label class="custom-control-label cz-filter-item-text" for="adidas">Adidas</label>
                    </div><span class="font-size-xs text-muted">425</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="ataylor">
                      <label class="custom-control-label cz-filter-item-text" for="ataylor">Ann Taylor</label>
                    </div><span class="font-size-xs text-muted">15</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="armani">
                      <label class="custom-control-label cz-filter-item-text" for="armani">Armani</label>
                    </div><span class="font-size-xs text-muted">18</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="banana">
                      <label class="custom-control-label cz-filter-item-text" for="banana">Banana Republic</label>
                    </div><span class="font-size-xs text-muted">103</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="bilabong">
                      <label class="custom-control-label cz-filter-item-text" for="bilabong">Bilabong</label>
                    </div><span class="font-size-xs text-muted">27</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="birkenstock">
                      <label class="custom-control-label cz-filter-item-text" for="birkenstock">Birkenstock</label>
                    </div><span class="font-size-xs text-muted">10</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="klein">
                      <label class="custom-control-label cz-filter-item-text" for="klein">Calvin Klein</label>
                    </div><span class="font-size-xs text-muted">365</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="columbia">
                      <label class="custom-control-label cz-filter-item-text" for="columbia">Columbia</label>
                    </div><span class="font-size-xs text-muted">508</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="converse">
                      <label class="custom-control-label cz-filter-item-text" for="converse">Converse</label>
                    </div><span class="font-size-xs text-muted">176</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="dockers">
                      <label class="custom-control-label cz-filter-item-text" for="dockers">Dockers</label>
                    </div><span class="font-size-xs text-muted">54</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="fruit">
                      <label class="custom-control-label cz-filter-item-text" for="fruit">Fruit of the Loom</label>
                    </div><span class="font-size-xs text-muted">739</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="hanes">
                      <label class="custom-control-label cz-filter-item-text" for="hanes">Hanes</label>
                    </div><span class="font-size-xs text-muted">92</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="choo">
                      <label class="custom-control-label cz-filter-item-text" for="choo">Jimmy Choo</label>
                    </div><span class="font-size-xs text-muted">17</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="levis">
                      <label class="custom-control-label cz-filter-item-text" for="levis">Levi's</label>
                    </div><span class="font-size-xs text-muted">361</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="lee">
                      <label class="custom-control-label cz-filter-item-text" for="lee">Lee</label>
                    </div><span class="font-size-xs text-muted">264</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="wearhouse">
                      <label class="custom-control-label cz-filter-item-text" for="wearhouse">Men's Wearhouse</label>
                    </div><span class="font-size-xs text-muted">75</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="newbalance">
                      <label class="custom-control-label cz-filter-item-text" for="newbalance">New Balance</label>
                    </div><span class="font-size-xs text-muted">218</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="nike">
                      <label class="custom-control-label cz-filter-item-text" for="nike">Nike</label>
                    </div><span class="font-size-xs text-muted">810</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="navy">
                      <label class="custom-control-label cz-filter-item-text" for="navy">Old Navy</label>
                    </div><span class="font-size-xs text-muted">147</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="polo">
                      <label class="custom-control-label cz-filter-item-text" for="polo">Polo Ralph Lauren</label>
                    </div><span class="font-size-xs text-muted">64</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="puma">
                      <label class="custom-control-label cz-filter-item-text" for="puma">Puma</label>
                    </div><span class="font-size-xs text-muted">370</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="reebok">
                      <label class="custom-control-label cz-filter-item-text" for="reebok">Reebok</label>
                    </div><span class="font-size-xs text-muted">506</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="skechers">
                      <label class="custom-control-label cz-filter-item-text" for="skechers">Skechers</label>
                    </div><span class="font-size-xs text-muted">209</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="hilfiger">
                      <label class="custom-control-label cz-filter-item-text" for="hilfiger">Tommy Hilfiger</label>
                    </div><span class="font-size-xs text-muted">487</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="armour">
                      <label class="custom-control-label cz-filter-item-text" for="armour">Under Armour</label>
                    </div><span class="font-size-xs text-muted">90</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="urban">
                      <label class="custom-control-label cz-filter-item-text" for="urban">Urban Outfitters</label>
                    </div><span class="font-size-xs text-muted">152</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="vsecret">
                      <label class="custom-control-label cz-filter-item-text" for="vsecret">Victoria's Secret</label>
                    </div><span class="font-size-xs text-muted">238</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="wolverine">
                      <label class="custom-control-label cz-filter-item-text" for="wolverine">Wolverine</label>
                    </div><span class="font-size-xs text-muted">29</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="wrangler">
                      <label class="custom-control-label cz-filter-item-text" for="wrangler">Wrangler</label>
                    </div><span class="font-size-xs text-muted">115</span>
                  </li>
                </ul>
              </div>
              <!-- Filter by Size-->
              <div class="widget cz-filter mb-4 pb-4 border-bottom">
                <h3 class="widget-title">Size</h3>
                <div class="input-group-overlay input-group-sm mb-2">
                  <input class="cz-filter-search form-control form-control-sm appended-form-control" type="text" placeholder="Search">
                  <div class="input-group-append-overlay"><span class="input-group-text"><i class="czi-search"></i></span></div>
                </div>
                <ul class="widget-list cz-filter-list list-unstyled pt-1" style="max-height: 12rem;" data-simplebar data-simplebar-auto-hide="false">
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="size-xs">
                      <label class="custom-control-label cz-filter-item-text" for="size-xs">XS</label>
                    </div><span class="font-size-xs text-muted">34</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="size-s">
                      <label class="custom-control-label cz-filter-item-text" for="size-s">S</label>
                    </div><span class="font-size-xs text-muted">57</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="size-m">
                      <label class="custom-control-label cz-filter-item-text" for="size-m">M</label>
                    </div><span class="font-size-xs text-muted">198</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="size-l">
                      <label class="custom-control-label cz-filter-item-text" for="size-l">L</label>
                    </div><span class="font-size-xs text-muted">72</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="size-xl">
                      <label class="custom-control-label cz-filter-item-text" for="size-xl">XL</label>
                    </div><span class="font-size-xs text-muted">46</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="size-39">
                      <label class="custom-control-label cz-filter-item-text" for="size-39">39</label>
                    </div><span class="font-size-xs text-muted">112</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="size-40">
                      <label class="custom-control-label cz-filter-item-text" for="size-40">40</label>
                    </div><span class="font-size-xs text-muted">85</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="size-41">
                      <label class="custom-control-label cz-filter-item-text" for="size-40">41</label>
                    </div><span class="font-size-xs text-muted">210</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="size-42">
                      <label class="custom-control-label cz-filter-item-text" for="size-42">42</label>
                    </div><span class="font-size-xs text-muted">57</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="size-43">
                      <label class="custom-control-label cz-filter-item-text" for="size-43">43</label>
                    </div><span class="font-size-xs text-muted">30</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="size-44">
                      <label class="custom-control-label cz-filter-item-text" for="size-44">44</label>
                    </div><span class="font-size-xs text-muted">61</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="size-45">
                      <label class="custom-control-label cz-filter-item-text" for="size-45">45</label>
                    </div><span class="font-size-xs text-muted">23</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="size-46">
                      <label class="custom-control-label cz-filter-item-text" for="size-46">46</label>
                    </div><span class="font-size-xs text-muted">19</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="size-47">
                      <label class="custom-control-label cz-filter-item-text" for="size-47">47</label>
                    </div><span class="font-size-xs text-muted">15</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="size-48">
                      <label class="custom-control-label cz-filter-item-text" for="size-48">48</label>
                    </div><span class="font-size-xs text-muted">12</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="size-49">
                      <label class="custom-control-label cz-filter-item-text" for="size-49">49</label>
                    </div><span class="font-size-xs text-muted">8</span>
                  </li>
                  <li class="cz-filter-item d-flex justify-content-between align-items-center">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="size-50">
                      <label class="custom-control-label cz-filter-item-text" for="size-50">50</label>
                    </div><span class="font-size-xs text-muted">6</span>
                  </li>
                </ul>
              </div>
              <!-- Filter by Color-->
              <div class="widget">
                <h3 class="widget-title">Color</h3>
                <div class="d-flex flex-wrap">
                  <div class="custom-control custom-option text-center mb-2 mx-1" style="width: 4rem;">
                    <input class="custom-control-input" type="checkbox" id="color-blue-gray">
                    <label class="custom-option-label rounded-circle" for="color-blue-gray"><span class="custom-option-color rounded-circle" style="background-color: #b3c8db;"></span></label>
                    <label class="d-block font-size-xs text-muted mt-n1" for="color-blue-gray">Blue-gray</label>
                  </div>
                  <div class="custom-control custom-option text-center mb-2 mx-1" style="width: 4rem;">
                    <input class="custom-control-input" type="checkbox" id="color-burgundy">
                    <label class="custom-option-label rounded-circle" for="color-burgundy"><span class="custom-option-color rounded-circle" style="background-color: #ca7295;"></span></label>
                    <label class="d-block font-size-xs text-muted mt-n1" for="color-burgundy">Burgundy</label>
                  </div>
                  <div class="custom-control custom-option text-center mb-2 mx-1" style="width: 4rem;">
                    <input class="custom-control-input" type="checkbox" id="color-teal">
                    <label class="custom-option-label rounded-circle" for="color-teal"><span class="custom-option-color rounded-circle" style="background-color: #91c2c3;"></span></label>
                    <label class="d-block font-size-xs text-muted mt-n1" for="color-teal">Teal</label>
                  </div>
                  <div class="custom-control custom-option text-center mb-2 mx-1" style="width: 4rem;">
                    <input class="custom-control-input" type="checkbox" id="color-brown">
                    <label class="custom-option-label rounded-circle" for="color-brown"><span class="custom-option-color rounded-circle" style="background-color: #9a8480;"></span></label>
                    <label class="d-block font-size-xs text-muted mt-n1" for="color-brown">Brown</label>
                  </div>
                  <div class="custom-control custom-option text-center mb-2 mx-1" style="width: 4rem;">
                    <input class="custom-control-input" type="checkbox" id="color-coral-red">
                    <label class="custom-option-label rounded-circle" for="color-coral-red"><span class="custom-option-color rounded-circle" style="background-color: #ff7072;"></span></label>
                    <label class="d-block font-size-xs text-muted mt-n1" for="color-coral-red">Coral red</label>
                  </div>
                  <div class="custom-control custom-option text-center mb-2 mx-1" style="width: 4rem;">
                    <input class="custom-control-input" type="checkbox" id="color-navy">
                    <label class="custom-option-label rounded-circle" for="color-navy"><span class="custom-option-color rounded-circle" style="background-color: #696dc8;"></span></label>
                    <label class="d-block font-size-xs text-muted mt-n1" for="color-navy">Navy</label>
                  </div>
                  <div class="custom-control custom-option text-center mb-2 mx-1" style="width: 4rem;">
                    <input class="custom-control-input" type="checkbox" id="color-charcoal">
                    <label class="custom-option-label rounded-circle" for="color-charcoal"><span class="custom-option-color rounded-circle" style="background-color: #4e4d4d;"></span></label>
                    <label class="d-block font-size-xs text-muted mt-n1" for="color-charcoal">Charcoal</label>
                  </div>
                  <div class="custom-control custom-option text-center mb-2 mx-1" style="width: 4rem;">
                    <input class="custom-control-input" type="checkbox" id="color-sky-blue">
                    <label class="custom-option-label rounded-circle" for="color-sky-blue"><span class="custom-option-color rounded-circle" style="background-color: #8bcdf5;"></span></label>
                    <label class="d-block font-size-xs text-muted mt-n1" for="color-sky-blue">Sky blue</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </aside>
        <!-- Content  -->
        <section class="col-lg-8">
          <!-- Toolbar-->
          <div class="d-flex justify-content-center justify-content-sm-between align-items-center pt-2 pb-4 pb-sm-5">
            <div class="d-flex flex-wrap">
              <div class="form-inline flex-nowrap mr-3 mr-sm-4 pb-3">
                <label class="text-light opacity-75 text-nowrap mr-2 d-none d-sm-block" for="sorting">Sort by:</label>
                <select class="form-control custom-select" id="sorting">
                  <option>Popularity</option>
                  <option>Low - Hight Price</option>
                  <option>High - Low Price</option>
                  <option>Average Rating</option>
                  <option>A - Z Order</option>
                  <option>Z - A Order</option>
                </select><span class="font-size-sm text-light opacity-75 text-nowrap ml-2 d-none d-md-block">of 287 products</span>
              </div>
            </div>
            <div class="d-flex pb-3"><a class="nav-link-style nav-link-light mr-3" href="#"><i class="czi-arrow-left"></i></a><span class="font-size-md text-light">1 / 5</span><a class="nav-link-style nav-link-light ml-3" href="#"><i class="czi-arrow-right"></i></a></div>
            <div class="d-none d-sm-flex pb-3"><a class="btn btn-icon nav-link-style bg-light text-dark disabled opacity-100 mr-2" href="#"><i class="czi-view-grid"></i></a><a class="btn btn-icon nav-link-style nav-link-light" href="shop-list-ls.php"><i class="czi-view-list"></i></a></div>
          </div>
          <!-- Products grid-->
          <div class="row mx-n2">
            <!-- Product-->
            <div class="col-md-4 col-sm-6 px-2 mb-4">
              <div class="card product-card">
                <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.php"><img src="img/shop/catalog/01.jpg" alt="Product"></a>
                <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Sneakers &amp; Keds</a>
                  <h3 class="product-title font-size-sm"><a href="shop-single-v1.php">Women Colorblock Sneakers</a></h3>
                  <div class="d-flex justify-content-between">
                    <div class="product-price"><span class="text-accent">$154.<small>00</small></span></div>
                    <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                    </div>
                  </div>
                </div>
                <div class="card-body card-body-hidden">
                  <div class="text-center pb-2">
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="size1" id="s-75">
                      <label class="custom-option-label" for="s-75">7.5</label>
                    </div>
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="size1" id="s-80" checked>
                      <label class="custom-option-label" for="s-80">8</label>
                    </div>
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="size1" id="s-85">
                      <label class="custom-option-label" for="s-85">8.5</label>
                    </div>
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="size1" id="s-90">
                      <label class="custom-option-label" for="s-90">9</label>
                    </div>
                  </div>
                  <button class="btn btn-primary btn-sm btn-block mb-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart font-size-sm mr-1"></i>Add to Cart</button>
                  <div class="text-center"><a class="nav-link-style font-size-ms" href="#quick-view" data-toggle="modal"><i class="czi-eye align-middle mr-1"></i>Quick view</a></div>
                </div>
              </div>
              <hr class="d-sm-none">
            </div>
            <!-- Product-->
            <div class="col-md-4 col-sm-6 px-2 mb-4">
              <div class="card product-card"><span class="badge badge-danger badge-shadow">Sale</span>
                <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.php"><img src="img/shop/catalog/02.jpg" alt="Product"></a>
                <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Women’s T-shirt</a>
                  <h3 class="product-title font-size-sm"><a href="shop-single-v1.php">Cotton Lace Blouse</a></h3>
                  <div class="d-flex justify-content-between">
                    <div class="product-price"><span class="text-accent">$28.<small>50</small></span>
                      <del class="font-size-sm text-muted">38.<small>50</small></del>
                    </div>
                    <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i><i class="sr-star czi-star"></i>
                    </div>
                  </div>
                </div>
                <div class="card-body card-body-hidden">
                  <div class="text-center pb-2">
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="color1" id="white" checked>
                      <label class="custom-option-label rounded-circle" for="white"><span class="custom-option-color rounded-circle" style="background-color: #eaeaeb;"></span></label>
                    </div>
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="color1" id="blue">
                      <label class="custom-option-label rounded-circle" for="blue"><span class="custom-option-color rounded-circle" style="background-color: #d1dceb;"></span></label>
                    </div>
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="color1" id="yellow">
                      <label class="custom-option-label rounded-circle" for="yellow"><span class="custom-option-color rounded-circle" style="background-color: #f4e6a2;"></span></label>
                    </div>
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="color1" id="pink">
                      <label class="custom-option-label rounded-circle" for="pink"><span class="custom-option-color rounded-circle" style="background-color: #f3dcff;"></span></label>
                    </div>
                  </div>
                  <div class="d-flex mb-2">
                    <select class="custom-select custom-select-sm mr-2">
                      <option>XS</option>
                      <option>S</option>
                      <option>M</option>
                      <option>L</option>
                      <option>XL</option>
                    </select>
                    <button class="btn btn-primary btn-sm" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart font-size-sm mr-1"></i>Add to Cart</button>
                  </div>
                  <div class="text-center"><a class="nav-link-style font-size-ms" href="#quick-view" data-toggle="modal"><i class="czi-eye align-middle mr-1"></i>Quick view</a></div>
                </div>
              </div>
              <hr class="d-sm-none">
            </div>
            <!-- Product-->
            <div class="col-md-4 col-sm-6 px-2 mb-4">
              <div class="card product-card">
                <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.php"><img src="img/shop/catalog/03.jpg" alt="Product"></a>
                <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Women’s Shorts</a>
                  <h3 class="product-title font-size-sm"><a href="shop-single-v1.php">Mom High Waist Shorts</a></h3>
                  <div class="d-flex justify-content-between">
                    <div class="product-price"><span class="text-accent">$39.<small>50</small></span></div>
                    <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
                    </div>
                  </div>
                </div>
                <div class="card-body card-body-hidden">
                  <div class="text-center pb-2">
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="size2" id="xs">
                      <label class="custom-option-label" for="xs">XS</label>
                    </div>
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="size2" id="s" checked>
                      <label class="custom-option-label" for="s">S</label>
                    </div>
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="size2" id="m">
                      <label class="custom-option-label" for="m">M</label>
                    </div>
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="size2" id="l">
                      <label class="custom-option-label" for="l">L</label>
                    </div>
                  </div>
                  <button class="btn btn-primary btn-sm btn-block mb-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart font-size-sm mr-1"></i>Add to Cart</button>
                  <div class="text-center"><a class="nav-link-style font-size-ms" href="#quick-view" data-toggle="modal"><i class="czi-eye align-middle mr-1"></i>Quick view</a></div>
                </div>
              </div>
              <hr class="d-sm-none">
            </div>
            <!-- Product-->
            <div class="col-md-4 col-sm-6 px-2 mb-4">
              <div class="card product-card">
                <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.php"><img src="img/shop/catalog/04.jpg" alt="Product"></a>
                <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Sportswear</a>
                  <h3 class="product-title font-size-sm"><a href="shop-single-v1.php">Women Sports Jacket</a></h3>
                  <div class="d-flex justify-content-between">
                    <div class="product-price"><span class="text-accent">$68.<small>40</small></span></div>
                    <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                    </div>
                  </div>
                </div>
                <div class="card-body card-body-hidden">
                  <div class="text-center pb-2">
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="size3" id="xs2" checked>
                      <label class="custom-option-label" for="xs2">XS</label>
                    </div>
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="size3" id="s2">
                      <label class="custom-option-label" for="s2">S</label>
                    </div>
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="size3" id="m2">
                      <label class="custom-option-label" for="m2">M</label>
                    </div>
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="size3" id="l2">
                      <label class="custom-option-label" for="l2">L</label>
                    </div>
                  </div>
                  <button class="btn btn-primary btn-sm btn-block mb-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart font-size-sm mr-1"></i>Add to Cart</button>
                  <div class="text-center"><a class="nav-link-style font-size-ms" href="#quick-view" data-toggle="modal"><i class="czi-eye align-middle mr-1"></i>Quick view</a></div>
                </div>
              </div>
              <hr class="d-sm-none">
            </div>
            <!-- Product-->
            <div class="col-md-4 col-sm-6 px-2 mb-4">
              <div class="card product-card">
                <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.php"><img src="img/shop/catalog/05.jpg" alt="Product"></a>
                <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Men’s Sunglasses</a>
                  <h3 class="product-title font-size-sm"><a href="shop-single-v1.php">Polarized Sunglasses</a></h3>
                  <div class="d-flex justify-content-between">
                    <div class="product-price"><span class="text-muted font-size-sm">Out of stock</span></div>
                    <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                    </div>
                  </div>
                </div>
                <div class="card-body card-body-hidden"><a class="btn btn-secondary btn-sm btn-block mb-2" href="shop-single-v1.php">View details</a>
                  <div class="text-center"><a class="nav-link-style font-size-ms" href="#quick-view" data-toggle="modal"><i class="czi-eye align-middle mr-1"></i>Quick view</a></div>
                </div>
              </div>
              <hr class="d-sm-none">
            </div>
            <!-- Product-->
            <div class="col-md-4 col-sm-6 px-2 mb-4">
              <div class="card product-card">
                <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.php"><img src="img/shop/catalog/06.jpg" alt="Product"></a>
                <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Backpacks</a>
                  <h3 class="product-title font-size-sm"><a href="shop-single-v1.php">TH Jeans City Backpack</a></h3>
                  <div class="d-flex justify-content-between">
                    <div class="product-price"><span class="text-accent">$79.<small>50</small></span></div>
                    <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i><i class="sr-star czi-star"></i>
                    </div>
                  </div>
                </div>
                <div class="card-body card-body-hidden">
                  <div class="text-center pb-2">
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="color2" id="khaki" checked>
                      <label class="custom-option-label rounded-circle" for="khaki"><span class="custom-option-color rounded-circle" style="background-color: #97947c;"></span></label>
                    </div>
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="color2" id="jeans">
                      <label class="custom-option-label rounded-circle" for="jeans"><span class="custom-option-color rounded-circle" style="background-color: #99a8be;"></span></label>
                    </div>
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="color2" id="white2">
                      <label class="custom-option-label rounded-circle" for="white2"><span class="custom-option-color rounded-circle" style="background-color: #eaeaeb;"></span></label>
                    </div>
                  </div>
                  <button class="btn btn-primary btn-sm btn-block mb-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart font-size-sm mr-1"></i>Add to Cart</button>
                  <div class="text-center"><a class="nav-link-style font-size-ms" href="#quick-view" data-toggle="modal"><i class="czi-eye align-middle mr-1"></i>Quick view</a></div>
                </div>
              </div>
            </div>
          </div>
          <!-- Banner-->
          <div class="py-sm-2">
            <div class="d-sm-flex justify-content-between align-items-center bg-secondary overflow-hidden mb-4 rounded-lg">
              <div class="py-4 my-2 my-md-0 py-md-5 px-4 ml-md-3 text-center text-sm-left">
                <h4 class="font-size-lg font-weight-light mb-2">Converse All Star</h4>
                <h3 class="mb-4">Make Your Day Comfortable</h3><a class="btn btn-primary btn-shadow btn-sm" href="#">Shop Now</a>
              </div><img class="d-block ml-auto" src="img/shop/catalog/banner.jpg" alt="Shop Converse">
            </div>
          </div>
          <!-- Products grid-->
          <div class="row mx-n2">
            <!-- Product-->
            <div class="col-md-4 col-sm-6 px-2 mb-4">
              <div class="card product-card">
                <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.php"><img src="img/shop/catalog/07.jpg" alt="Product"></a>
                <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Women's Swimwear</a>
                  <h3 class="product-title font-size-sm"><a href="shop-single-v1.php">Two-Piece Bikini in Print</a></h3>
                  <div class="d-flex justify-content-between">
                    <div class="product-price"><span class="text-accent">$18.<small>99</small></span></div>
                    <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                    </div>
                  </div>
                </div>
                <div class="card-body card-body-hidden">
                  <div class="text-center pb-2">
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="size4" id="xs3" checked>
                      <label class="custom-option-label" for="xs3">XS</label>
                    </div>
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="size4" id="s3">
                      <label class="custom-option-label" for="s3">S</label>
                    </div>
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="size4" id="m3">
                      <label class="custom-option-label" for="m3">M</label>
                    </div>
                  </div>
                  <button class="btn btn-primary btn-sm btn-block mb-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart font-size-sm mr-1"></i>Add to Cart</button>
                  <div class="text-center"><a class="nav-link-style font-size-ms" href="#quick-view" data-toggle="modal"><i class="czi-eye align-middle mr-1"></i>Quick view</a></div>
                </div>
              </div>
              <hr class="d-sm-none">
            </div>
            <!-- Product-->
            <div class="col-md-4 col-sm-6 px-2 mb-4">
              <div class="card product-card">
                <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.php"><img src="img/shop/catalog/08.jpg" alt="Product"></a>
                <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Kid's Toys</a>
                  <h3 class="product-title font-size-sm"><a href="shop-single-v1.php">Soft Panda Teddy Bear</a></h3>
                  <div class="d-flex justify-content-between">
                    <div class="product-price"><span class="text-accent">$14.<small>99</small></span></div>
                    <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
                    </div>
                  </div>
                </div>
                <div class="card-body card-body-hidden">
                  <button class="btn btn-primary btn-sm btn-block mb-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart font-size-sm mr-1"></i>Add to Cart</button>
                  <div class="text-center"><a class="nav-link-style font-size-ms" href="#quick-view" data-toggle="modal"><i class="czi-eye align-middle mr-1"></i>Quick view</a></div>
                </div>
              </div>
              <hr class="d-sm-none">
            </div>
            <!-- Product-->
            <div class="col-md-4 col-sm-6 px-2 mb-4">
              <div class="card product-card">
                <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.php"><img src="img/shop/catalog/09.jpg" alt="Product"></a>
                <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Cosmetics</a>
                  <h3 class="product-title font-size-sm"><a href="shop-single-v1.php">Metallic Lipstick (Crimson)</a></h3>
                  <div class="d-flex justify-content-between">
                    <div class="product-price"><span class="text-accent">$12.<small>99</small></span></div>
                    <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                    </div>
                  </div>
                </div>
                <div class="card-body card-body-hidden">
                  <div class="text-center pb-2">
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="color2" id="crimson" checked>
                      <label class="custom-option-label rounded-circle" for="crimson"><span class="custom-option-color rounded-circle" style="background-color: #bd3c82;"></span></label>
                    </div>
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="color2" id="creamy">
                      <label class="custom-option-label rounded-circle" for="creamy"><span class="custom-option-color rounded-circle" style="background-color: #ebae81;"></span></label>
                    </div>
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="color2" id="palm">
                      <label class="custom-option-label rounded-circle" for="palm"><span class="custom-option-color rounded-circle" style="background-color: #ca8799;"></span></label>
                    </div>
                  </div>
                  <button class="btn btn-primary btn-sm btn-block mb-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart font-size-sm mr-1"></i>Add to Cart</button>
                  <div class="text-center"><a class="nav-link-style font-size-ms" href="#quick-view" data-toggle="modal"><i class="czi-eye align-middle mr-1"></i>Quick view</a></div>
                </div>
              </div>
              <hr class="d-sm-none">
            </div>
            <!-- Product-->
            <div class="col-md-4 col-sm-6 px-2 mb-4">
              <div class="card product-card">
                <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.php"><img src="img/shop/catalog/10.jpg" alt="Product"></a>
                <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Men’s Accessories</a>
                  <h3 class="product-title font-size-sm"><a href="shop-single-v1.php">5-Pack Multicolor Bracelets</a></h3>
                  <div class="d-flex justify-content-between">
                    <div class="product-price"><span class="text-accent">$7.<small>99</small></span></div>
                    <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
                    </div>
                  </div>
                </div>
                <div class="card-body card-body-hidden">
                  <button class="btn btn-primary btn-sm btn-block mb-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart font-size-sm mr-1"></i>Add to Cart</button>
                  <div class="text-center"><a class="nav-link-style font-size-ms" href="#quick-view" data-toggle="modal"><i class="czi-eye align-middle mr-1"></i>Quick view</a></div>
                </div>
              </div>
              <hr class="d-sm-none">
            </div>
            <!-- Product-->
            <div class="col-md-4 col-sm-6 px-2 mb-4">
              <div class="card product-card">
                <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.php"><img src="img/shop/catalog/11.jpg" alt="Product"></a>
                <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Men’s Sandals</a>
                  <h3 class="product-title font-size-sm"><a href="shop-single-v1.php">Soft Footbed Sandals</a></h3>
                  <div class="d-flex justify-content-between">
                    <div class="product-price"><span class="text-accent">$99.<small>50</small></span></div>
                    <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                    </div>
                  </div>
                </div>
                <div class="card-body card-body-hidden">
                  <div class="text-center pb-2">
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="color1" id="blue2" checked>
                      <label class="custom-option-label rounded-circle" for="blue2"><span class="custom-option-color rounded-circle" style="background-color: #879fb3;"></span></label>
                    </div>
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="color1" id="brown">
                      <label class="custom-option-label rounded-circle" for="brown"><span class="custom-option-color rounded-circle" style="background-color: #9c6d4a;"></span></label>
                    </div>
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="color1" id="black">
                      <label class="custom-option-label rounded-circle" for="black"><span class="custom-option-color rounded-circle" style="background-color: #333333;"></span></label>
                    </div>
                  </div>
                  <div class="d-flex mb-2">
                    <select class="custom-select custom-select-sm mr-2">
                      <option>9.5</option>
                      <option>10</option>
                      <option>10.5</option>
                      <option>11</option>
                      <option>11.5</option>
                    </select>
                    <button class="btn btn-primary btn-sm" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart font-size-sm mr-1"></i>Add to Cart</button>
                  </div>
                  <div class="text-center"><a class="nav-link-style font-size-ms" href="#quick-view" data-toggle="modal"><i class="czi-eye align-middle mr-1"></i>Quick view</a></div>
                </div>
              </div>
              <hr class="d-sm-none">
            </div>
            <!-- Product-->
            <div class="col-md-4 col-sm-6 px-2 mb-4">
              <div class="card product-card">
                <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.php"><img src="img/shop/catalog/12.jpg" alt="Product"></a>
                <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Men’s Hats</a>
                  <h3 class="product-title font-size-sm"><a href="shop-single-v1.php">3-Color Sun Stash Hat</a></h3>
                  <div class="d-flex justify-content-between">
                    <div class="product-price"><span class="text-accent">$25.<small>99</small></span></div>
                    <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
                    </div>
                  </div>
                </div>
                <div class="card-body card-body-hidden">
                  <div class="text-center pb-2">
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="size5" id="s4" checked>
                      <label class="custom-option-label" for="s4">S</label>
                    </div>
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="size5" id="m4">
                      <label class="custom-option-label" for="m4">M</label>
                    </div>
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="size5" id="l4">
                      <label class="custom-option-label" for="l4">L</label>
                    </div>
                  </div>
                  <button class="btn btn-primary btn-sm btn-block mb-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart font-size-sm mr-1"></i>Add to Cart</button>
                  <div class="text-center"><a class="nav-link-style font-size-ms" href="#quick-view" data-toggle="modal"><i class="czi-eye align-middle mr-1"></i>Quick view</a></div>
                </div>
              </div>
              <hr class="d-sm-none">
            </div>
            <!-- Product-->
            <div class="col-md-4 col-sm-6 px-2 mb-4">
              <div class="card product-card"><span class="badge badge-danger badge-shadow">Sale</span>
                <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.php"><img src="img/shop/catalog/13.jpg" alt="Product"></a>
                <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Men’s T-shirts</a>
                  <h3 class="product-title font-size-sm"><a href="shop-single-v1.php">Cotton Polo Regular Fit</a></h3>
                  <div class="d-flex justify-content-between">
                    <div class="product-price"><span class="text-accent">$11.<small>50</small></span>
                      <del class="font-size-sm text-muted">$13.<small>50</small></del>
                    </div>
                    <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i><i class="sr-star czi-star"></i>
                    </div>
                  </div>
                </div>
                <div class="card-body card-body-hidden">
                  <div class="text-center pb-2">
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="size6" id="s5">
                      <label class="custom-option-label" for="s5">S</label>
                    </div>
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="size6" id="m5">
                      <label class="custom-option-label" for="m5">M</label>
                    </div>
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="size6" id="l5" checked>
                      <label class="custom-option-label" for="l5">L</label>
                    </div>
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="size6" id="xl5">
                      <label class="custom-option-label" for="xl5">XL</label>
                    </div>
                  </div>
                  <button class="btn btn-primary btn-sm btn-block mb-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart font-size-sm mr-1"></i>Add to Cart</button>
                  <div class="text-center"><a class="nav-link-style font-size-ms" href="#quick-view" data-toggle="modal"><i class="czi-eye align-middle mr-1"></i>Quick view</a></div>
                </div>
              </div>
              <hr class="d-sm-none">
            </div>
            <!-- Product-->
            <div class="col-md-4 col-sm-6 px-2 mb-4">
              <div class="card product-card">
                <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.php"><img src="img/shop/catalog/14.jpg" alt="Product"></a>
                <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Men’s Jeans</a>
                  <h3 class="product-title font-size-sm"><a href="shop-single-v1.php">Slim Taper Fit Jeans</a></h3>
                  <div class="d-flex justify-content-between">
                    <div class="product-price"><span class="text-accent">$58.<small>99</small></span></div>
                    <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                    </div>
                  </div>
                </div>
                <div class="card-body card-body-hidden">
                  <div class="text-center pb-2">
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="size7" id="s6">
                      <label class="custom-option-label" for="s6">S</label>
                    </div>
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="size7" id="m6">
                      <label class="custom-option-label" for="m6">M</label>
                    </div>
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="size7" id="l6" checked>
                      <label class="custom-option-label" for="l6">L</label>
                    </div>
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="size7" id="xl6">
                      <label class="custom-option-label" for="xl6">XL</label>
                    </div>
                  </div>
                  <button class="btn btn-primary btn-sm btn-block mb-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart font-size-sm mr-1"></i>Add to Cart</button>
                  <div class="text-center"><a class="nav-link-style font-size-ms" href="#quick-view" data-toggle="modal"><i class="czi-eye align-middle mr-1"></i>Quick view</a></div>
                </div>
              </div>
              <hr class="d-sm-none">
            </div>
            <!-- Product-->
            <div class="col-md-4 col-sm-6 px-2 mb-4">
              <div class="card product-card">
                <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.php"><img src="img/shop/catalog/15.jpg" alt="Product"></a>
                <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Men’s Waistcoats</a>
                  <h3 class="product-title font-size-sm"><a href="shop-single-v1.php">Single-breasted Trenchcoat</a></h3>
                  <div class="d-flex justify-content-between">
                    <div class="product-price"><span class="text-accent">$79.<small>99</small></span></div>
                    <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                    </div>
                  </div>
                </div>
                <div class="card-body card-body-hidden">
                  <div class="text-center pb-2">
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="size8" id="m7">
                      <label class="custom-option-label" for="m7">M</label>
                    </div>
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="size8" id="l7" checked>
                      <label class="custom-option-label" for="l7">L</label>
                    </div>
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="size8" id="xl7">
                      <label class="custom-option-label" for="xl7">XL</label>
                    </div>
                  </div>
                  <button class="btn btn-primary btn-sm btn-block mb-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart font-size-sm mr-1"></i>Add to Cart</button>
                  <div class="text-center"><a class="nav-link-style font-size-ms" href="#quick-view" data-toggle="modal"><i class="czi-eye align-middle mr-1"></i>Quick view</a></div>
                </div>
              </div>
            </div>
          </div>
          <hr class="my-3">
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
      </div>
    </div>
    <!-- Toast: Added to Cart-->
    <div class="toast-container toast-bottom-center">
      <div class="toast mb-3" id="cart-toast" data-delay="5000" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header bg-success text-white"><i class="czi-check-circle mr-2"></i>
          <h6 class="font-size-sm text-white mb-0 mr-auto">Added to cart!</h6>
          <button class="close text-white ml-2 mb-1" type="button" data-dismiss="toast" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="toast-body">This item has been added to your cart.</div>
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
      <div class="d-table table-fixed w-100"><a class="d-table-cell cz-handheld-toolbar-item" href="#shop-sidebar" data-toggle="sidebar"><span class="cz-handheld-toolbar-icon"><i class="czi-filter-alt"></i></span><span class="cz-handheld-toolbar-label">Filters</span></a><a class="d-table-cell cz-handheld-toolbar-item" href="account-wishlist.php"><span class="cz-handheld-toolbar-icon"><i class="czi-heart"></i></span><span class="cz-handheld-toolbar-label">Wishlist</span></a><a class="d-table-cell cz-handheld-toolbar-item" href="#navbarCollapse" data-toggle="collapse" onclick="window.scrollTo(0, 0)"><span class="cz-handheld-toolbar-icon"><i class="czi-menu"></i></span><span class="cz-handheld-toolbar-label">Menu</span></a><a class="d-table-cell cz-handheld-toolbar-item" href="shop-cart.php"><span class="cz-handheld-toolbar-icon"><i class="czi-cart"></i><span class="badge badge-primary badge-pill ml-1">4</span></span><span class="cz-handheld-toolbar-label">$265.00</span></a>
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
    <script src="vendor/nouislider/distribute/nouislider.min.js"></script>
    <script src="vendor/drift-zoom/dist/Drift.min.js"></script>
    <!-- Main theme script-->
    <script src="js/theme.min.js"></script>
  </body>

<!-- Mirrored from demo.createx.studio/cartzilla/shop-grid-ls.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Jul 2020 09:28:32 GMT -->
</html>