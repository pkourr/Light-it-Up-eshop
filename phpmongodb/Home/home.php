<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Light it Up</title>
    <!-- Favicon -->
    <link href="../assets/images/favicon.png" rel="shortcut icon">
    <!-- CSS -->
    <link href="../assets/plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/plugins/magnific-popup/magnific-popup.min.css" rel="stylesheet">
    <link href="../assets/plugins/owl-carousel/owl.carousel.min.css" rel="stylesheet">
    <link href="../assets/plugins/owl-carousel/owl.theme.default.min.css" rel="stylesheet">
    <link href="../assets/plugins/justified-gallery/justified-gallery.min.css" rel="stylesheet">
    <link href="../assets/plugins/sal/sal.min.css" rel="stylesheet">
    <link href="../assets/css/main.css" rel="stylesheet">
    <!-- Fonts/Icons -->
    <link href="../assets/plugins/font-awesome/css/all.css" rel="stylesheet">
    <link href="../assets/plugins/themify/themify-icons.min.css" rel="stylesheet">
    <link href="../assets/plugins/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
</head>
<body data-preloader="4">

<div class="wrapper">

    <!-- Scroll to Top -->
    <div class="scrolltotop">
        <a class="button-circle button-circle-sm button-circle-black" href="#"><i class="ti-arrow-up"></i></a>
    </div>
    <!-- end Scroll to Top -->

    <!-- Header -->
    <div class="header header-lg">
        <div class="container">
            <div class="logo">
                <h4 class="uppercase letter-spacing-2"><a href="home.php">Light it Up </a></h4>

            </div>
            <div class="header-menu-wrapper">
                <!-- Menu -->
                <ul class="header-menu">
                    <li class="m-item">
                        <a class="m-link" href="home.php">Home</a>
                    </li>
                    <li class="m-item">
                        <a class="m-link" href="aboutus.php">About Us</a>
                    </li>
                    <li class="m-item">
                        <a class="m-link" href="products1.php">Products</a>
                    </li>
                    <li class="m-item">
                        <a class="m-link" href="adminLogin.php">Admin</a>
                    </li>
                </ul>
                <!-- Extra -->
                <div class="header-menu-extra">
                    <ul class="list-inline">
                        <li><a href="cart.php"><i class="fas fa-shopping-cart"></i></a></li>

                        <?php
                        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
                            include 'signedinContent.php';
                        }
                        else {
                            include 'signedoutContent.php';
                        }
                        ?>

                    </ul>
                </div>

                <!-- Close Button -->
                <button class="close-button">
                    <span></span>
                </button>
            </div><!-- end header-menu-wrapper -->
            <!-- Menu Toggle on Mobile -->
            <button class="m-toggle">
                <span></span>
            </button>
        </div><!-- end container -->
    </div>
    <!-- end Header -->

    <!-- Hero section -->
    <div class="owl-carousel owl-dots-overlay" data-owl-items="1" data-owl-autoplay="true">
        <!-- Carousel Item 1 -->
        <div class="section-2xl bg-image" data-bg-src="../assets/images/background.jpg">
            <div class="bg-dark-02">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                            <h1 class="display-4 font-weight-semi-bold">Level up your lighting!</h1>
                            <a class="button button-lg button-outline-white-2 button-border-2 margin-top-20"
                               href="products1.php">Shop Now</a>
                        </div>
                    </div><!-- end row -->
                </div><!-- end container -->
            </div>
        </div>
        <!-- Carousel Item 2 -->
        <div class="section-2xl bg-image" data-bg-src="../assets/images/background1.jpg">
            <div class="bg-dark-02">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                            <h1 class="display-4 font-weight-semi-bold">Smart and bright!</h1>
                            <a class="button button-lg button-outline-white-2 button-border-2 margin-top-20"
                               href="products1.php">Shop Now</a>
                        </div>
                    </div><!-- end row -->
                </div><!-- end container -->
            </div>
        </div>
    </div>
    <!-- end Hero section -->

    <!-- Trending Items -->
    <div class="section-lg">
        <div class="container">
            <div class="text-center margin-bottom-70">
                <div class="row">
                    <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                        <h2 class="font-weight-normal">Our Best Sellers</h2>
                        <p>Lighting affects everything light falls upon. How you see what you see, how you feel
                            about it, and how you hear what you are hearing. Replace the 'a' with an 'e' and you get
                            lighting effects!</p>
                    </div>
                </div><!-- end row -->
            </div>
            <div class="owl-carousel" data-owl-nav="true" data-owl-dots="false" data-owl-margin="40" data-owl-xs="1"
                 data-owl-sm="2" data-owl-md="3" data-owl-lg="3" data-owl-xl="3">
                <!-- Carousel Item 1 -->
                <div class="product-box">
                    <div class="product-img">
                        <a href="#">
                            <img src="../assets/images/canvas_2pac.jpg" alt="">
                        </a>
                        <div class="product-badge-left">
                            <span class="font-small uppercase font-family-secondary font-weight-medium">Hot</span>
                        </div>
                    </div>
                    <div class="product-title">
                        <h6 class="font-weight-medium"><a href="#">2pac Neon Led Canvas</a></h6>
                        <div class="price-and-cart">
                            <div class="price">
                                <span>89€</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Carousel Item 2 -->
                <div class="product-box">
                    <div class="product-img">
                        <a href="#">
                            <img src="../assets/images/canvas_jordan.jpg.png" alt="">
                        </a>
                        <div class="product-badge-left">
                            <span class="font-small uppercase font-family-secondary font-weight-medium">Hot</span>
                        </div>
                    </div>
                    <div class="product-title">
                        <h6 class="font-weight-medium"><a href="#">Jordan Neon Led Canvas</a></h6>
                        <div class="price-and-cart">
                            <div class="price">
                                <span>89€</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Carousel Item 3 -->
                <div class="product-box">
                    <div class="product-img">
                        <a href="#">
                            <img src="../assets/images/led_strip_lighning.jpg.png" alt="">
                        </a>
                        <div class="product-badge-left">
                            <span class="font-small uppercase font-family-secondary font-weight-medium">Hot</span>
                        </div>
                    </div>
                    <div class="product-title">
                        <h6 class="font-weight-medium"><a href="#">Lightning Neon Led Sign</a></h6>
                        <div class="price-and-cart">
                            <div class="price">
                                <span>49€</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Carousel Item 4 -->
                <div class="product-box">
                    <div class="product-img">
                        <a href="#">
                            <img src="../assets/images/led_strip_acropolis.jpg.png" alt="">
                        </a>
                        <div class="product-badge-left">
                            <span class="font-small uppercase font-family-secondary font-weight-medium">Hot</span>
                        </div>
                    </div>
                    <div class="product-title">
                        <h6 class="font-weight-medium"><a href="#">Acropolis Neon Led Sign</a></h6>
                        <div class="price-and-cart">
                            <div class="price">
                                <span>59€</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Carousel Item 5 -->
                <div class="product-box">
                    <div class="product-img">
                        <a href="#">
                            <img src="../assets/images/led_strip_coffee.jpg.png" alt="">
                        </a>
                        <div class="product-badge-left">
                            <span class="font-small uppercase font-family-secondary font-weight-medium">Hot</span>
                        </div>
                    </div>
                    <div class="product-title">
                        <h6 class="font-weight-medium"><a href="#">Coffee Neon Led Sign</a></h6>
                        <div class="price-and-cart">
                            <div class="price">
                                <span>49€</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end owl-carousel -->
            <div class="text-center margin-top-70">
                <a class="button button-lg button-gray button-rounded" href="products1.php">View All</a>
            </div>
        </div><!-- end container -->
    </div>
    <!-- end Trending Items -->

    <!-- Footer -->
    <div class="section-xs bg-dark">
        <div class="container">
            <div class="row col-spacing-20">
                <div class="col-6 col-lg-3">
                    <h6 class="font-weight-normal margin-lg-bottom-20">Useful links</h6>
                    <ul class="list-dash font-lg-small">
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Warranty</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-3">
                    <h6 class="font-weight-normal margin-lg-bottom-20">Additional links</h6>
                    <ul class="list-dash font-lg-small">
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Returns</a></li>
                        <li><a href="#">Shipment</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-3 text-lg-right">
                    <p class="font-lg-small">lightitup_support.gmail.com</p>
                    <ul class="list-inline-sm margin-top-10 margin-lg-top-20">
                        <li><a class="button-circle button-circle-xs button-circle-white"
                               href="https://el-gr.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li><a class="button-circle button-circle-xs button-circle-white"
                               href="https://twitter.com/?lang=el" target="_blank"><i class="fab fa-twitter"></i></a>
                        </li>
                    </ul>
                </div>
            </div><!-- end row -->
            <div class="border-top margin-top-30 padding-y-20 padding-bottom-0">
                <div class="row align-items-center">
                    <div class="col-6">
                        <h4 class="uppercase letter-spacing-2 margin-0">Light it Up</h4>
                    </div>
                    <div class="col-6 text-right">
                        <p>© Copyright © 2022, LightitUp.gr, All Rights Reserved</p>
                    </div>
                </div><!-- end row -->
            </div>
        </div><!-- end container -->
    </div>
    <!-- end Footer -->

</div><!-- end wrapper -->

<!-- ***** JAVASCRIPTS ***** -->
<script src="../assets/plugins/jquery.min.js"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=IntersectionObserver"></script>
<script src="../assets/plugins/plugins.js"></script>
<script src="../assets/js/functions.js"></script>
</body>
</html>