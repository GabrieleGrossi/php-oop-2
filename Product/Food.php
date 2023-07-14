<?php
include_once __DIR__ . '/Products.php';
class Food extends Products
{
    public $protein;
    public $weight;
    public static $category = "Food";

    function __construct($protein, $weight, $name, $price, $image, $category){
        //parent::__construct($name, $price, $image, $category);
        $this->protein = $protein;
        $this->weight = $weight;
    }
}