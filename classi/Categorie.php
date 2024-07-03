<?php 

class Categoria {
    // variabili d'istanza;
    public $nome;

    public function __construct(string $nome){
        $this->nome=$nome;
    }

    public function getNome(){
        $this->nome;
    }

    public function setNome($nome){
        $this->nome=$nome;
    }
}
?>