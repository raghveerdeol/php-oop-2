
<?php 
require_once __DIR__ . "/traits/hasSize.php";

class Giochi extends Prodotti{
    // variabili d'istanza;
    use dimenzioni;
    private $caratteristiche;
    private static $tipologia = "giochi";
    // costruttore 
    public function __construct($image, $nomeArticolo, $categoria, $prezzo, $caratteristiche, $dimenzioni){
        parent::__construct($image,  $nomeArticolo, $categoria, $prezzo);
        $this->caratteristiche=$caratteristiche;
        $this->dimenzioni=$dimenzioni;
    }

    // metodi 
    public function getTipologia(){
        return self::$tipologia;
    }
    /**
     * Questa funzione restituiscce la variabile d'istanza caratteristiche;
     *
     * @return void
     */
    public function getCaratteristiche(){
        return $this->caratteristiche;
    }

    /**
     * Questa funzione permette di modificare la variabile d'istanza caratteristiche;
     *
     * @param  $caratteristiche
     * @return void
     */
    public function setCaratteristiche($caratteristiche){
        return $this->caratteristiche=$caratteristiche;
    }
}

?>