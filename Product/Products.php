<?php
class Products{
    public $name;
    public $price;
    public $image;
    public $categories;

    function _construct($name, $price, $image, $categories){
        $this->nome=$name;
        $this->prezzo=$price;
        $this->immagine=$image;
        $this->categoria=$categories;

    }
}