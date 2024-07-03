<?php 

class Prodotti {
    // variabii d'istanza 
    private $image;
    private $nomeArticolo;
    private $prezzo;


    public function __construct($image,$nomeArticolo, $prezzo){
        $this->image=$image;
        $this->nomeArticolo=$nomeArticolo;
        $this->prezzo=$prezzo;
    }

    // metodi 

    /**
     * Questa funzione restituiscce la variabile d'istanza image;
     *
     * @return void
     */
    public function getImage(){
        $this->image;
    }

    /**
     * Questa funzione permette di modificare la variabile d'istanza image;
     *
     * @param $image
     * @return void
     */
    public function setImage($image){
        $this->image=$image;
    }
    /**
     * Questa funzione restituiscce la variabile d'istanza nomeArticolo;
     *
     * @return void;
     */
    public function getNomeArticolo(){
        $this->nomeArticolo;
    }
    /**
     * Questa funzione permette di modificare la variabile d'istanza nomeArticolo;
     *
     * @param [type] $nomeArticolo,
     * @return void;
     */
    public function setNomeArticolo($nomeArticolo){
        $this->nomeArticolo = $nomeArticolo;
    }
    /**
     * Questa funzione restituiscce la variabile d'istanza prezzo;
     *
     * @return void;
     */
    public function getPrezzo(){
        $this->prezzo;
    }
    /**
     *  Questa funzione permette di modificare la variabile d'istanza prezzo;
     *
     * @param $prezzo;
     * @return void;
     */
    public function setPrezzo($prezzo){
        $this->prezzo = $prezzo;
    }
}


?>