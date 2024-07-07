<?php
require '../vendor/autoload.php';

$client = new MongoDB\Client("mongodb://127.0.0.1/");
$eshopdb = $client->eshopdb;
$prodcollection = $eshopdb->prodcollection;

if (isset($_GET['searchForm'])) {
    $prodName = $_GET['searchForm'];
    $documentlist = $prodcollection->find([
        'name' => ['$regex' => $prodName, '$options' => 'i']
    ]);

    foreach ($documentlist as $product) {
        $prdct = <<<EOD
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="product-box">
                        <div class="product-img">
                            <a href="#">
                                <img src="../assets/images/{$product['image']}" alt="">
                            </a>
                            <div class="product-badge-left">
                                <span class="font-small uppercase font-family-secondary font-weight-medium">New</span>
                            </div>
                        </div>
                        <div class="product-title">
                            <h6 class="font-weight-medium"><a href="#">{$product['name']}</a></h6>
                            <div class="price-and-cart">
                                <div class="price">
                                    <span>{$product['price']}€</span>
                                </div>
                                <div class="add-to-cart" data-id="{$product['_id']}">
                                    <a class="button-text-1" href="#">Add to Cart</a>
                                </div>
                            </div>
                            <div class="add-to-wishlist" data-id="{$product['_id']}">
                                <a class="wishlistBtn" href="#"><i class="far fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
EOD;
        echo $prdct;
    }
}
?>