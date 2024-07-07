<?php
require '../vendor/autoload.php';

$client = new MongoDB\Client;
$eshopdb = $client->eshopdb;
$prodcollection = $eshopdb->prodcollection;

$cart = [];
if (isset($_COOKIE['cart'])) {
    $cart = json_decode($_COOKIE['cart'], true);
}

if (!$cart) $cart = [];
$cartItems = [];

foreach ($cart as $itemId) {
    $item = $prodcollection->findOne(['_id' => $itemId]);
    array_push($cartItems, $item);
}
// start session
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$selected_product_ids = array_column($cartItems, '_id');
// storing cookie content in super global variable
$_SESSION['selected_product_ids'] = $selected_product_ids;

//Cart Content
$totalPrice = 0;
foreach ($cartItems as $item) {
    $cartContent = <<<EOD
                        <tr>
                            <th scope="row" data-id="{$item['_id']}" class="parent-remove-btn"><a href="#" class="remove-btn">x</a></th>
                            <td class="product-thumbnail">
                                <a href="#"><img src="../assets/images/{$item['image']}" alt=""></a>
                            </td>
                            <td>{$item['name']}</td>
                            <td>{$item['price']}€</td>
                            <td>
                                <form class="product-quantity">
                                    <div class="qnt">
                                        <input type="number" id="quantity" name="quantity" min="1" max="10" value="1">
                                    </div>
                                </form>
                            </td>
                            <td>{$item['price']}€</td>
                        </tr>
EOD;
    echo $cartContent;
    $totalPrice = $totalPrice + $item['price'];
}

$cart = <<<EOD
    </tbody>
                    </table>
                </div>
                <div class="col-12 col-xl-4">
                    <div class="bg-light-gray padding-40">
                        <h5 class="font-weight-normal">Cart totals</h5>
                        <table class="table cart-totals">
                            <tbody>
                            <tr>
                                <th scope="row">Subtotal</th>
                                <td>{$totalPrice}€</td>
                            </tr>
                            <tr>
                                <th scope="row">Shipping</th>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios2">
                                            Free shipping
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option2">
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
                        </table>
                        <a class="button button-md button-dark button-fullwidth margin-top-20" href="checkout.php">Proceed</a>
                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
EOD;
echo($cart);
?>