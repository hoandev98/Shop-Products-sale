<!doctype html>
<html class="no-js" lang="en">
    
<!-- index28:48-->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title class="title">shop-ecommerce</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="/shop/public/images/favicon.png">
        <!-- Material Design Iconic Font-V2.2.0 -->
        <link rel="stylesheet" href="/shop/public/css/material-design-iconic-font.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="/shop/public/css/font-awesome.min.css">
        <!-- Font Awesome Stars-->
        <link rel="stylesheet" href="/shop/public/css/fontawesome-stars.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="/shop/public/css/meanmenu.css">
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href="/shop/public/css/owl.carousel.min.css">
        <!-- Slick Carousel CSS -->
        <link rel="stylesheet" href="/shop/public/css/slick.css">
        <link rel="stylesheet" href="/shop/public/css/index.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="/shop/public/css/animate.css">
        <!-- Jquery-ui CSS -->
        <link rel="stylesheet" href="/shop/public/css/jquery-ui.min.css">
        <!-- Venobox CSS -->
        <link rel="stylesheet" href="/shop/public/css/venobox.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="/shop/public/css/nice-select.css">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="/shop/public/css/magnific-popup.css">
        <!-- Bootstrap V4.1.3 Fremwork CSS -->
        <link rel="stylesheet" href="/shop/public/css/bootstrap.min.css">
        <!-- Helper CSS -->
        <link rel="stylesheet" href="/shop/public/css/helper.css">
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="/shop/public/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="/shop/public/css/responsive.css">
        <!-- Modernizr js -->
        <link rel="stylesheet" href="/shop/public/css/user.css">
        <script src="/shop/public/js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="/shop/public/jsAjax/jsRegisterLogin.js"></script>
        <script src="/shop/public/jsAjax/searchHeader.js"></script>
        <link rel='stylesheet' href='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css'>
<!-- <script src='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.min.js'></script> -->
        <script src="/shop/public/lib/Jquery/Jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        <link rel="stylesheet" type="text/css" href="/shop/public/css/shopping-cart.css">
    </head>
            
    <header>
                <!-- Begin Header Top Area -->
                <div class="header-top">
                    <div class="container">
                        <div class="row">
                            <!-- Begin Header Top Left Area -->
                            <div class="col-lg-3 col-md-4">
                                <div class="header-top-left">
                                    <ul class="phone-wrap">
                                        <li><span>Liên hệ:</span><a href="#"> 0377.601.559</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Header Top Left Area End Here -->
                            <!-- Begin Header Top Right Area -->
                            <div class="col-lg-9 col-md-8">
                                <div class="header-top-right">
                                <div class="member">
                                <a onclick="checkTaiKhoan()" id="btnTaiKhoan"  href="/shop/view/login-register.php"><i class="fa fa-user"></i>_My Account </a>
      
                                <div class="menuMember hide">
                                <a href="/shop/view/user.php">Trang người dùng</a>
                                <a onclick="checkDangXuat();">Đăng xuất</a>
                                </div> 
                                </div>
                                <!-- <a  style="color: black; float: right;" class="my-account" href="/shop/view/login-register.php">My Account</a> -->
                                </div>
                            </div>
                            <!-- Header Top Right Area End Here -->
                        </div>
                    </div>
                </div>
                <!-- Header Top Area End Here -->
                <!-- Begin Header Middle Area -->
                <div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
                    <div class="container">
                        <div class="row">
                            <!-- Begin Header Logo Area -->
                            <div class="col-lg-3">
                                <div class="logo pb-sm-30 pb-xs-30">
                                    <a href="/shop/index.php">
                                        <img src="/shop/public/images/menu/logo/1.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- Header Logo Area End Here -->
                            <!-- Begin Header Middle Right Area -->
                            <div class="col-lg-9 pl-0 ml-sm-15 ml-xs-15">
                                <!-- Begin Header Middle Searchbox Area -->
                                <form method="get" action="/shop/index.php" class="hm-searchbox">
                                    <select id="tags" class=""  onchange="window.location = this.value;">
                                        <option class="all-first">Tất cả</option>  
                                                            
</select>
                                    <input name="search" type="text" placeholder="Enter your search key ...">
                                    <button class="li-btn" type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            
                            
                                <!-- Header Middle Searchbox Area End Here -->
                                <!-- Begin Header Middle Right Area -->
                                <div class="header-middle-right">
                                    <ul class="hm-menu">
                                        <!-- Begin Header Middle Wishlist Area -->
                                        <li class="hm-wishlist">
                                            <a href="/shop/view/wishlist.php">
                                                <span id="numberWishList" class="cart-item-count wishlist-item-count">0</span>
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                        </li>
                                        <!-- Header Middle Wishlist Area End Here -->
                                        <!-- Begin Header Mini Cart Area -->
                                        <li class="hm-minicart">
                                            <div class="hm-minicart-trigger">
                                                <span class="item-icon"></span>
                                                <span class="item-text">
                                                    <span class="total-minicard">$0.00</span>
                                                    <span class="cart-item-count quantity-minicard cart-number">0</span>
                                                </span>
                                            </div>
                                            <span></span>
                                            <div class="minicart" style="z-index: 1001">
                                                <div class="show-minicard"></div>
                                              
                                                <p class="minicart-total">SUBTOTAL: <span class="subtotal-minicard">$0.00</span></p>
                                                <div class="minicart-button">
                                                    <a href="/shop/view/shopping-cart.php" class="li-button li-button-fullwidth li-button-dark">
                                                        <span>View Full Cart</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Header Mini Cart Area End Here -->
                                    </ul>
                                </div>
                                <!-- Header Middle Right Area End Here -->
                            </div>
                            <!-- Header Middle Right Area End Here -->
                        </div>
                    </div>
                </div>
                <!-- Header Middle Area End Here -->
                <!-- Begin Header Bottom Area -->
                <div class="header-bottom header-sticky d-none d-lg-block d-xl-block">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Begin Header Bottom Menu Area -->
                                <div class="hb-menu">
                                    <nav>
                                        <ul>
                                            <li class="homepage"><a href="/shop/index.php">Home</a>
                                             
                                            </li>
                                            <li class="megamenu-holder"><a href="/shop/view/shop.php">Shop</a>
                                    
                                            </li>
                                            <li class="dropdown-holder"><a href="/shop/view/blog.php">Blog</a>
                        
                                            </li>
                    
                                            <li><a href="/shop/view/about-us.php">About Us</a></li>
                                            <li style="padding-left:20px ;"><a href="/shop/view/contact.php">Contact</a></li>
                                            
                                        </ul>
                                    </nav>
                                </div>
                                <!-- Header Bottom Menu Area End Here -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Header Bottom Area End Here -->
                <!-- Begin Mobile Menu Area -->
                <div class="mobile-menu-area d-lg-none d-xl-none col-12">
                    <div class="container"> 
                        <div class="row">
                            <div class="mobile-menu">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu Area End Here -->
            </header>

