<!doctype html>
<html class="no-js" lang="zxx">

<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Shopping Cart</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
        <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/fontawesome-stars.css">
        <link rel="stylesheet" href="css/meanmenu.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/jquery-ui.min.css">
        <link rel="stylesheet" href="css/venobox.css">
        <link rel="stylesheet" href="css/nice-select.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/helper.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/responsive.css">

        <link rel="stylesheet" href="css/shopping-cart.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!-- Begin Body Wrapper -->
        <div class="body-wrapper">
            <?php
                include './include/header.html';
            ?>
            <!-- Begin Li's Breadcrumb Area -->
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li class="active">Shopping Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!--Shopping Cart Area Strat-->
            <div class="Shopping-cart-area pt-60 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <form action="#">
                                <div class="table-content table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="li-product-remove">remove</th>
                                                <th class="li-product-thumbnail">images</th>
                                                <th class="cart-product-name">Product</th>
                                                <th class="li-product-price">Unit Price</th>
                                                <th class="li-product-quantity">Quantity</th>
                                                <th class="li-product-subtotal">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="li-product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                                <td class="li-product-thumbnail"><a href="#"><img src="images/product/small-size/5.jpg" alt="Li's Product Image"></a></td>
                                                <td class="li-product-name"><a href="#">Accusantium dolorem1</a></td>
                                                <td class="li-product-price"><span class="amount">$46.80</span></td>
                                                <td class="quantity">
                                                    <label>Quantity</label>
                                                    <div class="cart-plus-minus">
                                                        <input class="cart-plus-minus-box" value="1" type="text">
                                                        <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                        <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                    </div>
                                                </td>
                                                <td class="product-subtotal"><span class="amount">$70.00</span></td>
                                            </tr>
                                            <tr>
                                                <td class="li-product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                                <td class="li-product-thumbnail"><a href="#"><img src="images/product/small-size/6.jpg" alt="Li's Product Image"></a></td>
                                                <td class="li-product-name"><a href="#">Mug Today is a good day</a></td>
                                                <td class="li-product-price"><span class="amount">$71.80</span></td>
                                                <td class="quantity">
                                                    <label>Quantity</label>
                                                    <div class="cart-plus-minus">
                                                        <input class="cart-plus-minus-box" value="1" type="text">
                                                        <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                        <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                    </div>
                                                </td>
                                                <td class="product-subtotal"><span class="amount">$60.50</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="coupon-all">
                                            <div class="coupon">
                                                <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code" type="text">
                                                <input class="button" name="apply_coupon" value="Apply coupon" type="submit">
                                            </div>
                                            <div class="coupon2">
                                                <input class="button" name="update_cart" value="Update cart" type="submit">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 ml-auto">
                                        <div class="cart-page-total">
                                            <h2>Cart totals</h2>
                                            <ul>
                                                <li>Subtotal <span>$130.00</span></li>
                                                <li>Total <span>$130.00</span></li>
                                            </ul>
                                            <a href="#">Proceed to checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--Shopping Cart Area End-->
            <?php include './include/footer.html' ?>
        </div>
        <!-- Body Wrapper End Here -->
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <script src="js/vendor/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/ajax-mail.js"></script>
        <script src="js/jquery.meanmenu.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/jquery.mixitup.min.js"></script>
        <script src="js/jquery.countdown.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/jquery.barrating.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/venobox.min.js"></script>
        <script src="js/jquery.nice-select.min.js"></script>
        <script src="js/scrollUp.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
