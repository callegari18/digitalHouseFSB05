<?php

class Conta
{
    protected $saldo;

    public function __construct()
    {
        $this ->saldo = 200;
    }

    public function getSaldo()
    {
        return $this ->saldo;
    }
    
    public function retiraSaldo(float $valor): void
    {
        $this ->saldo -= $valor;
    }

    public function retiraMensalidade()
    {
        $this ->retiraSaldo(20);   
    }
    public function isNegative($valor)
    {
        return($this->saldo - $valor) < 0;
    }
}


class ContaPremium extends Conta
{
    public function retiraSaldo(float $valor): void
    {
        //validando se  retirando o valor  vai ficar menor que 0
        // if ($this->saldo - $valor < 0){
        //     exit('Ops saldo não suficiente');
        // }
        if ($this->isNegative($valor)) {
            exit('Ops saldo não suficiente');
        }
        parent ::retiraSaldo($valor);
    }

    public function retiraMensalidade()
    {
        $this->retiraSaldo(50);
    }


}

//$conta = new Conta();

$conta = new ContaPremium();

$conta->retiraMensalidade();

echo $conta -> getsaldo();
