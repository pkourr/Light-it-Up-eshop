<?php
require '../vendor/autoload.php';
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Connect to MongoDB
$client = new MongoDB\Client("mongodb://localhost:27017");
$eshopdb = $client->eshopdb;
$prodcollection = $eshopdb->prodcollection;

// Get the _id of the products from the session
$selected_product_ids = $_SESSION['selected_product_ids'];

// Query the prodcollection for the selected products
$selected_products = $prodcollection->find([
    '_id' => [ '$in' => $selected_product_ids ]
]);
$totalPrice = 0;
// Iterate through the selected products
foreach ($selected_products as $product) {
    $checkout = <<<EOD
        <tbody>
                            <tr>
                                <th scope="row">{$product['name']} x 1</th>
                                <td>{$product['price']}€</td>
                            </tr>
                            
EOD;
echo $checkout;
$totalPrice = $totalPrice + $product['price'];
}

$checkoutCont = <<<EOD
                            <tr>
                                <th scope="row">Subtotal</th>
                                <td>{$totalPrice}€</td>
                            </tr>
                            <tr>
                                <th scope="row">Shipping</th>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" checked>
                                        <label class="form-check-label" for="exampleRadios2">
                                            Free shipping
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">
                                            Local pickup
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Total</th>
                                <td>{$totalPrice}€</td>
                            </tr>
                            </tbody>
EOD;
echo $checkoutCont;
?>
