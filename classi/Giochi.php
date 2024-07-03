
<?php 

class giochi extends prodotti{
    // variabili d'istanza;
    private $caratteristiche;
    private $dimenzioni;
    // costruttore 
    public function __construct($nomeArticolo, $prezzo, $caratteristiche, $dimenzioni){
        parent::__construct($nomeArticolo, $prezzo);
        $this->caratteristiche=$caratteristiche;
        $this->dimenzioni=$dimenzioni;
    }

    // metodi 
    /**
     * Questa funzione restituiscce la variabile d'istanza caratteristiche;
     *
     * @return void
     */
    public function getCaratteristiche(){
        $this->caratteristiche;
    }

    /**
     * Questa funzione permette di modificare la variabile d'istanza caratteristiche;
     *
     * @param  $caratteristiche
     * @return void
     */
    public function setCaratteristiche($caratteristiche){
        $this->caratteristiche=$caratteristiche;
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
     * @param [type] $dimenzioni
     * @return void
     */
    public function setDimenzioni($dimenzioni){
        $this->dimenzioni=$dimenzioni;
    }
}

?>