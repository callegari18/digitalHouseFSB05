<?php

// $_GET
// $_POST

//echo '<pre>';
//var_dump($_FILES);

$curriculo = $_FILES['curriculo'];

// echo $curriculo['type']; // image/jpeg - Mime Type

if ($curriculo['type'] != 'application/pdf') {
    exit('Formato do arquivo não é pdf');
    // header('Location: upload.php');
}

// primeiro atributo arquivo temporario
// segundo atributo local que queremos salvar
$resultado = move_uploaded_file($curriculo['tmp_name'], 'imagens/cv_' . rand(11111, 99999) . $_POST['nome_completo'] . '.pdf');

if ($resultado === true) {
    echo 'Arquivo carregado com sucesso';
} else {
    echo 'Erro ao carregar arquivo';
}