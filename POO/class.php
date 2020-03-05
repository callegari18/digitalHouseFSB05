<?php

class Cliente
{
    public $nome;
    public $sobrenome;
    public $cpf;
}

$cliente1 = new cliente();
$cliente2 = new cliente();

//Atributos são variaveis da classe
$cliente1->nome = 'Carlos';
$cliente1->sobrenome = 'Faria';

$cliente2->nome = 'Leonardo';
$cliente2->sobrenome = 'Cardoso';

//acesso ao atributo 
//echo $cliente1->nome.' '.$cliente1->sobrenome;
echo "$cliente1->nome $cliente1->sobrenome";
 //echo '<pre>';
 //var_dump ($cliente1, $cliente2); 