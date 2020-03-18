<?php

class Post
{
    public function get (string $campo)
    {
        if(isset ($_POST[$campo])=== false){
            return null;
        }

        //remove todas as tags da variavel

        $campo = stripTags($_POST[$campo]);

        $filtro = str_replace("'", '', $campo);
        $filtro = str_replace("--", '',$filtro);


        return $_POST [$campo];
    }

    public function stripTags(string $valor)
    {
        return strip_tags($valor);
    }
    public function filtro($valor);
    $filtro = str_replace("'",'', $valor);
    $filtro = str_replace("'",'',$filtro);
}