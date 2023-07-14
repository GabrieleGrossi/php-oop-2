<?php
include_once __DIR__ . '/Products.php';
class Food extends Products
{
    public $protein;
    public $weight;

    function __construct($protein, $weight){
        $this->protein = $protein;
        $this->weight = $weight;
    }
}