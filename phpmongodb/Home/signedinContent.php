<?php
require '../vendor/autoload.php';

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    switch ($_SERVER['REQUEST_URI']) {
        case '/phpmongodb/Home/home.php':
            $LogedIn = <<<'EOD'
                    <!-- Extra -->
             <li><a href="wishlist.php"><i class="fas fa-heart"></i></a></li>
             <li><a href="myprofile.php"><i class='fas fa-user-alt'></i></a></li>
             <li><a href="signout.php"> <i class="fas fa-sign-out-alt"></i></a></li>
EOD;
            echo $LogedIn;
            break;
        case '/phpmongodb/Home/aboutus.php':
            $LogedIn = <<<'EOD'
                    <!-- Extra -->
             <li><a href="wishlist.php"><i class="fas fa-heart"></i></a></li>
             <li><a href="myprofile.php"><i class='fas fa-user-alt'></i></a></li>
             <li><a href="signout.php"> <i class="fas fa-sign-out-alt"></i></a></li>
EOD;
            echo $LogedIn;
            break;
        case '/phpmongodb/Home/products1.php':
            $LogedIn = <<<EOD
                    <!-- Extra -->
             <li><a href="wishlist.php"><i class="fas fa-heart"></i></a></li>
             <li><a href="myprofile.php"><i class='fas fa-user-alt'></i></a></li>
             <li><a href="signout.php"> <i class="fas fa-sign-out-alt"></i></a></li>
EOD;
            echo $LogedIn;
            break;
        case '/phpmongodb/Home/cart.php':
            $LogedIn = <<<EOD
                    <!-- Extra -->
             <li><a href="wishlist.php"><i class="fas fa-heart"></i></a></li>
             <li><a href="myprofile.php"><i class='fas fa-user-alt'></i></a></li>
             <li><a href="signout.php"> <i class="fas fa-sign-out-alt"></i></a></li>
EOD;
        case '/phpmongodb/Home/myprofile.php':
            $LogedIn = <<<EOD
                    <!-- Extra -->
             <li><a href="wishlist.php"><i class="fas fa-heart"></i></a></li>
             <li><a href="myprofile.php"><i class='fas fa-user-alt'></i></a></li>
             <li><a href="signout.php"> <i class="fas fa-sign-out-alt"></i></a></li>
EOD;
            echo $LogedIn;
            break;
        case '/phpmongodb/Home/productsSearched.php':
            $LogedIn = <<<EOD
                    <!-- Extra -->
             <li><a href="wishlist.php"><i class="fas fa-heart"></i></a></li>
             <li><a href="myprofile.php"><i class='fas fa-user-alt'></i></a></li>
             <li><a href="signout.php"> <i class="fas fa-sign-out-alt"></i></a></li>
EOD;
            echo $LogedIn;
            break;
        case '/phpmongodb/Home/checkout.php':
            $LogedIn = <<<EOD
                    <!-- Extra -->
             <li><a href="wishlist.php"><i class="fas fa-heart"></i></a></li>
             <li><a href="myprofile.php"><i class='fas fa-user-alt'></i></a></li>
             <li><a href="signout.php"> <i class="fas fa-sign-out-alt"></i></a></li>
EOD;
            echo $LogedIn;
            break;
        case '/phpmongodb/Home/adminLogin.php':
            $LogedIn = <<<EOD
                    <!-- Extra -->
             <li><a href="wishlist.php"><i class="fas fa-heart"></i></a></li>
             <li><a href="myprofile.php"><i class='fas fa-user-alt'></i></a></li>
             <li><a href="signout.php"> <i class="fas fa-sign-out-alt"></i></a></li>
EOD;
            echo $LogedIn;
            break;
        case '/phpmongodb/Home/wishlist.php':
            $LogedIn = <<<EOD
                    <!-- Extra -->
             <li><a href="wishlist.php"><i class="fas fa-heart"></i></a></li>
             <li><a href="myprofile.php"><i class='fas fa-user-alt'></i></a></li>
             <li><a href="signout.php"> <i class="fas fa-sign-out-alt"></i></a></li>
EOD;
            echo $LogedIn;
            break;
    }
}
?>