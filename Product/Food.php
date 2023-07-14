<?php
include_once __DIR__ . '/Products.php';
class Food extends Products
{
    public $protein;
    public $weight;

    function __construct($name, $price, $image, $category, $protein, $weight){
        parent::__construct($name, $price, $image, $category);
        $this->protein = $protein;
        $this->weight = $weight;
    }
}