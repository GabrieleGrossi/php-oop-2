<?php
include_once __DIR__ .'/Products.php';
class Toys extends Products{
    public $color;
    public $noisy;
    public static $category = "Toys";

    function __constructed($color, $noisy, $name, $price, $image, $category){
        //parent::__construct($name, $price, $image, $category);
        $this->color = $color;
        $this->noisy = $noisy;
    }
}