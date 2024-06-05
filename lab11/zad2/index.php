<?php

require_once 'Product.php';
require_once 'Cart.php';

$product1 = new Product("Laptop", 1500, 1);
$product2 = new Product("Phone", 800, 2);

$cart = new Cart();
$cart->addProduct($product1);
$cart->addProduct($product2);

echo $cart;

$cart->removeProduct($product1);

echo "\n\nPo usunięciu produktu:\n";
echo $cart;
?>