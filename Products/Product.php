<?php
include_once __DIR__.'/Toy.php';
include_once __DIR__.'/Kennel.php';
include_once __DIR__.'/Food.php';
class Product{
    public $name;
    public $price;
    public $image;
    public $category;

    function __construct($name, $price, $image, $category){
        $this->name=$name;
        $this->price=$price;
        $this->image=$image;
        $this->category=$category;
    }
}