<?php
session_start();
require '../vendor/autoload.php';

$db = new MongoDB\Client("mongodb://127.0.0.1/");
$usercollection = $db->eshopdb->usercollection;
$user = $usercollection->findOne(['_id' => $_SESSION['_id']]);

if (isset($_POST['firstname']) && isset($_POST['surname']) && isset($_POST['email']) && isset($_POST['address']) && strlen($_POST['password']) >= 5) {
    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];


        $updateResult = $usercollection->updateOne(
            ['_id' => $_SESSION['_id']],
            ['$set' => [
                'firstName' => $firstname,
                'surname' => $surname,
                'email' => $email,
                'password' => $password,
                'address' => $address
            ]]
        );

        if ($updateResult->getModifiedCount() > 0) {
            echo '<script>alert("Your profile info has been successfully updated")</script>';
            echo '<script>
                  setTimeout(function () { window.location.href = "myprofile.php"; }, 500);
              </script>';
        }
         else {
             echo '<script>alert("Failed to update your profile info!")</script>';
             echo '<script>
                  setTimeout(function () { window.location.href = "myprofile.php"; }, 500);
              </script>';
         }
}
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
                        <a class="m-link" href="checkout.php">Checkout</a>
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

    <!--   my profile -->
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
            </div>
            <div class="col-md-5 border-right">
                <form class="p-3 py-5"  method="post">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Name</label><input type="text" name="firstname" class="form-control" value="<?php echo $user['firstName']; ?>" placeholder="first name"></div>
                        <div class="col-md-6"><label class="labels">Surname</label><input type="text" name="surname" class="form-control" value="<?php echo $user['surname']; ?>" placeholder="surname"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Address</label><input type="text" name="address" class="form-control" placeholder="enter address" value="<?php echo $user['address']; ?>"></div>
                        <div class="col-md-12"><label class="labels">Email</label><input type="email" name="email" class="form-control" placeholder="enter email" value="<?php echo $user['email']; ?>"></div>
                        <div class="col-md-12"><label class="labels">Password</label><input type="password" name="password" class="form-control" value="" placeholder="Password"></div>
                    </div>
                    <div class="mt-5 text-center"><input class="btn btn-primary profile-button" value="Save Profile" type="Submit"></div>
                </form>
            </div>
    </div>
</div>
</div>

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
</body>
</html>