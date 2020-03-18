<?php
// PSR - PHP Standars Recomendations - FIG

// CarrinhoDeCompras / studlycaps
class Cliente 
{
    // Atributos
    public $nome;
    public $sobrenome;
    public $cpf;
    public $nomeCompleto;

    // construtor é recurso para
    // inicializar seus atributos de 
    // forma direta
    public function __construct($nome, $sobrenome, $cpf)
    {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->cpf = $cpf;
        $this->nomeCompleto = "$nome $sobrenome";
    }

    public function salvar()
    {
        $sql = "INSERT INTO clientes (nome, sobrenome, cpf)
                VALUES ('$this->nome', '$this->sobrenome', '$this->cpf')";

        echo $sql;
    }
}
