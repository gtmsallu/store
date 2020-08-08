<?php
session_start();




include('components/header.php');
?>
<!-- Body-->

<body class="toolbar-enabled">
    <!-- Google Tag Manager (noscript)-->
    <noscript>
        <iframe src="http://www.googletagmanager.com/ns.php?id=GTM-WKV3GT5" height="0" width="0"
            style="display: none; visibility: hidden;"></iframe>
    </noscript>
    <!-- Sign in / sign up modal-->
    <?php  include('components/signinupmodel.php');?>

    <!-- Navbar-->
    <!-- Quick View Modal-->
    <?php  include('components/quickviewmodel.php');?>
    <!-- Navbar 3 Level (Light)-->
    <header class="box-shadow-sm">
        <!-- Topbar-->
        <?php 
         include('components/topbar.php');
         include('components/navbar.php');?>

       
    </header>
    <!-- Page title-->
    <!-- Page Content-->
    <!-- Hero slider-->
    <section class="cz-carousel cz-controls-lg">
        <div class="cz-carousel-inner"
            data-carousel-options="{&quot;mode&quot;: &quot;gallery&quot;, &quot;responsive&quot;: {&quot;0&quot;:{&quot;nav&quot;:true, &quot;controls&quot;: false},&quot;992&quot;:{&quot;nav&quot;:false, &quot;controls&quot;: true}}}">
            <!-- Item-->
            <div class="px-lg-5" style="background-color: #3aafd2;">
                <div class="d-lg-flex justify-content-between align-items-center pl-lg-4"><img
                        class="d-block order-lg-2 mr-lg-n5 flex-shrink-0" src="img/home/hero-slider/01.jpg"
                        alt="Summer Collection">
                    <div class="position-relative mx-auto mr-lg-n5 py-5 px-4 mb-lg-5 order-lg-1"
                        style="max-width: 42rem; z-index: 10;">
                        <div class="pb-lg-5 mb-lg-5 text-center text-lg-left text-lg-nowrap">
                            <h2 class="text-light font-weight-light pb-1 from-left">Has just arrived!</h2>
                            <h1 class="text-light display-4 from-left delay-1">Huge Summer Collection</h1>
                            <p class="font-size-lg text-light pb-3 from-left delay-2">Swimwear, Tops, Shorts, Sunglasses
                                &amp; much more...</p><a class="btn btn-primary scale-up delay-4"
                                href="shop-grid-ls.php">Shop Now<i class="czi-arrow-right ml-2 mr-n1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Item-->
            <div class="px-lg-5" style="background-color: #f5b1b0;">
                <div class="d-lg-flex justify-content-between align-items-center pl-lg-4"><img
                        class="d-block order-lg-2 mr-lg-n5 flex-shrink-0" src="img/home/hero-slider/02.jpg"
                        alt="Women Sportswear">
                    <div class="position-relative mx-auto mr-lg-n5 py-5 px-4 mb-lg-5 order-lg-1"
                        style="max-width: 42rem; z-index: 10;">
                        <div class="pb-lg-5 mb-lg-5 text-center text-lg-left text-lg-nowrap">
                            <h2 class="text-light font-weight-light pb-1 from-bottom">Hurry up! Limited time offer.</h2>
                            <h1 class="text-light display-4 from-bottom delay-1">Women Sportswear Sale</h1>
                            <p class="font-size-lg text-light pb-3 from-bottom delay-2">Sneakers, Keds, Sweatshirts,
                                Hoodies &amp; much more...</p><a class="btn btn-primary scale-up delay-4"
                                href="shop-grid-ls.php">Shop Now<i class="czi-arrow-right ml-2 mr-n1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Item-->
            <div class="px-lg-5" style="background-color: #eba170;">
                <div class="d-lg-flex justify-content-between align-items-center pl-lg-4"><img
                        class="d-block order-lg-2 mr-lg-n5 flex-shrink-0" src="img/home/hero-slider/03.jpg"
                        alt="Men Accessories">
                    <div class="position-relative mx-auto mr-lg-n5 py-5 px-4 mb-lg-5 order-lg-1"
                        style="max-width: 42rem; z-index: 10;">
                        <div class="pb-lg-5 mb-lg-5 text-center text-lg-left text-lg-nowrap">
                            <h2 class="text-light font-weight-light pb-1 from-top">Complete your look with</h2>
                            <h1 class="text-light display-4 from-top delay-1">New Men's Accessories</h1>
                            <p class="font-size-lg text-light pb-3 from-top delay-2">Hats &amp; Caps, Sunglasses, Bags
                                &amp; much more...</p><a class="btn btn-primary scale-up delay-4"
                                href="shop-grid-ls.php">Shop Now<i class="czi-arrow-right ml-2 mr-n1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Popular categories-->
    <section class="container position-relative pt-3 pt-lg-0 pb-5 mt-lg-n10" style="z-index: 10;">
        <div class="row">
            <div class="col-xl-8 col-lg-9">
                <div class="card border-0 box-shadow-lg">
                    <div class="card-body px-3 pt-grid-gutter pb-0">
                        <div class="row no-gutters pl-1">
                            <div class="col-sm-4 px-2 mb-grid-gutter"><a
                                    class="d-block text-center text-decoration-none mr-1" href="shop-grid-ls.php"><img
                                        class="d-block rounded mb-3" src="img/home/categories/cat-sm01.jpg" alt="Men">
                                    <h3 class="font-size-base pt-1 mb-0">Men</h3>
                                </a></div>
                            <div class="col-sm-4 px-2 mb-grid-gutter"><a
                                    class="d-block text-center text-decoration-none mr-1" href="shop-grid-ls.php"><img
                                        class="d-block rounded mb-3" src="img/home/categories/cat-sm02.jpg" alt="Women">
                                    <h3 class="font-size-base pt-1 mb-0">Women</h3>
                                </a></div>
                            <div class="col-sm-4 px-2 mb-grid-gutter"><a
                                    class="d-block text-center text-decoration-none mr-1" href="shop-grid-ls.php"><img
                                        class="d-block rounded mb-3" src="img/home/categories/cat-sm03.jpg" alt="Kids">
                                    <h3 class="font-size-base pt-1 mb-0">Kids</h3>
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Products grid (Trending products)-->
    <section class="container pt-md-3 pb-5 mb-md-3">
        <h2 class="h3 text-center">Trending products</h2>
        <div class="row pt-4 mx-n2">
            <!-- Product-->
            <?php 
                include('controller/dbConnection.php');
                $type="customer";
                $productQuery="SELECT * FROM products WHERE p_type='$type'";
                $result=mysqli_query($con, $productQuery);
                while ($data=mysqli_fetch_assoc($result)) {
              ?>
            <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
                <div class="card product-card">
                    <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left"
                        title="Add to wishlist"><i class="czi-heart"></i></button><a
                        class="card-img-top d-block overflow-hidden" href="shop-single-v1.php"><img
                            src="adminpanel/<?php echo $data['main_img'] ?>" alt="Product"></a>
                    <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Sneakers
                            &amp; Keds</a>
                        <h3 class="product-title font-size-sm"><a href="shop-single-v1.php"><?php echo $data['p_name']; ?></a></h3>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent"><?php echo $data['p_price']; ?>.<small>00</small></span></div>
                            <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i
                                    class="sr-star czi-star-filled active"></i><i
                                    class="sr-star czi-star-filled active"></i><i
                                    class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
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
                        <button class="btn btn-primary btn-sm btn-block mb-2" type="button" data-toggle="toast"
                            data-target="#cart-toast"><i class="czi-cart font-size-sm mr-1"></i>Add to Cart</button>
                        <div class="text-center"><a class="nav-link-style font-size-ms" href="#quick-view"
                                data-toggle="modal"><i class="czi-eye align-middle mr-1"></i>Quick view</a></div>
                    </div>
                </div>
                <hr class="d-sm-none">
            </div>
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
            <?php 
                }
             ?>
            <!-- Product-->     
            <!-- Product-->
            <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
                <div class="card product-card">
                    <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left"
                        title="Add to wishlist"><i class="czi-heart"></i></button><a
                        class="card-img-top d-block overflow-hidden" href="shop-single-v1.php"><img
                            src="img/shop/catalog/05.jpg" alt="Product"></a>
                    <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Men’s
                            Sunglasses</a>
                        <h3 class="product-title font-size-sm"><a href="shop-single-v1.php">Polarized Sunglasses</a>
                        </h3>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-muted font-size-sm">Out of stock</span></div>
                            <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i
                                    class="sr-star czi-star-filled active"></i><i
                                    class="sr-star czi-star-filled active"></i><i
                                    class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-body card-body-hidden"><a class="btn btn-secondary btn-sm btn-block mb-2"
                            href="shop-single-v1.php">View details</a>
                        <div class="text-center"><a class="nav-link-style font-size-ms" href="#quick-view"
                                data-toggle="modal"><i class="czi-eye align-middle mr-1"></i>Quick view</a></div>
                    </div>
                </div>
                <hr class="d-sm-none">
            </div>
           
           
        <div class="text-center pt-3"><a class="btn btn-outline-accent" href="shop-grid-ls.php">More products<i
                    class="czi-arrow-right ml-1"></i></a></div>
    </section>
    <!-- Banners-->
    <section class="container pb-4 mb-md-3">
        <div class="row">
            <div class="col-md-8 mb-4">
                <div
                    class="d-sm-flex justify-content-between align-items-center bg-secondary overflow-hidden rounded-lg">
                    <div class="py-4 my-2 my-md-0 py-md-5 px-4 ml-md-3 text-center text-sm-left">
                        <h4 class="font-size-lg font-weight-light mb-2">Hurry up! Limited time offer</h4>
                        <h3 class="mb-4">Converse All Star on Sale</h3><a class="btn btn-primary btn-shadow btn-sm"
                            href="#">Shop Now</a>
                    </div><img class="d-block ml-auto" src="img/shop/catalog/banner.jpg" alt="Shop Converse">
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="d-flex flex-column h-100 justify-content-center bg-size-cover bg-position-center rounded-lg"
                    style="background-image: url(img/blog/banner-bg.jpg);">
                    <div class="py-4 my-2 px-4 text-center">
                        <div class="py-1">
                            <h5 class="mb-2">Your Add Banner Here</h5>
                            <p class="font-size-sm text-muted">Hurry up to reserve your spot</p><a
                                class="btn btn-primary btn-shadow btn-sm" href="#">Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured category (Hoodie)-->
    <section class="container mb-4 pb-3 pb-sm-0 mb-sm-5">
        <div class="row">
            <!-- Banner with controls-->
            <div class="col-md-5">
                <div class="d-flex flex-column h-100 overflow-hidden rounded-lg" style="background-color: #e2e9ef;">
                    <div class="d-flex justify-content-between px-grid-gutter py-grid-gutter">
                        <div>
                            <h3 class="mb-1">Hoodie day</h3><a class="font-size-md" href="shop-grid-ls.php">Shop
                                hoodies<i class="czi-arrow-right font-size-xs align-middle ml-1"></i></a>
                        </div>
                        <div class="cz-custom-controls" id="hoodie-day">
                            <button type="button"><i class="czi-arrow-left"></i></button>
                            <button type="button"><i class="czi-arrow-right"></i></button>
                        </div>
                    </div><a class="d-none d-md-block mt-auto" href="shop-grid-ls.php"><img class="d-block w-100"
                            src="img/home/categories/cat-lg04.jpg" alt="For Women"></a>
                </div>
            </div>
            <!-- Product grid (carousel)-->
            <div class="col-md-7 pt-4 pt-md-0">
                <div class="cz-carousel">
                    <div class="cz-carousel-inner"
                        data-carousel-options="{&quot;nav&quot;: false, &quot;controlsContainer&quot;: &quot;#hoodie-day&quot;}">
                        <!-- Carousel item-->
                        <div>
                            <div class="row mx-n2">
                                <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                                    <div class="card product-card card-static">
                                        <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip"
                                            data-placement="left" title="Add to wishlist"><i
                                                class="czi-heart"></i></button><a
                                            class="card-img-top d-block overflow-hidden" href="shop-single-v1.php"><img
                                                src="img/shop/catalog/20.jpg" alt="Product"></a>
                                        <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1"
                                                href="#">Hoodies &amp; Sweatshirts</a>
                                            <h3 class="product-title font-size-sm"><a
                                                    href="shop-single-v1.php">Block-colored Hooded Top</a></h3>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span
                                                        class="text-accent">$24.<small>99</small></span></div>
                                                <div class="star-rating"><i
                                                        class="sr-star czi-star-filled active"></i><i
                                                        class="sr-star czi-star-filled active"></i><i
                                                        class="sr-star czi-star-filled active"></i><i
                                                        class="sr-star czi-star-filled active"></i><i
                                                        class="sr-star czi-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                                    <div class="card product-card card-static">
                                        <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip"
                                            data-placement="left" title="Add to wishlist"><i
                                                class="czi-heart"></i></button><a
                                            class="card-img-top d-block overflow-hidden" href="shop-single-v1.php"><img
                                                src="img/shop/catalog/21.jpg" alt="Product"></a>
                                        <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1"
                                                href="#">Hoodies &amp; Sweatshirts</a>
                                            <h3 class="product-title font-size-sm"><a
                                                    href="shop-single-v1.php">Block-colored Hooded Top</a></h3>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span
                                                        class="text-accent">$26.<small>99</small></span></div>
                                                <div class="star-rating"><i
                                                        class="sr-star czi-star-filled active"></i><i
                                                        class="sr-star czi-star-filled active"></i><i
                                                        class="sr-star czi-star-filled active"></i><i
                                                        class="sr-star czi-star-filled active"></i><i
                                                        class="sr-star czi-star-filled active"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                                    <div class="card product-card card-static"><span
                                            class="badge badge-danger badge-shadow">Sale</span>
                                        <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip"
                                            data-placement="left" title="Add to wishlist"><i
                                                class="czi-heart"></i></button><a
                                            class="card-img-top d-block overflow-hidden" href="shop-single-v1.php"><img
                                                src="img/shop/catalog/23.jpg" alt="Product"></a>
                                        <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1"
                                                href="#">Hoodies &amp; Sweatshirts</a>
                                            <h3 class="product-title font-size-sm"><a
                                                    href="shop-single-v1.php">Block-colored Hooded Top</a></h3>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span
                                                        class="text-accent">$17.<small>99</small></span>
                                                    <del class="font-size-sm text-muted">24.<small>99</small></del>
                                                </div>
                                                <div class="star-rating"><i
                                                        class="sr-star czi-star-filled active"></i><i
                                                        class="sr-star czi-star-filled active"></i><i
                                                        class="sr-star czi-star-filled active"></i><i
                                                        class="sr-star czi-star"></i><i class="sr-star czi-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                                    <div class="card product-card card-static">
                                        <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip"
                                            data-placement="left" title="Add to wishlist"><i
                                                class="czi-heart"></i></button><a
                                            class="card-img-top d-block overflow-hidden" href="shop-single-v1.php"><img
                                                src="img/shop/catalog/51.jpg" alt="Product"></a>
                                        <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1"
                                                href="#">Hoodies &amp; Sweatshirts</a>
                                            <h3 class="product-title font-size-sm"><a href="shop-single-v1.php">Mono
                                                    Color Hooded Top</a></h3>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span
                                                        class="text-accent">$21.<small>99</small></span></div>
                                                <div class="star-rating"><i
                                                        class="sr-star czi-star-filled active"></i><i
                                                        class="sr-star czi-star-filled active"></i><i
                                                        class="sr-star czi-star-filled active"></i><i
                                                        class="sr-star czi-star-filled active"></i><i
                                                        class="sr-star czi-star-filled active"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                                    <div class="card product-card card-static">
                                        <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip"
                                            data-placement="left" title="Add to wishlist"><i
                                                class="czi-heart"></i></button><a
                                            class="card-img-top d-block overflow-hidden" href="shop-single-v1.php"><img
                                                src="img/shop/catalog/24.jpg" alt="Product"></a>
                                        <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1"
                                                href="#">Hoodies &amp; Sweatshirts</a>
                                            <h3 class="product-title font-size-sm"><a
                                                    href="shop-single-v1.php">Block-colored Hooded Top</a></h3>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span
                                                        class="text-accent">$24.<small>99</small></span></div>
                                                <div class="star-rating"><i
                                                        class="sr-star czi-star-filled active"></i><i
                                                        class="sr-star czi-star-filled active"></i><i
                                                        class="sr-star czi-star-filled active"></i><i
                                                        class="sr-star czi-star-filled active"></i><i
                                                        class="sr-star czi-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                                    <div class="card product-card card-static">
                                        <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip"
                                            data-placement="left" title="Add to wishlist"><i
                                                class="czi-heart"></i></button><a
                                            class="card-img-top d-block overflow-hidden" href="shop-single-v1.php"><img
                                                src="img/shop/catalog/54.jpg" alt="Product"></a>
                                        <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1"
                                                href="#">Hoodies &amp; Sweatshirts</a>
                                            <h3 class="product-title font-size-sm"><a href="shop-single-v1.php">Mono
                                                    Color Hooded Top</a></h3>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span
                                                        class="text-accent">$21.<small>99</small></span></div>
                                                <div class="star-rating"><i
                                                        class="sr-star czi-star-filled active"></i><i
                                                        class="sr-star czi-star-filled active"></i><i
                                                        class="sr-star czi-star-filled active"></i><i
                                                        class="sr-star czi-star-filled active"></i><i
                                                        class="sr-star czi-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Carousel item-->
                        <div>
                            <div class="row mx-n2">
                                <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                                    <div class="card product-card card-static">
                                        <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip"
                                            data-placement="left" title="Add to wishlist"><i
                                                class="czi-heart"></i></button><a
                                            class="card-img-top d-block overflow-hidden" href="shop-single-v1.php"><img
                                                src="img/shop/catalog/53.jpg" alt="Product"></a>
                                        <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1"
                                                href="#">Hoodies &amp; Sweatshirts</a>
                                            <h3 class="product-title font-size-sm"><a href="shop-single-v1.php">Mono
                                                    Color Hooded Top</a></h3>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span
                                                        class="text-accent">$21.<small>99</small></span></div>
                                                <div class="star-rating"><i
                                                        class="sr-star czi-star-filled active"></i><i
                                                        class="sr-star czi-star-filled active"></i><i
                                                        class="sr-star czi-star-filled active"></i><i
                                                        class="sr-star czi-star-filled active"></i><i
                                                        class="sr-star czi-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                                    <div class="card product-card card-static">
                                        <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip"
                                            data-placement="left" title="Add to wishlist"><i
                                                class="czi-heart"></i></button><a
                                            class="card-img-top d-block overflow-hidden" href="shop-single-v1.php"><img
                                                src="img/shop/catalog/52.jpg" alt="Product"></a>
                                        <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1"
                                                href="#">Hoodies &amp; Sweatshirts</a>
                                            <h3 class="product-title font-size-sm"><a href="shop-single-v1.php">Printed
                                                    Hooded Top</a></h3>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span
                                                        class="text-accent">$25.<small>99</small></span></div>
                                                <div class="star-rating"><i
                                                        class="sr-star czi-star-filled active"></i><i
                                                        class="sr-star czi-star-filled active"></i><i
                                                        class="sr-star czi-star-filled active"></i><i
                                                        class="sr-star czi-star-filled active"></i><i
                                                        class="sr-star czi-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                                    <div class="card product-card card-static">
                                        <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip"
                                            data-placement="left" title="Add to wishlist"><i
                                                class="czi-heart"></i></button><a
                                            class="card-img-top d-block overflow-hidden" href="shop-single-v1.php"><img
                                                src="img/shop/catalog/22.jpg" alt="Product"></a>
                                        <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1"
                                                href="#">Hoodies &amp; Sweatshirts</a>
                                            <h3 class="product-title font-size-sm"><a
                                                    href="shop-single-v1.php">Block-colored Hooded Top</a></h3>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span
                                                        class="text-accent">$24.<small>99</small></span></div>
                                                <div class="star-rating"><i
                                                        class="sr-star czi-star-filled active"></i><i
                                                        class="sr-star czi-star-filled active"></i><i
                                                        class="sr-star czi-star-filled active"></i><i
                                                        class="sr-star czi-star-filled active"></i><i
                                                        class="sr-star czi-star-filled active"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                                    <div class="card product-card card-static">
                                        <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip"
                                            data-placement="left" title="Add to wishlist"><i
                                                class="czi-heart"></i></button><a
                                            class="card-img-top d-block overflow-hidden" href="shop-single-v1.php"><img
                                                src="img/shop/catalog/56.jpg" alt="Product"></a>
                                        <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1"
                                                href="#">Hoodies &amp; Sweatshirts</a>
                                            <h3 class="product-title font-size-sm"><a href="shop-single-v1.php">Printed
                                                    Hooded Top</a></h3>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span
                                                        class="text-accent">$25.<small>99</small></span></div>
                                                <div class="star-rating"><i
                                                        class="sr-star czi-star-filled active"></i><i
                                                        class="sr-star czi-star-filled active"></i><i
                                                        class="sr-star czi-star-filled active"></i><i
                                                        class="sr-star czi-star-filled active"></i><i
                                                        class="sr-star czi-star-filled active"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                                    <div class="card product-card card-static">
                                        <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip"
                                            data-placement="left" title="Add to wishlist"><i
                                                class="czi-heart"></i></button><a
                                            class="card-img-top d-block overflow-hidden" href="shop-single-v1.php"><img
                                                src="img/shop/catalog/55.jpg" alt="Product"></a>
                                        <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1"
                                                href="#">Hoodies &amp; Sweatshirts</a>
                                            <h3 class="product-title font-size-sm"><a
                                                    href="shop-single-v1.php">Block-colored Hooded Top</a></h3>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span
                                                        class="text-accent">$24.<small>99</small></span></div>
                                                <div class="star-rating"><i
                                                        class="sr-star czi-star-filled active"></i><i
                                                        class="sr-star czi-star-filled active"></i><i
                                                        class="sr-star czi-star-filled active"></i><i
                                                        class="sr-star czi-star-filled active"></i><i
                                                        class="sr-star czi-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                                    <div class="card product-card card-static">
                                        <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip"
                                            data-placement="left" title="Add to wishlist"><i
                                                class="czi-heart"></i></button><a
                                            class="card-img-top d-block overflow-hidden" href="shop-single-v1.php"><img
                                                src="img/shop/catalog/57.jpg" alt="Product"></a>
                                        <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1"
                                                href="#">Hoodies &amp; Sweatshirts</a>
                                            <h3 class="product-title font-size-sm"><a
                                                    href="shop-single-v1.php">Block-colored Hooded Top</a></h3>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span
                                                        class="text-accent">$23.<small>99</small></span></div>
                                                <div class="star-rating"><i
                                                        class="sr-star czi-star-filled active"></i><i
                                                        class="sr-star czi-star-filled active"></i><i
                                                        class="sr-star czi-star-filled active"></i><i
                                                        class="sr-star czi-star"></i><i class="sr-star czi-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop by brand-->
    <section class="container py-lg-4 mb-4">
        <h2 class="h3 text-center pb-4">Shop by brand</h2>
        <div class="row">
            <div class="col-md-3 col-sm-4 col-6"><a
                    class="d-block bg-white box-shadow-sm rounded-lg py-3 py-sm-4 mb-grid-gutter" href="#"><img
                        class="d-block mx-auto" src="img/shop/brands/01.png" style="width: 150px;" alt="Brand"></a>
            </div>
            <div class="col-md-3 col-sm-4 col-6"><a
                    class="d-block bg-white box-shadow-sm rounded-lg py-3 py-sm-4 mb-grid-gutter" href="#"><img
                        class="d-block mx-auto" src="img/shop/brands/02.png" style="width: 150px;" alt="Brand"></a>
            </div>
            <div class="col-md-3 col-sm-4 col-6"><a
                    class="d-block bg-white box-shadow-sm rounded-lg py-3 py-sm-4 mb-grid-gutter" href="#"><img
                        class="d-block mx-auto" src="img/shop/brands/03.png" style="width: 150px;" alt="Brand"></a>
            </div>
            <div class="col-md-3 col-sm-4 col-6"><a
                    class="d-block bg-white box-shadow-sm rounded-lg py-3 py-sm-4 mb-grid-gutter" href="#"><img
                        class="d-block mx-auto" src="img/shop/brands/04.png" style="width: 150px;" alt="Brand"></a>
            </div>
            <div class="col-md-3 col-sm-4 col-6"><a
                    class="d-block bg-white box-shadow-sm rounded-lg py-3 py-sm-4 mb-grid-gutter" href="#"><img
                        class="d-block mx-auto" src="img/shop/brands/05.png" style="width: 150px;" alt="Brand"></a>
            </div>
            <div class="col-md-3 col-sm-4 col-6"><a
                    class="d-block bg-white box-shadow-sm rounded-lg py-3 py-sm-4 mb-grid-gutter" href="#"><img
                        class="d-block mx-auto" src="img/shop/brands/06.png" style="width: 150px;" alt="Brand"></a>
            </div>
            <div class="col-md-3 col-sm-4 col-6"><a
                    class="d-block bg-white box-shadow-sm rounded-lg py-3 py-sm-4 mb-grid-gutter" href="#"><img
                        class="d-block mx-auto" src="img/shop/brands/07.png" style="width: 150px;" alt="Brand"></a>
            </div>
            <div class="col-md-3 col-sm-4 col-6"><a
                    class="d-block bg-white box-shadow-sm rounded-lg py-3 py-sm-4 mb-grid-gutter" href="#"><img
                        class="d-block mx-auto" src="img/shop/brands/08.png" style="width: 150px;" alt="Brand"></a>
            </div>
            <div class="col-md-3 col-sm-4 col-6"><a
                    class="d-block bg-white box-shadow-sm rounded-lg py-3 py-sm-4 mb-grid-gutter" href="#"><img
                        class="d-block mx-auto" src="img/shop/brands/09.png" style="width: 150px;" alt="Brand"></a>
            </div>
            <div class="col-md-3 col-sm-4 col-6"><a
                    class="d-block bg-white box-shadow-sm rounded-lg py-3 py-sm-4 mb-grid-gutter" href="#"><img
                        class="d-block mx-auto" src="img/shop/brands/10.png" style="width: 150px;" alt="Brand"></a>
            </div>
            <div class="col-md-3 col-sm-4 col-6"><a
                    class="d-block bg-white box-shadow-sm rounded-lg py-3 py-sm-4 mb-grid-gutter" href="#"><img
                        class="d-block mx-auto" src="img/shop/brands/11.png" style="width: 150px;" alt="Brand"></a>
            </div>
            <div class="col-md-3 col-sm-4 col-6"><a
                    class="d-block bg-white box-shadow-sm rounded-lg py-3 py-sm-4 mb-grid-gutter" href="#"><img
                        class="d-block mx-auto" src="img/shop/brands/12.png" style="width: 150px;" alt="Brand"></a>
            </div>
        </div>
    </section>
    <!-- Blog + Instagram info cards-->
    <section class="container-fluid px-0">
        <div class="row no-gutters">
            <div class="col-md-6"><a class="card border-0 rounded-0 text-decoration-none py-md-4 bg-faded-primary"
                    href="blog-list-sidebar.php">
                    <div class="card-body text-center"><i class="czi-edit h3 mt-2 mb-4 text-primary"></i>
                        <h3 class="h5 mb-1">Read the blog</h3>
                        <p class="text-muted font-size-sm">Latest store, fashion news and trends</p>
                    </div>
                </a></div>
            <div class="col-md-6"><a class="card border-0 rounded-0 text-decoration-none py-md-4 bg-faded-accent"
                    href="#">
                    <div class="card-body text-center"><i class="czi-instagram h3 mt-2 mb-4 text-accent"></i>
                        <h3 class="h5 mb-1">Follow on Instagram</h3>
                        <p class="text-muted font-size-sm">#ShopWithUs</p>
                    </div>
                </a></div>
        </div>
    </section>
    <!-- Toast: Added to Cart-->
    <div class="toast-container toast-bottom-center">
        <div class="toast mb-3" id="cart-toast" data-delay="5000" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header bg-success text-white"><i class="czi-check-circle mr-2"></i>
                <h6 class="font-size-sm text-white mb-0 mr-auto">Added to cart!</h6>
                <button class="close text-white ml-2 mb-1" type="button" data-dismiss="toast" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="toast-body">This item has been added to your cart.</div>
        </div>
    </div>
    <!-- Footer-->
   <?php include('components/footer.php'); ?>
    <!-- Toolbar for handheld devices-->
    <div class="cz-handheld-toolbar">
        <div class="d-table table-fixed w-100"><a class="d-table-cell cz-handheld-toolbar-item"
                href="account-wishlist.php"><span class="cz-handheld-toolbar-icon"><i class="czi-heart"></i></span><span
                    class="cz-handheld-toolbar-label">Wishlist</span></a><a
                class="d-table-cell cz-handheld-toolbar-item" href="#navbarCollapse" data-toggle="collapse"
                onclick="window.scrollTo(0, 0)"><span class="cz-handheld-toolbar-icon"><i
                        class="czi-menu"></i></span><span class="cz-handheld-toolbar-label">Menu</span></a><a
                class="d-table-cell cz-handheld-toolbar-item" href="shop-cart.php"><span
                    class="cz-handheld-toolbar-icon"><i class="czi-cart"></i><span
                        class="badge badge-primary badge-pill ml-1">4</span></span><span
                    class="cz-handheld-toolbar-label">$265.00</span></a>
        </div>
    </div>
    <!-- Back To Top Button--><a class="btn-scroll-top" href="#top" data-scroll><span
            class="btn-scroll-top-tooltip text-muted font-size-sm mr-2">Top</span><i
            class="btn-scroll-top-icon czi-arrow-up"> </i></a>
    <!-- Vendor scrits: js libraries and plugins-->
    <script src="vendor/jquery/dist/jquery.slim.min.js"></script>
    <script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
    <script src="vendor/simplebar/dist/simplebar.min.js"></script>
    <script src="vendor/tiny-slider/dist/min/tiny-slider.js"></script>
    <script src="vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="vendor/drift-zoom/dist/Drift.min.js"></script>
    <!-- Main theme script-->
    <script src="js/theme.min.js"></script>
</body>

<!-- Mirrored from demo.createx.studio/cartzilla/home-fashion-store-v1.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Jul 2020 09:19:04 GMT -->

</html>
