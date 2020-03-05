<?php

session_start();
if (isset($_SESSION['logado'])===false){
 header('Location: index.php');

}

$email = $_SESSION['email'] ?? 'Visitante';



?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h1> Home Página Restrita!!!</h1>
    <p>Texto do qual nem todos podem ver!! Chico Xavier</p>
    
   <a href = 'logout.php'><button>Sair</button></a>
   
   
</body>
</html>