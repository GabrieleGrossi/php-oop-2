<?php
include_once __DIR__ .'/Product.php';
class Toy extends Product{
    public $color;
    public $noisy;

    function __construct($name, $price, $image, $category, $animal, $color, $noisy){
        parent::__construct($name, $price, $image, $category, $animal);
        $this->color = $color;
        $this->noisy = $noisy;
    }
}