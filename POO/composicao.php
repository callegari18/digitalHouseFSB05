<?php

interface Database
{
    public function conectar() : bool;
    public function select(string $tabela, string $filtros) : array;
}

class Mysql implements Database
{
    public function conectar(): bool
    {
        // código no MYSQL
        return true;
    }

    public function select(string $tabela, string $filtros): array
    {
        return [];
    }
}

class MongoDB implements Database
{
    public function conectar(): bool
    {
        // código no MYSQL
        return true;
    }

    public function select(string $tabela, string $filtros): array
    {
        return [];
    }
}

class Cliente
{
    protected $database;

    public function setDatabase(Database $database)
    {
        $this->database = $database;
        $this->database->conectar();
    }

    // public function __construct()
    // {
    //     // alto acoplamento
    //     $this->database = new MongoDB;
    // }
}

// $mysql = new Mysql;
// $mongodb = new MongoDB;

// Injeção de dependencia
$postGreeSQL = new PostGreeSQL;

// Composição feita do jeito certo!!
$cliente = new Cliente;
$cliente->setDatabase($postGreeSQL);