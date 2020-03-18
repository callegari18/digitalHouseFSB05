<?php

$driver = 'mysql:dbname=aulapdo;port=3306;host=localhost';
$user = 'root';
$password = '';

$conexao = new PDO($driver, $user, $password);

// SQL INJECTION
// $nome = "' or drop database <seu db>";

$sql = "INSERT clientes
        (nome, email, telefone) 
        VALUES 
        ('Carlos', 're@teste.com', '11 5555-5555')";



$affected = $conexao->exec($sql);

// var_dump($conexao->errorInfo());

if ($affected === false) {
    echo 'Erro ao cadastrar';
}