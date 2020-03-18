<?php

$email = 'teste@teste.com';
$senha = '123456';

$con = new PDO('mysql:dbname=aulapdo;port=3306', 'root', '');

// placeholder
$sql = 'SELECT * FROM login WHERE email=? AND senha=?';

$resultado = $con->prepare($sql);

$resultado->execute([$email, $senha]);

var_dump($resultado->rowCount());