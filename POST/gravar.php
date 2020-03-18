<?php

require 'Post.php';
require '../POO/Database.php';

$post = new Post;


echo 'Nome: ' . $post->get('nome') . '<br>';
echo 'Descrição: ' . $post->get('descricao') . '<br>';
echo 'Preço: ' . $post->get('preco') . '<br>';

$nome = $post->get('nome');
$descricao = $post->get('descricao');
$preco = $post->get('preco');

// $con = new Database('mysql', 'digital_house', 'root', '');

// $con->insert('produtos', [
//     'nome' => $nome,
//     'descricao' => $descricao,
//     'preco' => $preco
// ]);

