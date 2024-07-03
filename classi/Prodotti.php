<?php 

class prodotti {
    // variabii d'istanza 
    private $nomeArticolo;
    private $prezzo;


    public function __construct($nomeArticolo, $prezzo){
        $this->nomeArticolo=$nomeArticolo;
        $this->prezzo=$prezzo;
    }

    // metodi 
    /**
     * Questa funzione mi restituiscce la variabile d'istanza nomeArticolo;
     *
     * @return void;
     */
    public function getNomeArticolo(){
        $this->nomeArticolo;
    }
    /**
     * Questa funzione mi permette di modificare la variabile d'istanza nomeArticolo;
     *
     * @param [type] $nomeArticolo,
     * @return void;
     */
    public function setNomeArticolo($nomeArticolo){
        $this->nomeArticolo = $nomeArticolo;
    }
    /**
     * Questa funzione mi restituiscce la variabile d'istanza prezzo;
     *
     * @return void;
     */
    public function getPrezzo(){
        $this->prezzo;
    }
    /**
     *  Questa funzione mi permette di modificare la variabile d'istanza prezzo;
     *
     * @param $prezzo;
     * @return void;
     */
    public function setPrezzo($prezzo){
        $this->prezzo = $prezzo;
    }
}


?>