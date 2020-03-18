<?php

// Associação
class Cliente
{
    public $nome;
    public $documento;
    public $endereco;
}

class Documento
{
    public $tipo;
    public $orgaoEmissor;
    public $numero;
    public $dataEmissao;
}

$cliente = new Cliente;
$cliente->nome = 'Rogério Santos';

$rg = new Documento;
$rg->tipo = 'Registro Geral';
$rg->orgaoEmissor = 'SSP';
$rg->numero = '34.456.345-9';

// Associamos o objeto documento ao objeto Cliente
// um objeto a outro objeto
$cliente->documento = $rg;

$cliente2 = new Cliente;
$cliente2->nome = 'Ricardo Faria';

$cpf = new Documento;
$cpf->numero = '123.123.123-33';

$cliente2->documento = $cpf; // 1 para 1

// $rg2 = new Documento;
// $rg2->numero = '23.232.333-9';

// $cliente2->documento = $rg2;

echo '<pre>';
var_dump($cliente2);



