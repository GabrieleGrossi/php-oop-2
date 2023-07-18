<?php
class Product{
    public $name;
    public $price;
    public $image;
    public $category;
    public $animal;

    function __construct($name, $price, $image, $category, $animal){
        $this->name=$name;
        $this->price=$price;
        $this->image=$image;
        $this->category=$category;
        $this->animal=$animal;
    }
}