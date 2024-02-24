<?php


class Cliente{

    public $nome = 'Yann';
    public $idade = 18;

    public function apresentar(){

        echo "Seu nome é {$this->nome}, sua idade é {$this->idade}";
        
    }

}

$c1 = new Cliente();//puxando a class
$c1->apresentar();// puxando a função
//this para acessar as variavel na class
$c1->nome = 'Athur joao'; 
$c1->idade = 40;
$c1->apresentar();  

$c2 = new Cliente();
$c2->nome = 'joao';
$c2->idade='10';
$c2->apresentar();

$c3 = new Cliente();
$c3->nome = 'yann';
$c3->idade = 10;
?>

<h1></h1>

