<?php

class Validacao
{
    static public $tamanho;

    static public function max($valor, $max = 0)
    {
        if (static::$tamanho != null) {
            $max = static::$tamanho;
        }   

        if (mb_strlen($valor) > $max) {
            return false;
        }
        return true;
    }
}

Validacao::$tamanho = 5;

// Chamada de método estático
// var_dump(Validacao::max('leoeee'));

class Value
{
    static public function nomeSobrenome($nomeCompleto)
    {
        $separado = explode(' ', $nomeCompleto);

        $primeiroNome = array_shift($separado);

        $sobreNome = implode(' ', $separado);

        return [
            'nome' => $primeiroNome,
            'sobrenome' => $sobreNome
        ];
    }
}

$cliente = Value::nomeSobrenome('Leonardo Pereira de Lima Melo');

echo 'Primeiro nome: ' . $cliente['nome'];
echo '<br> Sobrenome Completo: ' . $cliente['sobrenome'];