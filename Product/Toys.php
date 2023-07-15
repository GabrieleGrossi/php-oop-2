<?php
include_once __DIR__ .'/Products.php';
class Toys extends Products{
    public $color;
    public $noisy;

    function __constructed($name, $price, $image, $category,$color, $noisy){
        parent::__construct($name, $price, $image, $category);
        $this->color = $color;
        $this->noisy = $noisy;
    }
}