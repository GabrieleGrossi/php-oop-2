<?php
include_once __DIR__ .'/Products.php';
class Toys extends Products{
    public $color;
    public $noisy;

    function __constructed($color, $noisy, $name, $price, $image, $categories){
        parent::__construct($name, $price, $image, $categories);
        $this->color = $color;
        $this->noisy = $noisy;
    }
}