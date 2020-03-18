<?php

require 'Database.php';

try {
    $database = new Database('mysql', 'aulapdo', 'root', '');

    echo '<pre>';

    // SELECT nome FROM clientes
    $clientes = $database->select('clientes', 'nome, email', "nome=? AND email=?");

    // $cliente->nome
    foreach ($clientes as $cliente) {
        echo $cliente->nome . ' ' . $cliente->email . '<br>';
    }

    $cliente = [
        'nome' => 'Classes são divertidas',
        'email' => 'teste@gmail.com',
        'telefone' => '11 4444-4444'
    ];

    // $database->insert('clientes', $cliente); // INSERT INTO tabela (campo1, campo2) VALUES ('', '');
    
    echo $database->getLastInsertId();

} catch(PDOException $erro) {
    echo 'Erro, tente novamente mais tarde.';
}