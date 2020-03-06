<?php
//PSR - PHP Standers
//CarrinhoDeCompras /studlycaps
class Cliente
{
    //Atributos
    public $nome;
    public $sobrenome;
    public $cpf;
    // construtor é recurso para
    // inicializar seus atributos de 
    // forma direta
    public function __construct($nome,$sobrenome, $cpf)
    {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->cpf = $cpf;
        $this->nomeCompleto = "$nome $sobrenme";
    }
    public function salvar()
    {
        $sql = "INSERT INTO clientes (nome, sobrenome, cpf)
                VALUES('$this->nome','$this->sobrenome','$this->cpf')";

        echo $sql;
    }
}
