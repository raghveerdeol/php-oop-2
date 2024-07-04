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
require_once __DIR__ . "/classi/traits/hasSize.php";

$categorie=[
    $cane= new Categoria("cane"),
    $gatto= new Categoria("gatto"),
    $pesce= new Categoria("pesce"),
    $uccello= new Categoria("uccello"),
];

$prodotti=[
$royalCanin = new Cibo("https://arcaplanet.vtexassets.com/arquivos/ids/300306/Royal-Canin-Mini-Adult-Alimento-Completo-per-Cani-Adulti-di-Piccola-Taglia-10120604-1.jpg","Royal Canin Mini Adult",$cane,  "€43.99", "545g", "prosciutto, riso"),
$almoHolistic = new Cibo("https://arcaplanet.vtexassets.com/arquivos/ids/300514/Almo-Nature-Holistic-Maintenance-Medium-Large-Tonno-e-Riso-10118806.jpg","Almo Nature Holistic Maintenance Medium Large Tonno e Riso",$cane,  "€44,99", "600g", "manzo, cereali"),
$almoCat = new Cibo("https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg","Almo Nature Cat Daily Lattina",$gatto,  "€34,99", "400g", "tonno, pollo, prosciutto"),
$mangimePesci = new Cibo("https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg","Mangime per Pesci Guppy in Fiocchi",$pesce,  "€2,95", "30g", "Pesci e sottoprodotti dei pesci, Cereali, Lievito, Alghes"),
$voliera = new Accessori("https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg","Voliera Wilma in Legnoa",$uccello,  "€184,99", "Legno", "M: L 83 x P 67 x H 153 cm"),
$cartucce = new Accessori("https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg","Cartucce Filtranti per Filtro EasyCrystal",$pesce,  "€2,29", "Materiale espanso", "ND"),
$kong = new Giochi("https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg","Kong Classic",$cane,  "€13,49", "Galleggia e rimbalza", "8,5 cm x 10 cm"),
$topini = new Giochi("https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg","Topini di peluche Trixie",$gatto,  "€4.99", "Morbido con codina in corda", "8,5 cm x 10 cm"),
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BoolShop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header>
        <h1>Boolshop</h1>
    </header>
    <main>
        <h2>I nostri prodotti</h2>
        <div class="card-list">
            <!-- cibo  -->
            <?php foreach ($prodotti as $key => $value) {?>
                <div class="card">
                    <img src="<?php echo $value->getImage(); ?>" alt="immagine prodotto">
                    <section class="info">
                        <h3><?php echo $value->getNomeArticolo() ;?></h3>
                        <p><?php echo $value->getIcon($value->getCategoria()->nome) ?> <?php echo $value->getCategoria()->nome; ?></p>
                        <p>Tipologia: <?php echo $value->getTipologia(); ?></p>
                        <p>Prezzo: <?php echo $value->getPrezzo(); ?></p>
                        <!-- cibo  -->
                        <?php if (get_class($value) === "Cibo") {?>
                            <p>Peso netto: <?php echo $value->getPesoNetto(); ?></p>
                            <p>Ingredineti: <?php echo $value->getIngredienti(); ?></p>
                        <?php } elseif (get_class($value) === "Accessori") {?>
                            <!-- accessori  -->
                            <p>Dimenzioni: <?php echo $value->getDimenzioni(); ?></p>
                            <p>Materiale: <?php echo $value->getMateriali(); ?></p>
                        <?php } elseif (get_class($value) === "Giochi") {?>
                            <!-- giochi  -->
                            <p>Dimenzioni: <?php echo $value->getDimenzioni(); ?></p>
                            <p>Caratteristiche: <?php echo $value->getCaratteristiche(); ?></p>
                        <?php } ?>
                    </section>
                </div>
            <?php } ?>
        </div>
    </main>
</body>
</html>