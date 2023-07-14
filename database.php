<?php
include_once __DIR__ . '/Product/Food.php';
include_once __DIR__ . '/Product/Kennel.php';
include_once __DIR__ . '/Product/Toys.php';
include_once __DIR__ . '/Product/Products.php';

$dogProducts = [
    $first = new Products(
        'Ciotola per cani', 
        '23,59',
        'https://m.media-amazon.com/images/I/61nKznhtbvL._AC_UL320_.jpg',
        'Prodotto',
    ),
    $second = new Food (
        'Croccantini',
        '54,90',
        'https://m.media-amazon.com/images/I/81Rs5jh2x8L._AC_UL320_.jpg',
        'Cibo',
        'Proteico',
        'Kg 14',
    ),
    $third = new Kennel(
        'Piccola',
        'Cuccia per cane',
        '24,43',
        'https://m.media-amazon.com/images/I/61hBb9nFtxS._AC_UL320_.jpg',
        'Cuccia',
    ),
    $fourth = new Toys(
        'Palla per cani',
        '12,69',
        'https://m.media-amazon.com/images/I/61oaFtJA3GL._AC_UL320_.jpg',
        'Gioco',
        'Molto rumoroso',
        'Rosso',
    )
]
?>