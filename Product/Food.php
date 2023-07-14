<?php
include_once __DIR__ . '/Products.php';
class Food extends Products
{
    public $protein;
    public $weight;

    function __construct()
    {
        parent::__construct($protein, $weight, $name, $price, $image, $categories);
        $this->protein = $protein;
        $this->weight = $weight;
    }
}