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
                    <h2 class="page-title">Check Out</h2>
                    <div class="cafena-breadcrumb breadcrumbs">
                        <ul class="list-unstyled d-flex align-items-center justify-content-center">
                            <li class="cafenabcrumb-item duxinbcrumb-begin">
                                <a href=""><span>Home</span></a>
                            </li>
                            <li class="cafenabcrumb-item duxinbcrumb-end">
                                <span>Check Out</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- about area start -->
    <div class="checkout-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="cart-wrapper checkout-wrapper">
                        <div class="row">
                            <div class="col-xl-9">
                                <div class="checkout-top">
                                    <h4 class="title">Payment Mathod</h4>
                                    <nav>
                                        <div class="nav" id="shop-filter-tab" role="tablist">
                                            <a class="nav-link active" id="pd-1-tab" data-bs-toggle="tab" href="#pd-1" role="tab" aria-controls="pd-1" aria-selected="true">
                                                New Payment Card
                                            </a>
                                            <a class="nav-link" id="pd-2-tab" data-bs-toggle="tab" href="#pd-2" role="tab" aria-controls="pd-2" aria-selected="true">
                                                Paypal
                                            </a>
                                            <a class="nav-link" id="pd-3-tab" data-bs-toggle="tab" href="#pd-3" role="tab" aria-controls="pd-3" aria-selected="true">
                                                Cash on Delivery
                                            </a>
                                        </div>
                                    </nav>

                                    <div class="tab-content" id="pdContent">
                                        <div class="tab-pane fade show active" id="pd-1" role="tabpanel" aria-labelledby="pd-1-tab">
                                            <div class="cart-form">
                                                <form action="checkout.html">
                                                    <div class="row">
                                                        <div class="col-xl-6">
                                                            <div class="from-group mt-30">
                                                                <label for="fname">First Name*</label>
                                                                <input type="text" name="fname" id="fname" placeholder="First Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="from-group mt-30">
                                                                <label for="lname">Last Name*</label>
                                                                <input type="text" name="lname" id="lname" placeholder="Last Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="from-group mt-30">
                                                                <label for="cname">Company name (optional)</label>
                                                                <input type="text" name="cname" id="cname" placeholder="Company Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="from-group mt-30">
                                                                <label for="rname">Country / Region *</label>
                                                                <input type="text" name="rname" id="rname" placeholder="Country">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="from-group mt-30">
                                                                <label for="hname">Street address *</label>
                                                                <input type="text" name="hname" id="hname" placeholder="House number &amp; State">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="from-group mt-30">
                                                                <label for="tname">Town / City *</label>
                                                                <input type="text" name="tname" id="tname">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="from-group mt-30">
                                                                <label for="zname">Postcode / ZIP (optional)*</label>
                                                                <input type="text" name="zname" id="zname">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="from-group mt-30">
                                                                <label for="tel">Phone</label>
                                                                <input type="tel" name="tel" id="tel" placeholder="Enter your number..">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="from-group mt-30">
                                                                <label for="email">Email</label>
                                                                <input type="email" name="email" id="email" placeholder="Enter your mail..">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="from-group mt-30">
                                                                <label for="ainfo">Additional Information*</label>
                                                                <textarea name="ainfo" id="ainfo" placeholder="Note about your order, Special note for delevery !"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pd-2" role="tabpanel" aria-labelledby="pd-2-tab">
                                            <div class="cart-form">
                                                <form action="checkout.html">
                                                    <div class="row">
                                                        <div class="col-xl-6">
                                                            <div class="from-group mt-30">
                                                                <label for="fname2">First Name*</label>
                                                                <input type="text" name="fname2" id="fname2" placeholder="First Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="from-group mt-30">
                                                                <label for="lname2">Last Name*</label>
                                                                <input type="text" name="lname2" id="lname2" placeholder="Last Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="from-group mt-30">
                                                                <label for="cname2">Company name (optional)</label>
                                                                <input type="text" name="cname2" id="cname2" placeholder="Company Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="from-group mt-30">
                                                                <label for="rname2">Country / Region *</label>
                                                                <input type="text" name="rname2" id="rname2" placeholder="Company Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="from-group mt-30">
                                                                <label for="hname2">Street address *</label>
                                                                <input type="text" name="hname2" id="hname2" placeholder="House number &amp; State">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="from-group mt-30">
                                                                <label for="tname2">Town / City *</label>
                                                                <input type="text" name="tname2" id="tname2">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="from-group mt-30">
                                                                <label for="zname2">Postcode / ZIP (optional)*</label>
                                                                <input type="text" name="zname2" id="zname2">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="from-group mt-30">
                                                                <label for="tel2">Phone</label>
                                                                <input type="tel" name="tel2" id="tel2" placeholder="Enter your number..">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="from-group mt-30">
                                                                <label for="email2">Email</label>
                                                                <input type="email" name="email2" id="email2" placeholder="Enter your mail..">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="from-group mt-30">
                                                                <label for="ainfo2">Additional Information*</label>
                                                                <textarea name="ainfo2" id="ainfo2" placeholder="Note about your order, Special note for delevery !"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pd-3" role="tabpanel" aria-labelledby="pd-3-tab">
                                            <div class="cart-form">
                                                <form action="checkout.html">
                                                    <div class="row">
                                                        <div class="col-xl-6">
                                                            <div class="from-group mt-30">
                                                                <label for="fname3">First Name*</label>
                                                                <input type="text" name="fname3" id="fname3" placeholder="First Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="from-group mt-30">
                                                                <label for="lname3">Last Name*</label>
                                                                <input type="text" name="lname3" id="lname3" placeholder="Last Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="from-group mt-30">
                                                                <label for="cname3">Company name (optional)</label>
                                                                <input type="text" name="cname3" id="cname3" placeholder="Company Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="from-group mt-30">
                                                                <label for="rname3">Country / Region *</label>
                                                                <input type="text" name="rname3" id="rname3" placeholder="Company Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="from-group mt-30">
                                                                <label for="hname3">Street address *</label>
                                                                <input type="text" name="hname3" id="hname3" placeholder="House number &amp; State">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="from-group mt-30">
                                                                <label for="tname3">Town / City *</label>
                                                                <input type="text" name="tname3" id="tname3">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="from-group mt-30">
                                                                <label for="zname3">Postcode / ZIP (optional)*</label>
                                                                <input type="text" name="zname3" id="zname3">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="from-group mt-30">
                                                                <label for="tel3">Phone</label>
                                                                <input type="tel" name="tel3" id="tel3" placeholder="Enter your number..">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="from-group mt-30">
                                                                <label for="email3">Email</label>
                                                                <input type="email" name="email3" id="email3" placeholder="Enter your mail..">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="from-group mt-30">
                                                                <label for="ainfo3">Additional Information*</label>
                                                                <textarea name="ainfo3" id="ainfo3" placeholder="Note about your order, Special note for delevery !"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-8">
                                        <div class="cart-total mt-45 text-end">
                                            <h2 class="title text-start">Cart Total</h2>
                                            <div class="ct-sub">
                                                <span>Sub Total</span>
                                                <span>$ 180</span>
                                            </div>
                                            <div class="ct-sub ct-sub__total">
                                                <span>Total</span>
                                                <span>$ 180</span>
                                            </div>
                                            <a href="#0" class="site-btn">Procced to checkout</a>
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