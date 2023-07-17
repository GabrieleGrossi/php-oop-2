<!--
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).--> 

<?php
include __DIR__.'/Products/Product.php';
include __DIR__.'/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>PHP-OOP-2</title>
</head>
<body>
    <main>
        <h1>
            E-Commerce per animali
        </h1>
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex">
                    <?php            
                        foreach ($dogProducts as $dogProduct) {
                    ?>
                        
                        <div class="card mx-5 mt-5" style="width: 18rem;">
                            <img src="
                                        <?php
                                            echo $dogProduct->image;
                                        ?>" alt="Img product" class="card-img-top" style="width: auto; height: 200px; object-fit:contain;">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Nome: 
                                        <?php 
                                            echo $dogProduct->name;
                                        ?>
                                </h5>
                            </div>
                            <span class="card-text">
                                Prezzo : 
                                    <?php
                                        echo $dogProduct->price;
                                    ?>
                                $
                            </span>
                            <span class="card-text">
                                Categoria : 
                                    <?php
                                        echo $dogProduct->category;
                                    ?>
                            </span>
                            <?php 
                                    if ($dogProduct->category == 'Cibo') {
                                        ?>
                                            <span>
                                                Proteico: 
                                                <?php 
                                                    echo $dogProduct->protein 
                                                ?>
                                            </span>
                                            <span>
                                                Peso: 
                                                <?php 
                                                    echo $dogProduct->weight 
                                                ?>
                                            </span>
                                        <?php
                                    } elseif ($dogProduct->category == 'Gioco') {
                                        ?>
                                            <span>
                                                Colore: 
                                                <?php 
                                                    echo $dogProduct->color 
                                                ?>
                                            </span>
                                            <span>
                                                Rumoroso:
                                                <?php 
                                                    echo $dogProduct->noisy 
                                                ?>
                                            </span>
                                        <?php
                                    } elseif ($dogProduct->category == 'Cuccia') {
                                        ?>
                                            <span>
                                                Taglia:
                                                <?php 
                                                    echo $dogProduct->size 
                                                ?>
                                            </span>
                                        <?php
                                    } else {
                                        ?>
                                        <?php
                                    }
                                        ?>
                        </div>
                    <?php
                        }
                    ?>

                </div>
            </div>        
            <div class="row">
                <div class="col-12 d-flex">
                    <?php       
                        foreach ($catProducts as $catProduct) {
                    ?>
                        
                        <div class="card mx-5 mt-5" style="width: 18rem;">
                            <img src="
                                        <?php
                                            echo $catProduct->image;
                                        ?>" alt="Img product" class="card-img-top" style="width: auto; height: 200px; object-fit:contain;">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Nome: 
                                        <?php 
                                            echo $catProduct->name;
                                        ?>
                                </h5>
                            </div>
                            <span class="card-text">
                                Prezzo : 
                                    <?php
                                        echo $catProduct->price;
                                    ?>
                                    $
                            </span>
                            <span class="card-text">
                                Categoria : 
                                    <?php
                                        echo $catProduct->category;
                                    ?>
                            </span>
                            <?php 
                                    if ($catProduct->category == 'Cibo') {
                                        ?>
                                            <span>
                                                Proteico: 
                                                <?php 
                                                    echo $catProduct->protein 
                                                ?>
                                            </span>
                                            <span>
                                                Peso: 
                                                <?php 
                                                    echo $catProduct->weight 
                                                ?>
                                            </span>
                                        <?php
                                    } elseif ($catProduct->category == 'Gioco') {
                                        ?>
                                            <span>
                                                Colore: 
                                                <?php 
                                                    echo $catProduct->color
                                                ?>
                                            </span>
                                            <span>
                                                Rumoroso: 
                                                <?php 
                                                    echo $catProduct->noisy 
                                                ?>
                                            </span>
                                        <?php
                                    } elseif ($catProduct->category == 'Cuccia') {
                                        ?>
                                            <span>
                                                Taglia:
                                                <?php 
                                                    echo $catProduct->size;
                                                ?>
                                            </span>
                                        <?php
                                    } else {
                                        ?>
                                        <?php
                                    }
                                        ?>
                        </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </main>
</body>
</html>