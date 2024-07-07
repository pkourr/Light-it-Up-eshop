<?php
require '../vendor/autoload.php';
session_start();
if (!empty($_POST['email']) && strlen($_POST['password']) >= 5) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $client = new MongoDB\Client;
    $eshopdb = $client->eshopdb;
    $usercollection = $eshopdb->usercollection;

    // check if the email is already used
    $emailDupl = $usercollection->countDocuments(['email' => $email]);
    if ($emailDupl > 0) {
        echo '<script>alert("Email already exists. Close this window and try again with a different email.")</script>';
        return;
    }

    $user = ['email' => $email, 'password' => $password, 'firstName' => '', 'surname' => '', 'address' => ''];
    $userdata = $usercollection->insertOne($user);
    $credentials = $usercollection->findOne(['email' => $email]);
    if ($userdata->getInsertedCount()) {
        $_SESSION['logged_in'] = true;
        $_SESSION['_id'] = $credentials['_id'];
        echo '<script>alert("User Signed up successfully! Press OK to continue.")</script>';
        echo '<script>
    setTimeout(function () { window.location.href = "home.php"; }, 500);
    </script>';
    }
    else {
        echo 'Error, Try again with different credentials';
    }
}
else {
    echo '<script>alert("Hmm something went wrong. Close this window and try again with password bigger than 5 characters. ")</script>';
}
?>
