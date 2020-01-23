<?php

/**
 * Iniciando estudo sobre POO
 * Classes
 */

class Pessoa{

    // atributos e métodos

    public $nome; // atributo

    public function falar(){ // método

        return "O meu nome é " .$this->nome; //$this faz o papel do $ na variável

    }

}

$gustavo = new Pessoa();
$gustavo->nome = "Gustavo";
echo $gustavo->falar();

?>