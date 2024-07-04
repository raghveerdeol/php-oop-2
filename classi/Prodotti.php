<?php 
require_once __DIR__ . "/Categorie.php";
class Prodotti {
    // variabii d'istanza 
    private $image;
    private $nomeArticolo;
    private $categoria;
    private $prezzo;


    public function __construct($image,$nomeArticolo, $categoria, $prezzo){
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
     * Questa funzione restituisce la variabile d'istanza categoria;
     *
     * @return void
     */
    public function getCategoria(){
        return $this->categoria;
    }
    
    /**
     * Questa funzione permette di modificare la variabile d'istanza cateoria;
     *
     * @param $categoria
     * @return void
     */
    public function setCategoria($categoria){
        return $this->categoria = $categoria; 
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

    public function getIcon($nome){
        if ($nome === "cane") {
            return "<i class='fa-solid fa-dog'></i>";
        } elseif ($nome === "gatto"){
            return '<i class="fa-solid fa-cat"></i>';
        } elseif($nome === "pesce"){
            return '<i class="fa-solid fa-fish"></i>';
        } elseif($nome === "uccello"){
            return '<i class="fa-solid fa-dove"></i>';
        }
    }
}


?>