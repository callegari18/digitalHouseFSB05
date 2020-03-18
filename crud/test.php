<?php

$sql = 'SELECT * FROM clientes WHERE nome=:nome AND email=:email';

$stmt = $con->prepare($sql);

$stmt->bindValue(':nome', $nome);
$stmt->bindValue(':email', $email);

$resultado = $stmt->execute();
// $resultado = $stmt->execute([$nome, $email]);