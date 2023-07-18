<!--
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).--> 

<?php
include __DIR__.'/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- MyStyle -->
    <link rel="stylesheet" href="./Style/style.css">
    <title>PHP-OOP-2</title>
</head>
<body>
    <main>
        <h1>
            E-Commerce per animali
        </h1>
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex flex-wrap">
                    <?php            
                        foreach ($Products as $Product) {
                    ?>
                        
                        <div class="card mx-3 my-5" style="width: 18rem;">
                            <img src="
                                        <?php
                                            echo $Product->image;
                                        ?>" alt="Img product" class="card-img-top" style="width: auto; height: 200px; object-fit:contain;">
                            <div class="card-body d-flex flex-column m-0 p-0">
                                <h5 class="card-title">
                                    Nome: 
                                        <?php 
                                            echo $Product->name;
                                        ?>
                                </h5>
                                <button type="button" class="btn btn-warning my-3">
                                    Prezzo : 
                                        <?php
                                            echo $Product->price;
                                        ?>
                                    $
                                </button>
                                <span class="card-text">
                                    Categoria : 
                                        <?php
                                            echo $Product->category;
                                        ?>
                                </span>
                                <span class="card-text">
                                    Animale:
                                        <?php
                                        if ($Product->animal == 'Cane') {
                                            ?><span> Cane <i class="fa-solid fa-dog"> </i></span><?php
                                        } elseif ($Product->animal == 'Gatto') {
                                            ?><span></i> Gatto <i class="fa-solid fa-cat"> </i> </span><?php
                                        }
                                        ?>
                                </span>
                                <?php 
                                    if ($Product->category == 'Cibo') {
                                ?>
                                        <span>
                                            Proteico: 
                                            <?php 
                                                echo $Product->protein 
                                            ?>
                                        </span>
                                        <span>
                                            Peso: 
                                            <?php 
                                                echo $Product->weight 
                                            ?>
                                        </span>
                                <?php
                                    } elseif ($Product->category == 'Gioco') {
                                ?>
                                        <span>
                                            Colore: 
                                            <?php 
                                                echo $Product->color 
                                            ?>
                                        </span>
                                        <span>
                                            Rumoroso:
                                            <?php 
                                                echo $Product->noisy 
                                            ?>
                                        </span>
                                <?php
                                    } elseif ($Product->category == 'Cuccia') {
                                ?>
                                    <span>
                                        Taglia:
                                        <?php 
                                            echo $Product->size 
                                        ?>
                                    </span>
                                <?php
                                    } else {                                        
                                    }
                                ?>
                            </div>
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