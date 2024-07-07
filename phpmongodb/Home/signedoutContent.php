<?php
require '../vendor/autoload.php';

if (empty($_SESSION['logged_in']) || $_SESSION['logged_in'] === false) {
    switch ($_SERVER['REQUEST_URI']) {
        case '/phpmongodb/Home/home.php':
            $SignedOut = <<<EOD
                    <!-- Extra -->
             <li><a href="login.php"> <i class="fas fa-sign-in-alt"></i></a></li>
EOD;
        case '/phpmongodb/Home/aboutus.php':
            $SignedOut = <<<EOD
                    <!-- Extra -->
             <li><a href="login.php"> <i class="fas fa-sign-in-alt"></i></a></li>
EOD;
            echo $SignedOut;
            break;
        case '/phpmongodb/Home/products1.php':
            $SignedOut = <<<EOD
                    <!-- Extra -->
             <li><a href="login.php"> <i class="fas fa-sign-in-alt"></i></a></li>
EOD;
            echo $SignedOut;
            break;
        case '/phpmongodb/Home/cart.php':
            $SignedOut = <<<EOD
                    <!-- Extra -->
             <li><a href="login.php"> <i class="fas fa-sign-in-alt"></i></a></li>
EOD;
            echo $SignedOut;
            break;
        case '/phpmongodb/Home/myprofile.php':
            $SignedOut = <<<EOD
                    <!-- Extra -->
             <li><a href="login.php"> <i class="fas fa-sign-in-alt"></i></a></li>
EOD;
            echo $SignedOut;
            break;
        case '/phpmongodb/Home/productsSearched.php':
            $SignedOut = <<<EOD
                    <!-- Extra -->
             <li><a href="login.php"> <i class="fas fa-sign-in-alt"></i></a></li>
EOD;
        case '/phpmongodb/Home/wishlist.php':
            $SignedOut = <<<EOD
                    <!-- Extra -->
             <li><a href="login.php"> <i class="fas fa-sign-in-alt"></i></a></li>
EOD;
            echo $SignedOut;
            break;
        case '/phpmongodb/Home/adminLogin.php':
            $SignedOut = <<<EOD
                    <!-- Extra -->
             <li><a href="login.php"> <i class="fas fa-sign-in-alt"></i></a></li>
EOD;
            echo $SignedOut;
            break;
        case '/phpmongodb/Home/checkout.php':
            echo '<script>
                        setTimeout(function () { window.location.href = "login.php"; }, 50);
                   </script>';
            break;
    }
}
?>