<?php 

class Categorie {
    // variabili d'istanza;
    private $cane="cane";
    private $gatto="gatto";
    private $pesce="pesce";
    private $ucello="uccello";
    // costruttore 
    public function __construct($cattegoria){
        if ($cattegoria === $this->cane) {
            $this->cane;
        }
    }

} 

?>