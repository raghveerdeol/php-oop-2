<?php 

class Categorie {
    // variabili d'istanza;
    private static $cane="cane";
    private static $gatto="gatto";
    private static $pesce="pesce";
    private static $ucello="uccello";
    // costruttore 
    public function __construct($cattegoria){
        if ($cattegoria == self::$cane) {
            self::$cane;
        }
    }

} 

?>