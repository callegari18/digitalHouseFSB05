<?php

$con = new PDO('mysql:dbname=aulapdo;port=3306', 'root', '');

$sql = 'SELECT * FROM clientes ORDER BY nome ASC';

// resultado ainda no mysql
$resultado = $con->query($sql);

// fetch

// echo '<pre>';
// var_dump($resultado->fetch());
// var_dump($resultado->fetch());

// $resultado->fetch(PDO::FETCH_ASSOC)
// $resultado->fetch(PDO::FETCH_OBJ)
// while ($cliente = $resultado->fetch(PDO::FETCH_OBJ)) {
//     echo "$cliente->nome - $cliente->email <br>"; 
// }

$clientes = $resultado->fetchAll(PDO::FETCH_ASSOC);

// var_dump($clientes);

// foreach ($clientes as $cliente) {

//     $nome = $cliente['nome'];

//     echo $nome . '<br>';
// }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibe clientes</title>
</head>
<body>
    
    <h1>Lista de clientes</h1>

    <table border="1">
        <tr>
            <th>id</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
        </tr>
        <?php
        foreach ($clientes as $cliente) {
            echo '<tr>';
            echo "<td>{$cliente['id']}</td>";
            echo "<td>{$cliente['nome']}</td>";
            echo "<td>{$cliente['email']}</td>";
            echo "<td>{$cliente['telefone']}</td>";
            // echo '<td>' . $cliente['id'] . '</td>';
            echo '</tr>';
        }
        ?>
    </table>

</body>
</html>