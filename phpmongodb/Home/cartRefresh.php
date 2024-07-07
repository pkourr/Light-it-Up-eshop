<?php
// Get the item's id and action from the AJAX request that is displayed in cart.php
$itemId = $_POST['itemId'];
$action = $_POST['action'];



// initialize the cart as an empty array
$cart = array();
// ckeck if a cookie already exist
if (isset($_COOKIE['cart'])) {
    // Decode the cart cookie into a PHP array
    $cart = json_decode($_COOKIE['cart'], true);
}

// make the corresponding action (add or remove)
if ($action === 'add') {
    array_push($cart, $itemId);
}
else if ($action === 'remove') {
    $index = array_search($itemId, $cart);
    if ($index !== false) {
        unset($cart[$index]);
    }
}


// store the cart that is refreshed as a cookie that lasts for 24hours
setcookie('cart', json_encode($cart), time() + 86400, '/');
?>