<?php
require '../vendor/autoload.php';

// Start a session if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Get product id and action from AJAX request
$itemId = $_POST['itemId'];
$action = $_POST['action'];

// Get the current wishlist for the logged-in user
$wishlist = isset($_SESSION['wishlist']) ? $_SESSION['wishlist'] : [];

// Perform the desired action
if ($action === 'add') {

// Add the product to the wishlist
array_push($wishlist, $itemId);
}
elseif ($action === 'remove') {
// Remove the product from the wishlist
    $index = array_search($itemId, $wishlist);
    if ($index !== false) {
        array_splice($wishlist, $index, 1);
    }
}

// Update the wishlist in the session
$_SESSION['wishlist'] = $wishlist;


?>