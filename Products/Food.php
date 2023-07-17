<?php
include_once __DIR__ . '/Product.php';
class Food extends Product
{
    public $protein;
    public $weight;

    function __construct($name, $price, $image, $category, $animal, $protein, $weight){
        parent::__construct($name, $price, $image, $category, $animal);
        $this->protein = $protein;
        $this->weight = $weight;
    }
}