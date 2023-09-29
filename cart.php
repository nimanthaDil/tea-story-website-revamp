<!doctype html>
<html class="no-js" lang="zxx">

<head>

    <!--========= Required meta tags =========-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Tea Story</title>

    <!--====== Favicon ======-->
    <link rel="shortcut icon" href="images/favicon.png" type="images/x-icon"/>

    <!--====== CSS Here ======-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/lightcase.css">
    <link rel="stylesheet" href="css/meanmenu.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/main.css">

</head>

<body>


<?php include 'include/header.php' ?>

<main>
    <!-- breadcrumb area start -->
    <section class="breadcrumb-area pt-200 pb-140 bg_img" data-background="images/breadcrumb-bg-1.jpeg"
             data-overlay="dark" data-opacity="5">

        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <h2 class="page-title">Cart</h2>
                    <div class="cafena-breadcrumb breadcrumbs">
                        <ul class="list-unstyled d-flex align-items-center justify-content-center">
                            <li class="cafenabcrumb-item duxinbcrumb-begin">
                                <a href=""><span>Home</span></a>
                            </li>
                            <li class="cafenabcrumb-item duxinbcrumb-end">
                                <span>Cart</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- about area start -->
    <div class="cart-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="cart-wrapper">
                        <div class="table-content table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="product-thumbnail">Product Image</th>
                                    <th class="cart-product-name">Product Name</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">subTotal</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#" class="img">
                                            <img src="images/pro-1.jpg" alt="">
                                        </a>
                                        <a href="#" class="product-remove"><i class="fal fa-times"></i></a>
                                    </td>
                                    <td class="product-name"><a href="#">ESPRESSO RISTRETTO</a></td>
                                    <td class="product-price"><span class="amount">$130.00</span></td>
                                    <td class="product-quantity">
                                        <input type="number" placeholder="2">
                                    </td>
                                    <td class="product-subtotal"><span class="amount">$130.00</span></td>
                                </tr>
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#" class="img">
                                            <img src="images/pro-1.jpg" alt="">
                                        </a>
                                        <a href="#" class="product-remove"><i class="fal fa-times"></i></a>
                                    </td>
                                    <td class="product-name"><a href="#">ESPRESSO MACCHIATO</a></td>
                                    <td class="product-price"><span class="amount">$130.00</span></td>
                                    <td class="product-quantity">
                                        <input type="number" placeholder="2">
                                    </td>
                                    <td class="product-subtotal"><span class="amount">$130.00</span></td>
                                </tr>
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#" class="img">
                                            <img src="images/pro-1.jpg" alt="">
                                        </a>
                                        <a href="#" class="product-remove"><i class="fal fa-times"></i></a>
                                    </td>
                                    <td class="product-name"><a href="#">CAFFÈ LATTE</a></td>
                                    <td class="product-price"><span class="amount">$130.00</span></td>
                                    <td class="product-quantity">
                                        <input type="number" placeholder="2">
                                    </td>
                                    <td class="product-subtotal"><span class="amount">$130.00</span></td>
                                </tr>
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#" class="img">
                                            <img src="images/pro-1.jpg" alt="">
                                        </a>
                                        <a href="#" class="product-remove"><i class="fal fa-times"></i></a>
                                    </td>
                                    <td class="product-name"><a href="#">AMERICANO COFFEE</a></td>
                                    <td class="product-price"><span class="amount">$130.00</span></td>
                                    <td class="product-quantity">
                                        <input type="number" placeholder="2">
                                    </td>
                                    <td class="product-subtotal"><span class="amount">$130.00</span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="cart-bottom-wrapper d-flex align-items-center">
                        <div class="coupon d-flex align-items-center">
                            <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code" type="text">
                            <button class="site-btn site-btn site-btn__bghide" name="apply_coupon" type="submit">Apply
                                coupon</button>
                        </div>
                        <div class="clear-update d-flex align-items-center">
                            <a href="#0" class="site-btn site-btn__bghide">clear cart</a>
                            <a href="#0" class="site-btn site-btn__bghide">update cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-xl-5 col-lg-7">
                    <div class="cart-total mt-100">
                        <h2 class="title">Cart Total</h2>
                        <div class="ct-sub">
                            <span>Sub Total</span>
                            <span>$ 180</span>
                        </div>
                        <div class="ct-sub ct-sub__total">
                            <span>Total</span>
                            <span>$ 180</span>
                        </div>
                        <a href="checkout.html" class="site-btn">Procced to checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about area end -->



</main>

<?php include 'include/footer.php' ?>

<!--========= JS Here =========-->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.meanmenu.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/lightcase.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/tilt.jquery.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/scrollwatch.js"></script>
<script src="js/sticky-header.js"></script>
<script src="js/waypoint.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/jquery-ui-slider-range.js"></script>
<script src="js/main.js"></script>
</body>

</html>