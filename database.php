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
    ];

$catProducts = [
    $first = new Products(
        'Antiparassiti per gatti',
        '20,59',
        'https://m.media-amazon.com/images/I/81TT1ubwdjL._AC_UL320_.jpg',
        'Prodotto',
    ),
    $second = new Food (
        'Cibo per gatti',
        '14,29',
        'https://m.media-amazon.com/images/I/71CyV+7jdqL._AC_UL320_.jpg',
        'Cibo',
        'Proteico',
        '84gr per lattina'
    ),
    $third = new Kennel (
        'Small',
        'Cucccia per gatti',
        'Prez19,99zo',
        'https://m.media-amazon.com/images/I/81dIZOQXLqL._AC_UL320_.jpg',
        'Cuccia'
    ),
    $fourth = new Toys(
        'Gioco per gatti',
        '22,99',
        'https://m.media-amazon.com/images/I/61Wso2mpiiL._AC_UL320_.jpg',
        'Gioco',
        'Molto rumoroso',
        'Variabile',
    ),
]
?>