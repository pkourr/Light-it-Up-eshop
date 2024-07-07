<?php
session_start();

if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($username === "admin" && $password === "admin"){
        //  Store the login status
        $_SESSION['logged'] = true;
        //Here should redirect the user to the Admin Dashboard that is not implemented
        echo '<script>alert("Admin Signed in successfully! Press OK to continue.")</script>';
        echo '<script>
                setTimeout(function () { window.location.href = "adminLogin.php"; }, 500);
              </script>';

    }
    else {
        echo '<script>alert("Oop something went wrong. Please try again with different credentials.")</script>';
        echo '<script>
                setTimeout(function () { window.location.href = "adminLogin.php"; }, 500);
              </script>';
    }
}
?>