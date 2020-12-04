<?php

// Encapsulamento

class Pessoa{

    public $nome = "Rasmus Lerdof";
    protected $idade = "48";
    private $senha = "123456";

    public function verDados(){ // Ele enxerga tudo pois está na mesma classe e é publico

        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";

    }

}

$objeto = new Pessoa();
// echo $objeto->senha;

$objeto->verDados();