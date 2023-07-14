<?php
include_once __DIR__ .'/Products.php';
class Toys extends Products{
    public $color;
    public $noisy;

    function __constructed($color, $noisy)
        $this->color = $color;
        $this->noisy = $noisy;
    }
}