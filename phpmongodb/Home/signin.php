<?php
require '../vendor/autoload.php';
session_start();
$db = new MongoDB\Client("mongodb://localhost:27017");
$myusercollection = $db->eshopdb->usercollection;

if (isset($_POST['emailLogin']) && isset($_POST['passwordLogin'])) {
    $email = $_POST['emailLogin'];
    $password = $_POST['passwordLogin'];

    $userdata = $myusercollection->findOne(['email' => $email, 'password' => $password]);
    if (!empty($userdata)) {
        $_SESSION['logged_in'] = true;
        $_SESSION['_id'] = $userdata['_id'];
        echo '<script>alert("User Signed in successfully! Press OK to continue.")</script>';
        echo '<script>
                setTimeout(function () { window.location.href = "home.php"; }, 500);
              </script>';

    } else {
        echo '<script>alert("Unable to Log in. Try again with different credentials. Press OK to try again.")</script>';
        echo '<script>
                  setTimeout(function () { window.location.href = "login.php"; }, 500);
              </script>';
    }
}
?>

