<?php
include_once __DIR__.'/Toys.php';
include_once __DIR__.'/Kennel.php';
include_once __DIR__.'/Food.php';
class Products{
    public $name;
    public $price;
    public $image;
    public static $category = "Categoria"

    function _construct($name, $price, $image, $category){
        $this->name=$name;
        $this->price=$price;
        $this->image=$image;
        $this->category=$category;

    }
}