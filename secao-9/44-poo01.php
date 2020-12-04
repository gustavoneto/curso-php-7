<?php

// Métodos mágicos

class Endereco{

    private $logradouro;
    private $numero;
    private $cidade;
    private $estado; // complemento meu

    public function __construct($a, $b, $c, $d){

        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
        $this->estado = $d;

    }

    public function __destruct(){

        // var_dump("DESTRUIR");

    }

    public function __toString(){

        return $this->logradouro 
        . ", " 
        . $this->numero 
        . ", " 
        . $this->cidade
        . " - "
        . $this->estado;

    }

}

$meuEndereco = new Endereco("Rua Ademar Saraiva", "123", "Santos", "SP");

// var_dump($meuEndereco);

// unset($meuEndereco);
// var_dump($meuEndereco); // Não existe mais porque foi destruida

echo $meuEndereco;

