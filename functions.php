<?php
//require mysqli connection
require ('database/DatabaseController.php');


//require product class
require ('database/product-dispaly.php');
//require Cart class
require ('database/add_to_cart.php');

// database object
$db = new DBController();

// product object 
$product  = new Product($db); 

$product_shuffle = $product->getData();
// cart object 
$Cart  = new Cart($db);
