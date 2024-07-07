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
  <link href="../assets/css/login.css" rel="stylesheet">
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
          </ul>
        </div>
          <?php

          // check if the user is logged in
          if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
              // include the logged in user's content

              include 'signedinContent.php';
          }
          else {
              // include the logged out user's content
              include 'signedoutContent.php';
          }

          ?>
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

  <!--Login / Signup-->
  <div class="login_form">
    <div class="title-text">
      <div class="title login">Login Form</div>
      <div class="title signup">Signup Form</div>
    </div>
    <div class="form-container">
      <div class="slide-controls">
        <input type="radio" name="slide" id="login" checked>
        <input type="radio" name="slide" id="signup">
        <label for="login" class="slide login">Login</label>
        <label for="signup" class="slide signup">Signup</label>
        <div class="slider-tab"></div>
      </div>
      <div class="form-inner">
        <!--       login form      -->
        <form action="signin.php" class="login" method="post" >
          <div class="field">
            <input type="text" name="emailLogin" placeholder="Email Address" required>
          </div>
          <div class="field">
            <input type="password" name="passwordLogin" placeholder="Password" required>
          </div>
          <div class="field btn">
            <div class="btn-layer"></div>
            <input type="submit" value="Login" id="login_btn">
          </div>
          <div class="signup-link">Not a member? <a href="">Signup now</a></div>
        </form>
        <!--    end of login form    -->

        <!--        signup form       -->
        <form action="register.php" class="signup" method="post">
          <div class="field">
            <input type="text" name="email" placeholder="Email Address"  required>
          </div>
          <div class="field">
            <input type="password" name="password" placeholder="Password" required>
          </div>
          <div class="field btn">
            <div class="btn-layer"></div>
            <input type="submit" value="Signup">
          </div>
        </form>
        <!--    end of signup form       -->
      </div>
    </div>
  </div>
    <!--End of Login / Signup-->


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
                        <li><a class="button-circle button-circle-xs button-circle-white" href="https://el-gr.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a class="button-circle button-circle-xs button-circle-white" href="https://twitter.com/?lang=el" target="_blank"><i class="fab fa-twitter"></i></a></li>
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
<script src="../assets/js/login.js"></script>
</body>
</html>