
<?php 

class Accessori extends Prodotti{
    // variabili d'istanza;
    private $materiali;
    private $dimenzioni;
    // costruttore 
    public function __construct($image, $nomeArticolo, $categoria, $prezzo, $materiali, $dimenzioni){
        parent::__construct($image, $nomeArticolo, $categoria, $prezzo);
        $this->materiali=$materiali;
        $this->dimenzioni=$dimenzioni;
    }

    // metodi 
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

    /**
     * Questa funzione restituiscce la variabile d'istanza dimenzioni;
     *
     * @return void
     */
    public function getDimenzioni(){
        return $this->dimenzioni;
    }

    /**
     * Questa funzione permette di modificare la variabile d'istanza dimenzioni;
     *
     * @param $dimenzioni
     * @return void
     */
    public function setDimenzioni($dimenzioni){
        return $this->dimenzioni=$dimenzioni;
    }
}

?>