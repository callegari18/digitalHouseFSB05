<?php

session_start(); // session 

$nome = $_SESSION['nome'] ?? 'Zé ninguém';

echo "Olá $nome";

echo '<pre>';

var_dump($_SESSION);