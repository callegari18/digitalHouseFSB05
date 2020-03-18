<?php

// Visibilidade

// public
// protected
// private

class Produto
{
    public $nome;
    protected $preco;
    private $descricao;

    public function setPreco(float $preco)
    {
        if ($preco < 0) {
            exit('Preço não pode ser menor que 0');
        }
        $this->preco = $preco;
    }

    protected function formataPreco($preco)
    {
        return 'R$ ' . number_format($preco, 2, '.', ',');
    }

    public function salvar()
    {
        $saldo = $this->formataPreco($this->preco);
    }
}

$prod = new Produto;

$prod->nome = 'Monitor Gamer de 49 polegadas ultrawide';

// não conseguimos
$prod->setPreco(10);