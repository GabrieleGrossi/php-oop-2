<?php
include_once __DIR__ . '/Products.php';
class Kennel extends Products
{
    public $size;

    function __construct($size){
        parent::__construct($size);
        $this->size = $size;
    }
}