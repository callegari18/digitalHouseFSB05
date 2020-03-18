<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello World</title>
</head>
<body>
    
<?php

echo '<h1>Hello world</h1>';

$inteiro = 12;

$flutuante = 2.4;

$booleano = true; // false

/*
Comentario em boco

Escravam usando o PHP os inputs necessários para o formulário
Escrever usando PHP!!!
*/

?>
<form action="">
    <label for="">Nome:</label>
    <?php echo '<input type="text" name="nome">'; ?>
    <?php echo '<br><br>'; ?>
    <label for="">Email:</label>
    <?php echo '<input type="email" name="email">'; ?>
</form>

<?php

// Condicionais
$status = false;

?>

<br>

<?php

if ($status === false) {
    echo '<div style="width: 100px;background-color: red;">Inativo</div>';
} else {
    echo '<div style="width: 100px;background-color: green;">Ativo</div>';
}

?>

</body>
</html>