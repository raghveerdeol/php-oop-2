
<?php 

class accessori extends prodotti{
    // variabili d'istanza;
    private $materiali;
    private $dimenzioni;
    // costruttore 
    public function __construct($nomeArticolo, $prezzo, $materiali, $dimenzioni){
        parent::__construct($nomeArticolo, $prezzo);
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
        $this->materiali;
    }

    /**
     * Questa funzione permette di modificare la variabile d'istanza materiali;
     *
     * @param  $materiali
     * @return void
     */
    public function setMateriali($materiali){
        $this->materiali=$materiali;
    }

    /**
     * Questa funzione restituiscce la variabile d'istanza dimenzioni;
     *
     * @return void
     */
    public function getDimenzioni(){
        $this->dimenzioni;
    }

    /**
     * Questa funzione permette di modificare la variabile d'istanza dimenzioni;
     *
     * @param $dimenzioni
     * @return void
     */
    public function setDimenzioni($dimenzioni){
        $this->dimenzioni=$dimenzioni;
    }
}

?>