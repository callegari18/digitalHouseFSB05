<?php

session_start();

$nome = $_SESSION['nome'] ?? 'Visitante';

echo "Olá $nome";

echo '<pre>';

var_dump($_SESSION);