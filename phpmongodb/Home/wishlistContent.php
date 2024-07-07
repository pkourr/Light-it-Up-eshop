<?php
require '../vendor/autoload.php';

// Start a session if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


// Connect to MongoDB
$client = new MongoDB\Client;
$eshopdb = $client->eshopdb;
$prodcollection = $eshopdb->prodcollection;

// Get the list of product IDs from the session
$wishlist = [];
if (isset($_SESSION['wishlist'])) {
    $wishlist = $_SESSION['wishlist'];
}

$wishlistItems = [];

// Fetch the products from the collection
foreach ($wishlist as $itemId) {
    $item = $prodcollection->findOne(['_id' => $itemId]);
    array_push($wishlistItems, $item);
}

// Display the products in the wishlist
foreach ($wishlistItems as $item) {
    $wishlistCont = <<<EOD
 
                        <tbody>
                        <tr>
                            <th scope="row" class="parent-rmvBtn" data-id="{$item['_id']}"><a href="wishlist.php" class="rmvBtn">x</a></th>
                            <td class="product-thumbnail">
                                <a href="#"><img src="../assets/images/{$item['image']}" alt=""></a>
                            </td>
                            <td>{$item['name']}</td>
                            <td>{$item['price']}€</td>
                            <td>In Stock</td>
                            <td class="button-parent" data-id="{$item['_id']}">
                                <a class="button-circle button-circle-md button-circle-gray" href="#"><i class="ti-shopping-cart" href="#"></i></a>
                            </td>
                        </tr>
                        </tbody>
                    
EOD;

    echo $wishlistCont;
}

