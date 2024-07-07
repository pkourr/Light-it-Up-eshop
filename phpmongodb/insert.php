<?php
require 'vendor/autoload.php';

$client = new MongoDB\Client;
$eshopdb = $client->eshopdb;
$prodcollection = $eshopdb->prodcollection;

$insertManyResult = $prodcollection->insertMany([
    ['_id' => '1', 'name' => '2Pac Neon Led Canvas', 'price' => '89', 'image' => 'canvas_2pac.jpg'],
    ['_id' => '2', 'name' => 'Jordan Neon Led Canvas', 'price' => '89', 'image' => 'canvas_jordan.jpg.png'],
    ['_id' => '3', 'name' => 'Lightning Neon Led Sign', 'price' => '49', 'image' => 'led_strip_lighning.jpg.png'],
    ['_id' => '4', 'name' => 'Acropolis Neon Led Sign', 'price' => '59', 'image' => 'led_strip_acropolis.jpg.png'],
    ['_id' => '5', 'name' => 'Coffee Neon Led Sign', 'price' => '49', 'image' => 'led_strip_coffee.jpg.png'],
    ['_id' => '6', 'name' => 'Led Strip', 'price' => '19', 'image' => 'led_strip.jpg.png'],
    ['_id' => '7', 'name' => 'Neon Led Strip', 'price' => '29', 'image' => 'neon_led_strip.jpg'],
    ['_id' => '8', 'name' => 'Led Smart Lamp 1', 'price' => '9', 'image' => 'led_spart_lamp1.jpg'],
    ['_id' => '9', 'name' => 'Led Smart Lamp 2', 'price' => '9', 'image' => 'led_spart_lamp2.jpg']
]);

printf("Inserted %d documents", $insertManyResult->getInsertedCount());
var_dump($insertManyResult->getInsertedIds());
?>