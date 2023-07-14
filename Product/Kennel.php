<?php
include_once __DIR__ . '/Products.php';
class Kennel extends Products
{
    public $size;
    public static $category = "Kennel"

    function __construct($size, $name, $price, $image, $category){
        parent::__construct($name, $price, $image, $category);
        $this->size = $size;
    }
}