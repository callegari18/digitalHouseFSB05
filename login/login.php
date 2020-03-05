<?php

    echo '<pre>';
    var_dump($_POST);

    $email = $_POST['email'];
    $senha = $_POST['senha'];

session_start();

    if ($email === 'callegari18@hotmail.com' && $senha ==='123456'){
        session_start();
        $_SESSION['logado'] = true;
        header ('Location: home.php');
    } else {
        $_SESSION['erro'] = 'Usuario ou senha inválidos';
        header('Location: index.php');
    }