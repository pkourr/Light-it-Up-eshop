<?php
require 'vendor/autoload.php';

$client = new MongoDB\Client;
$eshopdb = $client->eshopdb;
$result1 = $eshopdb->createCollection('prodcollection');
var_dump($result1);

?>