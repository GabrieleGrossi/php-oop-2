<?php
include_once __DIR__ . '/Products/Food.php';
include_once __DIR__ . '/Products/Kennel.php';
include_once __DIR__ . '/Products/Toy.php';
include_once __DIR__ . '/Products/Product.php';

$dogProducts = [
    $first = new Product(
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
        'Cuccia per cane',
        '24,43',
        'https://m.media-amazon.com/images/I/61hBb9nFtxS._AC_UL320_.jpg',
        'Cuccia',
        'Piccola',
    ),
    $fourth = new Toy(
        'Palla per cani',
        '12,69',
        'https://m.media-amazon.com/images/I/61oaFtJA3GL._AC_UL320_.jpg',
        'Gioco',
        'Rosso',
        'Molto rumoroso',
    ),
    ];

$catProducts = [
    $first = new Product(
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
        'Cuccia per gatti',
        '19,99',
        'https://m.media-amazon.com/images/I/81dIZOQXLqL._AC_UL320_.jpg',
        'Cuccia',
        'Piccola',
    ),
    $fourth = new Toy(
        'Gioco per gatti',
        '22,99',
        'https://m.media-amazon.com/images/I/61Wso2mpiiL._AC_UL320_.jpg',
        'Gioco',
        'Variabile',
        'Molto rumoroso',
        )
    ];
?>