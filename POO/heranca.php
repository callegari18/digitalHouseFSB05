<?php

class Cliente
{
    public $nome;
    public $endereco;
    public $email;
    public $contato;
    protected $saldo = 0;

    public function addSaldo($valor)
    {
        $this->saldo += $valor;
    }
}

class PJ extends Cliente
{
    protected $cnpj;
}

class PF extends Cliente
{
    protected $cpf;
}

$pessoa_juridica = new PJ;

$pessoa_juridica->addSaldo(1000000);

$pessoa_fisica = new PF;
$pessoa_fisica->addSaldo(100);


echo '<pre>';
var_dump($pessoa_juridica);

echo'<br><br>';
var_dump($pessoa_fisica);