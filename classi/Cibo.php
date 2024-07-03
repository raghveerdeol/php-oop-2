<?php 

class Cibo extends Prodotti{
    // variabili d'istanza;
    private $pesoNetto;
    private $ingredienti;
    // costruttore 
    public function __construct($image, $nomeArticolo, $prezzo, $pesoNetto, $ingredienti){
        parent::__construct($image, $nomeArticolo, $prezzo);
        $this->pesoNetto=$pesoNetto;
        $this->ingredienti=$ingredienti;
    }

    // metodi 
    /**
     * Questa funzione restituiscce la variabile d'istanza pesoNetto;
     *
     * @return void
     */
    public function getPesoNetto(){
        $this->pesoNetto;
    }

    /**
     * Questa funzione permette di modificare la variabile d'istanza pesoNetto;
     *
     * @param  $pesoNetto
     * @return void
     */
    public function setPesoNetto($pesoNetto){
        $this->pesoNetto=$pesoNetto;
    }

    /**
     * Questa funzione restituiscce la variabile d'istanza ingredienti;
     *
     * @return void
     */
    public function getIngredienti(){
        $this->ingredienti;
    }

    /**
     * Questa funzione permette di modificare la variabile d'istanza ingredienti;
     *
     * @param [type] $ingredienti
     * @return void
     */
    public function setIngredienti($ingredienti){
        $this->ingredienti=$ingredienti;
    }
}

?>