<?php
include_once __DIR__ . '/Product.php';
class Kennel extends Product
{
    public $size;

    function __construct($name, $price, $image, $category,$size){
        parent::__construct($name, $price, $image, $category);
        $this->size = $size;
    }
}