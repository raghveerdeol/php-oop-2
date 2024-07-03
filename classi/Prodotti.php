<?php 

class Prodotti {
    // variabii d'istanza 
    private $image;
    private $nomeArticolo;
    private $categoria;
    private $prezzo;


    public function __construct($image,$nomeArticolo, Categoria $categoria, $prezzo){
        $this->image=$image;
        $this->nomeArticolo=$nomeArticolo;
        $this->categoria=$categoria;
        $this->prezzo=$prezzo;
    }

    // metodi 

    /**
     * Questa funzione restituiscce la variabile d'istanza image;
     *
     * @return void
     */
    public function getImage(){
        return $this->image;
    }

    /**
     * Questa funzione permette di modificare la variabile d'istanza image;
     *
     * @param $image
     * @return void
     */
    public function setImage($image){
        return $this->image=$image;
    }
    /**
     * Questa funzione restituiscce la variabile d'istanza nomeArticolo;
     *
     * @return void;
     */
    public function getNomeArticolo(){
        return $this->nomeArticolo;
    }
    /**
     * Questa funzione permette di modificare la variabile d'istanza nomeArticolo;
     *
     * @param [type] $nomeArticolo,
     * @return void;
     */
    public function setNomeArticolo($nomeArticolo){
        return $this->nomeArticolo = $nomeArticolo;
    }
    /**
     * Questa funzione restituiscce la variabile d'istanza prezzo;
     *
     * @return void;
     */
    public function getPrezzo(){
        return $this->prezzo;
    }
    /**
     *  Questa funzione permette di modificare la variabile d'istanza prezzo;
     *
     * @param $prezzo;
     * @return void;
     */
    public function setPrezzo($prezzo){
        return $this->prezzo = $prezzo;
    }
}


?>