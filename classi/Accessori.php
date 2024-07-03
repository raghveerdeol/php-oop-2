
<?php 

class Accessori extends Prodotti{
    // variabili d'istanza;
    private $materiali;
    private $dimenzioni;
    private $categoria;
    // costruttore 
    public function __construct($image, $nomeArticolo, $prezzo, $materiali, $dimenzioni,$categoria){
        parent::__construct($image, $nomeArticolo, $prezzo);
        $this->materiali=$materiali;
        $this->dimenzioni=$dimenzioni;
        $this->categoria=$categoria;
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