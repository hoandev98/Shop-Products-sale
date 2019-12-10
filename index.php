<?php require_once "view/include/topBannerHome.php";
session_start(); ?>
<!doctype html>
<html class="no-js" lang="en">
    
<!-- index28:48-->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo isset($page_title) ? $page_title : "shop-ecommerce"; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="public/images/favicon.png">
        <!-- Material Design Iconic Font-V2.2.0 -->
        <link rel="stylesheet" href="public/css/material-design-iconic-font.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="public/css/font-awesome.min.css">
        <!-- Font Awesome Stars-->
        <link rel="stylesheet" href="public/css/fontawesome-stars.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="public/css/meanmenu.css">
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href="public/css/owl.carousel.min.css">
        <!-- Slick Carousel CSS -->
        <link rel="stylesheet" href="public/css/slick.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="public/css/animate.css">
        <!-- Jquery-ui CSS -->
        <link rel="stylesheet" href="public/css/jquery-ui.min.css">
        <!-- Venobox CSS -->
        <link rel="stylesheet" href="public/css/venobox.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="public/css/nice-select.css">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="public/css/magnific-popup.css">
        <!-- Bootstrap V4.1.3 Fremwork CSS -->
        <link rel="stylesheet" href="public/css/bootstrap.min.css">
        <!-- Helper CSS -->
        <link rel="stylesheet" href="public/css/helper.css">
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="public/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="public/css/responsive.css">
        <!-- Modernizr js -->
        <link rel="stylesheet" href="public/css/index.css">
        <script src="public/js/vendor/modernizr-2.8.3.min.js"></script>
        <link rel="stylesheet" href="public/lib/ion.rangeSlider-2.2.0/css/ion.rangeSlider.css">
        <link rel="stylesheet" href="public/lib/ion.rangeSlider-2.2.0/css/ion.rangeSlider.skinHTML5.css">
        <script src="public/lib/Jquery/Jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
	    <script src="public/lib/ion.rangeSlider-2.2.0/js/ion-rangeSlider/ion.rangeSlider.min.js"></script>
        <script src="public/jsAjax/ajaxHome.js"></script>
        <script type="text/javascript" src="public/jsAjax/dungchung.js"></script>
        <script type="text/javascript" src="public/jsAjax/header.js?1500"></script>
        
        <?php require_once "view/include/showSale.php"; ?>
    </head>
    <body>
       
        <div class="body-wrapper">
          
<?php include "view/include/header.php" ?>
           
            <?php topBannerHome(); ?>
           
            <?php showSaleProducts(); ?>
           
            <div class="li-static-banner">
                <div class="container">
                    <div class="row">
                        <!-- Begin Single Banner Area -->
                        <div class="col-lg-4 col-md-4 text-center">
                            <div class="single-banner">
                                <a href="#">
                                    <img src="images/banner/1_3.jpg" alt="Li's Static Banner">
                                </a>
                            </div>
                        </div>
                        <!-- Single Banner Area End Here -->
                        <!-- Begin Single Banner Area -->
                        <div class="col-lg-4 col-md-4 text-center pt-xs-30">
                            <div class="single-banner">
                                <a href="#">
                                    <img src="images/banner/1_4.jpg" alt="Li's Static Banner">
                                </a>
                            </div>
                        </div>
                        <!-- Single Banner Area End Here -->
                        <!-- Begin Single Banner Area -->
                        <div class="col-lg-4 col-md-4 text-center pt-xs-30">
                            <div class="single-banner">
                                <a href="#">
                                    <img src="images/banner/1_5.jpg" alt="Li's Static Banner">
                                </a>
                            </div>
                        </div>
                        <!-- Single Banner Area End Here -->
                    </div>
                </div>
            </div>
            <!-- Li's Static Banner Area End Here -->
            <!-- Begin Li's Laptop Product Area -->
            <section class="product-area li-laptop-product pt-60 pb-45">
                <div class="container">
                    <div class="row">
                        <!-- Begin Li's Section Area -->
                        <div class="col-lg-12">
                            <div class="li-section-title">
                                <h2>
                                    <span>Laptop</span>
                                </h2>
                                <ul class="li-sub-category-list">
                                    <li class="active"><a href="./view/shop.php">Prime Video</a></li>
                                    <li><a href="./view/shop.php">Computers</a></li>
                                    <li><a href="./view/shop.php">Electronics</a></li>
                                </ul>
                            </div>
                            <div class="row">
                              
                            </div>
                        </div>
                        <!-- Li's Section Area End Here -->
                    </div>
                </div>
            </section>
            <!-- Li's Laptop Product Area End Here -->
            <!-- Begin Li's TV & Audio Product Area -->
            <section class="product-area li-laptop-product li-tv-audio-product pb-45">
                <div class="container">
                    <div class="row">
                        <!-- Begin Li's Section Area -->
                        <div class="col-lg-12">
                            <div class="li-section-title">
                                <h2>
                                    <span>TV & Audio</span>
                                </h2>
                                <ul class="li-sub-category-list">
                                    <li class="active"><a href="./view/shop.php">Chamcham</a></li>
                                    <li><a href="./view/shop.php">Sanai</a></li>
                                    <li><a href="./view/shop.php">Meito</a></li>
                                </ul>
                            </div>
                            <div class="row">
                               
                            </div>
                        </div>
                        <!-- Li's Section Area End Here -->
                    </div>
                </div>
            </section>
            <!-- Li's TV & Audio Product Area End Here -->
            <!-- Begin Li's Static Home Area -->
            <div class="li-static-home">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Begin Li's Static Home Image Area -->
                            <div class="li-static-home-image"></div>
                            <!-- Li's Static Home Image Area End Here -->
                            <!-- Begin Li's Static Home Content Area -->
                            <div class="li-static-home-content">
                                <p>Sale Offer<span>-20% Off</span>This Week</p>
                                <h2>Featured Product</h2>
                                <h2>Meito Accessories 2020</h2>
                                <p class="schedule">
                                    Starting at
                                    <span> $1209.00</span>
                                </p>
                                <div class="default-btn">
                                    <a href="./view/shop.php" class="links">Shopping Now</a>
                                </div>
                            </div>
                            <!-- Li's Static Home Content Area End Here -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Li's Static Home Area End Here -->
            <!-- Begin Li's Trending Product Area -->
            <section class="product-area li-trending-product pt-60 pb-45">
                <div class="container">
                    <div class="row">
                        <!-- Begin Li's Tab Menu Area -->
                        <div class="col-lg-12">
                            <div class="li-product-tab li-trending-product-tab">
                                <h2>
                                    <span>Trendding Products</span>
                                </h2>
                                <ul class="nav li-product-menu li-trending-product-menu">
                                   <li><a class="active" data-toggle="tab" href="#home1"><span>Sanai</span></a></li>
                                   <li><a data-toggle="tab" href="#home2"><span>Camera Accessories</span></a></li>
                                   <li><a data-toggle="tab" href="#home3"><span>XailStation</span></a></li>
                                </ul>               
                            </div>
                            <!-- Begin Li's Tab Menu Content Area -->
                            <div class="tab-content li-tab-content li-trending-product-content">
                                <div id="home1" class="tab-pane show fade in active">
                                    <div class="row">
                                        
                                    </div>
                                </div>
                                <div id="home2" class="tab-pane fade">
                                    <div class="row">
                                       
                                    </div>
                                </div>
                                <div id="home3" class="tab-pane fade">
                                    <div class="row">
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- Tab Menu Content Area End Here -->
                        </div>
                        <!-- Tab Menu Area End Here -->
                    </div>
                </div>
            </section>
            <!-- Li's Trending Product Area End Here -->
             <!-- Li's Trendding Products Area End Here -->
            <!-- Begin Footer Area -->
            <?php include "./view/include/footer.php" ?>
            <!-- Footer Area End Here -->
            <!-- Begin Quick View | Modal Area -->
            <div class="modal fade modal-wrapper" id="exampleModalCenter" >
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div class="modal-inner-area row">
                                <div class="col-lg-5 col-md-6 col-sm-6">
                                   <!-- Product Details Left -->
                                    <div class="product-details-left">
                                        <div class="product-details-images slider-navigation-1">
                                            <div class="lg-image">
                                                <img src="images/product/large-size/1.jpg" alt="product image">
                                            </div>
                                            <div class="lg-image">
                                                <img src="images/product/large-size/2.jpg" alt="product image">
                                            </div>
                                            <div class="lg-image">
                                                <img src="images/product/large-size/3.jpg" alt="product image">
                                            </div>
                                            <div class="lg-image">
                                                <img src="images/product/large-size/4.jpg" alt="product image">
                                            </div>
                                            <div class="lg-image">
                                                <img src="images/product/large-size/5.jpg" alt="product image">
                                            </div>
                                            <div class="lg-image">
                                                <img src="images/product/large-size/6.jpg" alt="product image">
                                            </div>
                                        </div>
                                        <div class="product-details-thumbs slider-thumbs-1">                                        
                                            <div class="sm-image"><img src="/Shop-Products-sale/public/images/product/small-size/1.jpg" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="/Shop-Products-sale/public/images/product/small-size/2.jpg" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="/Shop-Products-sale/public/images/product/small-size/3.jpg" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="/Shop-Products-sale/public/images/product/small-size/4.jpg" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="/Shop-Products-sale/public/images/product/small-size/5.jpg" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="/Shop-Products-sale/public/images/product/small-size/6.jpg" alt="product image thumb"></div>
                                        </div>
                                    </div>
                                    <!--// Product Details Left -->
                                </div>

                                <div class="col-lg-7 col-md-6 col-sm-6">
                                    <div class="product-details-view-content pt-60">
                                        <div class="product-info">
                                            <h2>Today is a good day Framed poster</h2>
                                            <span class="product-details-ref">Reference: demo_15</span>
                                            <div class="rating-box pt-20">
                                                <ul class="rating rating-with-review-item">
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    <li class="review-item"><a href="#">Read Review</a></li>
                                                    <li class="review-item"><a href="#">Write Review</a></li>
                                                </ul>
                                            </div>
                                            <div class="price-box pt-20">
                                                <span class="new-price new-price-2">$57.98</span>
                                            </div>
                                            <div class="product-desc">
                                                <p>
                                                    <span>100% cotton double printed dress. Black and white striped top and orange high waisted skater skirt bottom. Lorem ipsum dolor sit amet, consectetur adipisicing elit. quibusdam corporis, earum facilis et nostrum dolorum accusamus similique eveniet quia pariatur.
                                                    </span>
                                                </p>
                                            </div>
                                            <div class="product-variants">
                                                <div class="produt-variants-size">
                                                    <label>Dimension</label>
                                                    <select class="nice-select">
                                                        <option value="1" title="S" selected="selected">40x60cm</option>
                                                        <option value="2" title="M">60x90cm</option>
                                                        <option value="3" title="L">80x120cm</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="single-add-to-cart">
                                                <form action="#" class="cart-quantity">
                                                    <div class="quantity">
                                                        <label>Quantity</label>
                                                        <div class="cart-plus-minus">
                                                            <input class="cart-plus-minus-box" value="1" type="text">
                                                            <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                            <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                        </div>
                                                    </div>
                                                    <button class="add-to-cart" type="submit">Add to cart</button>
                                                </form>
                                            </div>
                                            <div class="product-additional-info pt-25">
                                                <a class="wishlist-btn" href="./view/wishlist.php"><i class="fa fa-heart-o"></i>Add to wishlist</a>
                                                <div class="product-social-sharing pt-25">
                                                    <ul>
                                                        <li class="facebook"><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
                                                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                                                        <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i>Google +</a></li>
                                                        <li class="instagram"><a href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
                                                    </ul>
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
            <div class="modal fade modal-wrapper" id="iphoneModalCenter" >
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div class="modal-inner-area row">
                                <div class="col-lg-5 col-md-6 col-sm-6">
                                   <!-- Product Details Left -->
                                    <div class="product-details-left">
                                        <div class="product-details-images slider-navigation-1">
                                        <div class="lg-image">
                                        <img src="https://didongviet.vn/pub/media/catalog/product//i/p/iphone-11-pro-max-didongviet_1_1.jpg" alt="product image">
                                    </div>
                                    <div class="lg-image">
                                        <img  src="https://didongviet.vn/pub/media/catalog/product//i/p/iphone-11-pro-max-trang-didongviet_3.jpg" alt="product image">
                                    </div>
                                    <div class="lg-image">
                                        <img src="https://didongviet.vn/pub/media/catalog/product/cache/926507dc7f93631a094422215b778fe0/i/p/iphone-11-vang-didongviet_10_1.jpg" alt="product image">
                                    </div>
                                    <div class="lg-image">
                                        <img src="https://didongviet.vn/pub/media/catalog/product/cache/926507dc7f93631a094422215b778fe0/i/p/iphone-11-pro-max-vang-didongviet_3.jpg" alt="product image">
                                    </div>
                                    <div class="lg-image">
                                        <img src="https://didongviet.vn/pub/media/catalog/product/cache/926507dc7f93631a094422215b778fe0/i/p/iphone-11-red-didongviet_8_1.jpg" alt="product image">
                                    </div>
                                    <div class="lg-image">
                                        <img src="https://didongviet.vn/pub/media/catalog/product/cache/926507dc7f93631a094422215b778fe0/i/p/iphone-11-xanh-didongviet_10_1.jpg" alt="product image">
                                    </div>
                                </div>
                                <div class="product-details-thumbs slider-thumbs-1">
                                    <div class="sm-image"><img src="https://didongviet.vn/pub/media/catalog/product//i/p/iphone-11-pro-max-didongviet_1_1.jpg"  alt="product image thumb"></div>
                                    <div class="sm-image"><img src="https://didongviet.vn/pub/media/catalog/product//i/p/iphone-11-pro-max-trang-didongviet_3.jpg" alt="product image thumb"></div>
                                    <div class="sm-image"><img src="https://didongviet.vn/pub/media/catalog/product/cache/926507dc7f93631a094422215b778fe0/i/p/iphone-11-vang-didongviet_10_1.jpg" alt="product image thumb"></div>
                                    <div class="sm-image"><img src="https://didongviet.vn/pub/media/catalog/product/cache/926507dc7f93631a094422215b778fe0/i/p/iphone-11-pro-max-vang-didongviet_3.jpg" alt="product image thumb"></div>
                                    <div class="sm-image"><img src="https://didongviet.vn/pub/media/catalog/product/cache/926507dc7f93631a094422215b778fe0/i/p/iphone-11-red-didongviet_8_1.jpg" alt="product image thumb"></div>
                                    <div class="sm-image"><img src="https://didongviet.vn/pub/media/catalog/product/cache/926507dc7f93631a094422215b778fe0/i/p/iphone-11-xanh-didongviet_10_1.jpg" alt="product image thumb"></div>
                                </div>
                                    </div>
                                    <!--// Product Details Left -->
                                </div>

                                <div class="col-lg-7 col-md-6 col-sm-6">
                                    <div class="product-details-view-content pt-60">
                                        <div class="product-info">
                                            <h2>Iphone 11 pro-max</h2>
                                            <span class="product-details-ref">Reference: Iphone 11</span>
                                            <div class="rating-box pt-20">
                                                <ul class="rating rating-with-review-item">
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    <li class="review-item"><a href="#">Read Review</a></li>
                                                    <li class="review-item"><a href="#">Write Review</a></li>
                                                </ul>
                                            </div>
                                            <div class="price-box pt-20">
                                                <span class="new-price new-price-2">$2000.98</span>
                                            </div>
                                            <div class="product-desc">
                                            <p>
                                            <span>
IPhone 11 64GB version 1 High-end smartphone Sim, beautiful appearance and strong configuration (Mobile Vietnam commits to sell genuine Apple iPhone, 10 times more money if detecting fake goods. Good for users to use freely.

<br>IPhone 11 64GB is warranted for 12 months at Vietnam Mobile. The system also offers special warranty packages such as falls, water drops at extremely affordable costs. Especially, there is the Trade - In old collection, which is renewed and renewed without compensation, customers will feel secure and satisfied when shopping at Mobile Vietnam.</span>
                                        </p>
                                            </div>
                                            <div class="product-variants">
                                                <div class="produt-variants-size">
                                                    <label>Dimension</label>
                                                    <select class="nice-select">
                                                        <option value="1" title="S" selected="selected">Red</option>
                                                        <option value="2" title="M">Gold</option>
                                                        <option value="3" title="L">Black</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="single-add-to-cart">
                                                <form action="#" class="cart-quantity">
                                                    <div class="quantity">
                                                        <label>Quantity</label>
                                                        <div class="cart-plus-minus">
                                                            <input class="cart-plus-minus-box" value="1" type="text">
                                                            <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                            <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                        </div>
                                                    </div>
                                                    <button class="add-to-cart" type="submit">Add to cart</button>
                                                </form>
                                            </div>
                                            <div class="product-additional-info pt-25">
                                                <a class="wishlist-btn" href="./view/wishlist.php"><i class="fa fa-heart-o"></i>Add to wishlist</a>
                                                <div class="product-social-sharing pt-25">
                                                    <ul>
                                                        <li class="facebook"><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
                                                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                                                        <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i>Google +</a></li>
                                                        <li class="instagram"><a href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
                                                    </ul>
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
            <!-- Quick View | Modal Area End Here -->
        </div>
        <!-- Body Wrapper End Here -->
        <!-- jQuery-V1.12.4 -->
        <!-- <script src="public/js/vendor/jquery-1.12.4.min.js"></script> -->
        <!-- Popper js -->
        <script src="public/js/vendor/popper.min.js"></script>
        <!-- Bootstrap V4.1.3 Fremwork js -->
        <script src="public/js/bootstrap.min.js"></script>
        <!-- Ajax Mail js -->
        <script src="public/js/ajax-mail.js"></script>
        <!-- Meanmenu js -->
        <script src="public/js/jquery.meanmenu.min.js"></script>
        <!-- Wow.min js -->
        <script src="public/js/wow.min.js"></script>
        <!-- Slick Carousel js -->
        <script src="public/js/slick.min.js"></script>
        <!-- Owl Carousel-2 js -->
        <script src="public/js/owl.carousel.min.js"></script>
        <!-- Magnific popup js -->
        <script src="public/js/jquery.magnific-popup.min.js"></script>
        <!-- Isotope js -->
        <script src="public/js/isotope.pkgd.min.js"></script>
        <!-- Imagesloaded js -->
        <script src="public/js/imagesloaded.pkgd.min.js"></script>
        <!-- Mixitup js -->
        <script src="public/js/jquery.mixitup.min.js"></script>
        <!-- Countdown -->
        <script src="public/js/jquery.countdown.min.js"></script>
        <!-- Counterup -->
        <script src="public/js/jquery.counterup.min.js"></script>
        <!-- Waypoints -->
        <script src="public/js/waypoints.min.js"></script>
        <!-- Barrating -->
        <script src="public/js/jquery.barrating.min.js"></script>
        <!-- Jquery-ui -->
        <script src="public/js/jquery-ui.min.js"></script>
        <!-- Venobox -->
        <script src="public/js/venobox.min.js"></script>
        <!-- Nice Select js -->
        <script src="js/jquery.nice-select.min.js"></script>
        <!-- ScrollUp js -->
        <script src="public/js/scrollUp.min.js"></script>
        <!-- Main/Activator js -->
        <script src="public/js/main.js"></script>
        <script src="public/jsAjax/ajaxHome.js"></script>
        <script type="text/javascript" src="public/jsAjax/header.js?1500"></script>
    </body>

<!-- index30:23-->
</html>