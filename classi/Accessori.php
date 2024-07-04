<?php 
require_once __DIR__ . "/traits/hasSize.php";

class Accessori extends Prodotti{
    // variabili d'istanza;
    use dimenzioni;
    private $materiali;
    private static $tipologia = "accessori";

    // costruttore 
    public function __construct($image, $nomeArticolo, $categoria, $prezzo, $materiali, $dimenzioni){
        parent::__construct($image, $nomeArticolo, $categoria, $prezzo);
        $this->materiali=$materiali;
        $this->dimenzioni=$dimenzioni;
    }

    // metodi 
    public function getTipologia(){
        return self::$tipologia;
    }
    /**
     * Questa funzione restituiscce la variabile d'istanza materiali;
     *
     * @return void
     */
    public function getMateriali(){
        return $this->materiali;
    }

    /**
     * Questa funzione permette di modificare la variabile d'istanza materiali;
     *
     * @param  $materiali
     * @return void
     */
    public function setMateriali($materiali){
        return $this->materiali=$materiali;
    }


}

?>