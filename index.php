<?php 
// Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
// L'e-commerce vende prodotti per gli animali.
// I prodotti saranno:
// cibo
// giochi
// accessori (cucce, guinzagli, lettiere, acquari, etc).
// I prodotti possono appartenere a una tra queste categorie:
// Cane,
// Gatto,
// Uccelli,
// Pesci
// Una volta create le classi che descrivono il nostro sistema:
// - instanziate prima tutte le categorie che ci serviranno,
// - poi create alcuni prodotti appartenenti a differenti categorie 
// - e stampate delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, accessorio).
// BONUS:
// Definite una proprietà privata ed un metodo privato all'interno di una classe, assegnategli un valore e mostratelo nelle card (ricordatevi dell'esempio del codice prodotto visto a lezione).
require_once __DIR__ . "/classi/Prodotti.php";
require_once __DIR__ . "/classi/Categorie.php";
require_once __DIR__ . "/classi/Cibo.php";
require_once __DIR__ . "/classi/Accessori.php";
require_once __DIR__ . "/classi/Giochi.php";
$prodotto = new Prodotti("","palla", "2,40£");
var_dump($prodotto);
$accessorio = new Accessori("","collana", "4.00$", "gomma", "L", new Categorie("cane"));
var_dump($accessorio);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BoolShop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <main>

    </main>
</body>
</html>