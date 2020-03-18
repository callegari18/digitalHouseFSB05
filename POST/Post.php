<?php

class Post
{
    public function get(string $campo)
    {
        if (isset($_POST[$campo]) === false) {
            return null;
        }
        // remove todas as tags da variavel
        $campo = $this->stripTags($_POST[$campo]);

        $filtro = $this->filtro($campo);

        return $filtro;
    }
    
    public function stripTags(string $valor)
    {
        return strip_tags($valor);
    }

    public function filtro($valor)
    {
        $filtro = str_replace("'", '', $valor);
        $filtro = str_replace("--", '', $filtro);

        return $filtro;
    }
}