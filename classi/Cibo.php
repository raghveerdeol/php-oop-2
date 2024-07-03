<?php 

class Cibo extends Prodotti{
    // variabili d'istanza;
    private $pesoNetto;
    private $ingredienti;
    private static $tipologia = "cibo";
    // costruttore 
    public function __construct($image, $nomeArticolo, $categoria, $prezzo, $pesoNetto, $ingredienti){
        parent::__construct($image,  $nomeArticolo, $categoria, $prezzo);
        $this->pesoNetto=$pesoNetto;
        $this->ingredienti=$ingredienti;
    }

    // metodi 


    public function getTipologia(){
        return self::$tipologia;
    }
    /**
     * Questa funzione restituiscce la variabile d'istanza pesoNetto;
     *
     * @return void
     */
    public function getPesoNetto(){
        return $this->pesoNetto;
    }

    /**
     * Questa funzione permette di modificare la variabile d'istanza pesoNetto;
     *
     * @param  $pesoNetto
     * @return void
     */
    public function setPesoNetto($pesoNetto){
        return $this->pesoNetto=$pesoNetto;
    }

    /**
     * Questa funzione restituiscce la variabile d'istanza ingredienti;
     *
     * @return void
     */
    public function getIngredienti(){
        return $this->ingredienti;
    }

    /**
     * Questa funzione permette di modificare la variabile d'istanza ingredienti;
     *
     * @param [type] $ingredienti
     * @return void
     */
    public function setIngredienti($ingredienti){
        return $this->ingredienti=$ingredienti;
    }
}

?>