<?php

Class Validacao
{
    static public $tamanho;

    static public function max($valor, $max = 0)
    {
        if(static::$tamanho!=null){
            $max = static::$tamanho;
        }
        //$max = static::$tamanho === null
        
        if (mb_strlen($valor)< $max){
            return true;
        }
        return false;
    }
}

//Validacao::$tamanho = 6;
// chamada de método estática
//var_dump (Validacao::max('léoo'), Validacao::$tamanho);


class Value
    {
        static public function nomeSobrenome($nomeCompleto)
        {
            $separado = explode(' ', $nomeCompleto);
            
            $primeiroNome = array_shift($separado);
            
            $sobreNome = implode (' ', $separado);
            return [
                'nome'=> $primeiroNome,
                'sobrenome'=> $sobreNome
            ];
        }
    }

 $cliente = Value::nomeSobrenome('Vinicius Callegari');

 echo 'Primeiro nome: '. $cliente['nome'];
 echo '<br> Sobrenome Completo: '.$cliente['sobrenome'];