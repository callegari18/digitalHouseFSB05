<?php

require 'cliente.php';

echo'<pre>';
//instancia
$cliente1 = new cliente('Leonardo','Tumadjian', '333.333.333-22');


$cliente1->salvar();
// var_dump($cliente1);

$cliente2 = new cliente('Carlos','Faria','444.444.444-33');
echo'<br>';
$cliente2->salvar();

// var_dump($cliente2);


//Atributos são variaveis da classe
//$cliente1->nome = 'Carlos';
//$cliente1->sobrenome = 'Faria';


// $cliente2->nome = 'Leonardo';
// $cliente2->sobrenome = 'Cardoso';

//acesso ao atributo 
//echo $cliente1->nome.' '.$cliente1->sobrenome;
//echo "$cliente1->nome $cliente1->sobrenome";
 //echo '<pre>';
 //var_dump ($cliente1, $cliente2); 


?>