<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende **prodotti** per animali.
I prodotti sono categorizzati, le **categorie** sono Cani o Gatti.
I prodotti saranno oltre al **cibo**, anche **giochi**, **cucce**, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, 
icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). -->

<?php

include_once "./models/Categoria.php";
include_once "./models/Prodotto.php";
include_once "./models/Cibo.php";
include_once "./models/Gioco.php";
include_once "./models/Cuccia.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Pet store</title>
</head>

<body>
    <!-- $cuccia_1 = new Cuccia("Cuccia Gatto", "img-cuccia", 32, $categoria_2, 120, 170); -->
    <h1 class="fw-bold text-center">PET STORE</h1>
    <div class="container d-flex gap-3">
        <div class="card" style="width: 33%;">
            <img src="<?= $cuccia_1->immagine ?>" class="card-img-top img-fluid mt-2" alt="...">
            <div class="card-body mt-5">
                <p class="card-text text-center fw-bold"><?= $cuccia_1->name ?></p>
                <p class="text-center fs-4"><i class="<?= $cuccia_1->categoria->name ?>"></i></p>
                <p class="card-text">Prezzo: €<?= $cuccia_1->prezzo ?></p>
                <p class="card-text">Lunghezza: <?= $cuccia_1->lunghezza ?>cm</p>
                <p class="card-text">Larghezza: <?= $cuccia_1->larghezza ?>cm</p>

            </div>
        </div>

        <div class="card" style="width: 33%;">
            <img src="<?= $gioco_1->immagine ?>" class="card-img-top img-fluid mt-2" alt="...">
            <div class="card-body">
                <p class="card-text text-center fw-bold"><?= $gioco_1->name ?></p>
                <p class="text-center fs-4"><i class="<?= $cuccia_1->categoria->name ?>"></i></p>
                <p class="card-text">Prezzo: €<?= $gioco_1->prezzo ?></p>
                <p class="card-text">Colore: <?= $gioco_1->colore ?></p>
                <p class="card-text">Materiale: <?= $gioco_1->materiale ?></p>
            </div>
        </div>


        <div class="card" style="width: 33%;">
            <img src="<?= $cibo_1->immagine ?>" class="card-img-top img-fluid mt-2" alt="...">
            <div class="card-body">
                <p class="card-text text-center fw-bold"><?= $cibo_1->name ?></p>
                <p class="text-center fs-4"><i class="<?= $cibo_1->categoria->name ?>"></i></p>
                <p class="card-text">Prezzo: €<?= $cibo_1->prezzo ?></p>
                <p class="card-text">Scadenza: <?= $cibo_1->scadenza ?></p>
                <p class="card-text">Gusto: <?= $cibo_1->gusto ?></p>
            </div>
        </div>

    </div>

</body>

</html>