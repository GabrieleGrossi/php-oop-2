<?php
class Products{
    public $name;
    public $price;
    public $image;
    public $category;

    function _construct($name, $price, $image, $category){
        $this->name=$name;
        $this->price=$price;
        $this->image=$image;
        $this->category=$category;

    }
}