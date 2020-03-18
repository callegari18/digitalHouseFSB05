<?php
require 'cliente.php';

echo '<pre>';

// Instancia
$cliente1 = new Cliente('Leonardo', 'Tumadjian', '333.333.333-33');

$cliente1->salvar();

// $cliente2 =
$cliente2 = new Cliente('Carlos', 'Faria', '222.222.222-22');

echo '<br>';

$cliente2->salvar();

// // Atributos são variaveis da classe
// $cliente1->nome = 'Leonardo';
// $cliente1->sobrenome = 'Cardoso';

// $cliente2->nome = 'Carlos';
// $cliente2->sobrenome = 'Faria';
// acesso ao atributo nome
// echo $cliente1->nome . ' ' . $cliente1->sobrenome;

// echo "$cliente1->nome $cliente1->sobrenome";

// echo $cliente2->nomeCompleto;

// echo '<pre>';
// var_dump($cliente1, $cliente2);