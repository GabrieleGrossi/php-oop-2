<?php
include_once __DIR__ .'/Product.php';
class Toy extends Product{
    public $color;
    public $noisy;

    function __construct($name, $price, $image, $category, $color, $noisy){
        parent::__construct($name, $price, $image, $category);
        $this->color = $color;
        $this->noisy = $noisy;
    }
}