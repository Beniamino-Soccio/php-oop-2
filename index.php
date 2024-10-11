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
// new Products("croccantini", 9.89, "cibo", "https://www.whiskas.it/sites/g/files/fnmzdf2106/files/2022-11/MicrosoftTeams-image%20%2811%29.png");
// var_dump(new Product("croccantini", 9.89, "https://www.whiskas.it/sites/g/files/fnmzdf2106/files/2022-11/MicrosoftTeams-image%20%2811%29.png", ))

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php oop e-commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <main class="container">
        <h1 class="text-center fw-bold ">PHP OOP E-COMMERCE</h1>
        <!-- <div class="card" style="width: 18rem;">
            <img src="<?= $this->imgUrl ?>" class="card-img-top" alt="">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div> -->

    </main>
</body>
</html>