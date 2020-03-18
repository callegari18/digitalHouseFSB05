<?php

// Herança, Polimorfismo, Abstração, Encapsulamento

// Não deixa o PHP instanciar essa classe
// ela serve somente de base para outras(sozinha não funciona)
abstract class Cliente
{
    public $nome;
    public $endereco;
    public $email;
    public $contato;
    protected $saldo = 0;
    private $status = 'ativo';

    public function addSaldo($valor)
    {
        $this->saldo += $valor;
    }
}

class PJ extends Cliente
{
    protected $cnpj;

    public function getStatus()
    {
        echo $this->status;
    }
}

class PF extends Cliente
{
    protected $cpf;
}

$pessoa_juridica = new PJ;
$pessoa_juridica->addSaldo(1000000);

$pessoa_juridica->getStatus();

$pessoa_fisica = new PF;
$pessoa_fisica->addSaldo(100);

echo '<pre>';
var_dump($pessoa_juridica, $pessoa_fisica);