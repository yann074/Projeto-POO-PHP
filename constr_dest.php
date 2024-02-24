<?php

class Pessoa{
    public $nome;
    public $idade;

    function __construct($novoNome, $idade = 20){
        echo 'Construtor <br>';
        $this->nome = $novoNome;
        $this->idade = $idade;
    }

    function __destruct(){
        echo 'Destrutor <br>';

    }

    public function apresentar(){
        echo "{$this->nome}, {$this->idade} anos <br>";

    }
}

//construtor __construct

$pessoaA = new Pessoa('Rebeca Maria', 40);
$pessoaA->apresentar(); 
unset($pessoaA);

$pessoaB = new Pessoa('Rebeca Maria', 40);
$pessoaB->apresentar(); 
$pessoaB = null;

//destruct ou com unset ou com null chama o destruct
//para escrever usa o contruct, so pode ter um construtor

//$pessoaA->apresentar(); não funcionaria pois foi "destruido"

