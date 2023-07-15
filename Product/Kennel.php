<?php
include_once __DIR__ . '/Products.php';
class Kennel extends Products
{
    public $size;

    function __construct($name, $price, $image, $category,$size){
        parent::__construct($name, $price, $image, $category);
        $this->size = $size;
    }
}