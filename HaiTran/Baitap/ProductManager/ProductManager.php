<?php

namespace Services;

class ProductManager
{
    private $products;

    public function __construct()
    {
        $this->products = [];
    }

    public function addProduct($product)
    {
        array_push($this->products, $product);
    }

    public function getProducts()
    {
        return $this->products;
    }
}
