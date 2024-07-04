<?php 

trait dimenzioni {
    private $dimenzioni;


        /**
     * Questa funzione restituiscce la variabile d'istanza dimenzioni;
     *
     * @return void
     */
    public function getDimenzioni(){
        return $this->dimenzioni;
    }

    /**
     * Questa funzione permette di modificare la variabile d'istanza dimenzioni;
     *
     * @param $dimenzioni
     * @return void
     */
    public function setDimenzioni($dimenzioni){
        return $this->dimenzioni=$dimenzioni;
    }
}

?>