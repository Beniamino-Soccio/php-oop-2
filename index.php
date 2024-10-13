<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:

L'e-commerce vende prodotti per animali.

I prodotti sono categorizzati, le categorie sono Cani o Gatti.

I prodotti saranno oltre al cibo, anche giochi, cucce, etc.

Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria 
ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).

BONUS (Opzionale):

Il cliente potrà sia comprare i prodotti come ospite, senza doversi registrarsi nello store, oppure può iscriversi e creare un account per ricevere cosi il 20% di sconto.

Il cliente effettua il pagamento dei prodotti nel carrello con la carta di credito, che non deve essere scaduta. 
-->

<?php
require_once __DIR__ . "/classes/Product.php";
require_once __DIR__ . "/classes/Game.php";
require_once __DIR__ . "/classes/Food.php";
require_once __DIR__ . "/classes/Kennel.php";
require_once __DIR__ . "/classes/Category.php";

$dogsCategory = new Category("dog", "https://cdn-icons-png.flaticon.com/512/620/620851.png");
$catsCategory = new Category("cats", "https://cdn.icon-icons.com/icons2/2070/PNG/512/cat_icon_125794.png");

$croccantiniCats = new Product("croccantini", 9.89, "https://www.whiskas.it/sites/g/files/fnmzdf2106/files/2022-11/MicrosoftTeams-image%20%2811%29.png", $catsCategory, 15, 2, 5 );
$croccantiniDogs = new Product("croccantini", 8.57, "https://rep.grupposme.net/RepAP?code=D1446868&skey=968356899d00369a281ad152d81484e5&resize=500", $dogsCategory, 20, 3, 1 );
$cordaDogs = new Product("corda per cani", 15.18, "https://arcaplanet.vtexassets.com/arquivos/ids/223864/trixie-cane-gioco-corda.jpg?v=637454736645100000", $dogsCategory, 8, 7, 2 );
$pallinaCats = new Product("pallina per gatti", 7.83, "https://cdn.geapetshop.it/uploads/2020/09/4132.jpg", $catsCategory, 13, 5, 2 );
$cucciaCats = new Product("cuccia per gatti", 25.99, "https://www.bauzaar.it/media/catalog/product/g/r/grafiche-magento-bauzaar_-_2023-11-09t182512.218_1.jpg", $catsCategory, 5, 9, 3 );
$cucciaDogs = new Product("cuccia per cani", 27.81, "https://www.gardenhome.it/76033-large_default/cuccia-per-cane-da-esterno-con-tetto-apribile-pino-impregnato.jpg", $dogsCategory, 3, 6, 9 );

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php oop e-commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body class="p-5">
    <main class="container">
        <h1 class="text-center fw-bold mb-5">PHP OOP E-COMMERCE</h1>
        <div class="cards-products row justify-content-evenly">
            <div class="col-4 d-flex justify-content-center mb-5">
                <div class="card" style="width: 18rem;">
                <img src="<?= $croccantiniCats->imgUrl ?>" class="card-img-top" alt="">
                <div class="card-body text-center">
                    <p class="card-text">Nome: <?= $croccantiniCats->name ?></p>
                    <p class="card-text">Prezzo: €<?= $croccantiniCats->price ?></p>
                    <p class="card-text">n. prodotti: <?= $croccantiniCats->numberInStock ?></p>
                </div>
            </div>
            </div>
            <div class="col-4 d-flex justify-content-center mb-5">
                <div class="card" style="width: 18rem;">
                    <img src="<?= $croccantiniDogs->imgUrl ?>" class="card-img-top" alt="">
                    <div class="card-body text-center">
                        <p class="card-text">Nome: <?= $croccantiniDogs->name ?></p>
                        <p class="card-text">Prezzo: €<?= $croccantiniDogs->price ?></p>
                        <p class="card-text">n. prodotti: <?= $croccantiniDogs->numberInStock ?></p>
                    </div>
                </div>
            </div>
            <div class="col-4 d-flex justify-content-center mb-5">
                <div class="card" style="width: 18rem;">
                <img src="<?= $cordaDogs->imgUrl ?>" class="card-img-top" alt="">
                <div class="card-body text-center">
                    <p class="card-text">Nome: <?= $cordaDogs->name ?></p>
                    <p class="card-text">Prezzo: €<?= $cordaDogs->price ?></p>
                    <p class="card-text">n. prodotti: <?= $cordaDogs->numberInStock ?></p>
                </div>
            </div>
            </div>
            <div class="col-4 d-flex justify-content-center mb-5">
                <div class="card" style="width: 18rem;">
                <img src="<?= $pallinaCats->imgUrl ?>" class="card-img-top" alt="">
                <div class="card-body text-center">
                    <p class="card-text">Nome: <?= $pallinaCats->name ?></p>
                    <p class="card-text">Prezzo: €<?= $pallinaCats->price ?></p>
                    <p class="card-text">n. prodotti: <?= $pallinaCats->numberInStock ?></p>
                </div>
            </div>
            </div>
            <div class="col-4 d-flex justify-content-center mb-5">
                <div class="card" style="width: 18rem;">
                <img src="<?= $cucciaCats->imgUrl ?>" class="card-img-top" alt="">
                <div class="card-body text-center">
                    <p class="card-text">Nome: <?= $cucciaCats->name ?></p>
                    <p class="card-text">Prezzo: €<?= $cucciaCats->price ?></p>
                    <p class="card-text">n. prodotti: <?= $cucciaCats->numberInStock ?></p>
                </div>
            </div>
            </div>
            <div class="col-4 d-flex justify-content-center mb-5">
                <div class="card" style="width: 18rem;">
                <img src="<?= $cucciaDogs->imgUrl ?>" class="card-img-top" alt="">
                <div class="card-body text-center">
                    <p class="card-text">Nome: <?= $cucciaDogs->name ?></p>
                    <p class="card-text">Prezzo: €<?= $cucciaDogs->price ?></p>
                    <p class="card-text">n. prodotti: <?= $cucciaDogs->numberInStock ?></p>
                </div>
            </div>
            </div>
            
            
            
            
            
            
        </div>

    </main>
</body>
</html>