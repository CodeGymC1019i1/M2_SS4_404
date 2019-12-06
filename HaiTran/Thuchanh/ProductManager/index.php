<?php

include_once "Product.php";
include_once "ProductManager.php";

use Services\ProductManager;
use Models\Product;

$productManager = new ProductManager();
$productManager->addProduct(new Product("Laptop"));
$productManager->addProduct(new Product("Mobile"));

$products = $productManager->getProducts();

for ($i = 0; $i < count($products); $i++) {
    echo $products[$i]->getName()."<br>";
}


