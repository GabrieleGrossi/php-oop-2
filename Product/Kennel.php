<?php
include_once __DIR__ . '/Products.php';
class Kennel extends Products
{
    public $size;

    function __construct()
    {
        parent::__construct($size, $name, $price, $image, $categories);
        $this->size = $size;
    }
}