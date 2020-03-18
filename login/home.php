<?php

session_start();

if (isset($_SESSION['logado']) === false) {
    header('Location: index.php');
}


?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <a href="logout.php">Deslogar</a>
    
    <h1>Home página restrita!!</h1>
    <p>Texto do qual nem todos podem ver!! Chico Xavier</p>

</body>
</html>