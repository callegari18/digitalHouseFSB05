<?php

// Agregação
class Cliente
{
    // cria um array vazio dentro de documentos
    protected $documentos = [];

    public function addDocumento(Documento $documento)
    {
        $this->documentos[] = $documento;
    }
}

class Documento
{
    public $numero;
    public $tipo;
}

$cliente = new Cliente;

$rg = new Documento;
$rg->tipo = 'RG';
$rg->numero = '33.333.333-3';

$cpf = new Documento;
$cpf->tipo = 'CPF';
$cpf->numero = '222.222.222-22';

$cliente->addDocumento($rg);
$cliente->addDocumento($cpf);

echo '<pre>';
var_dump($cliente);