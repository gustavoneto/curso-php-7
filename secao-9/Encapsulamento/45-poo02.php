<?php

// Encapsulamento

class Pessoa{

    public $nome = "Rasmus Lerdof";
    protected $idade = "48";
    private $senha = "123456"; // O que é privado não é herdado

    public function verDados(){ // Ele enxerga tudo pois está na mesma classe e é publico

        echo get_class($this) . "<br/>";
        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";

    }

}

class Programador extends Pessoa {

    public function verDados(){ // Ele enxerga tudo pois está na mesma classe e é publico

        echo get_class($this) . "<br/>";
        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";

    }

}

$objeto = new Programador();
// echo $objeto->senha;

$objeto->verDados();