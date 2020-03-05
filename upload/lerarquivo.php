<?php

//.$_GET
//.$_POST

   echo'<pre>';
  // var_dump ($_FILES);

    $curriculo = $_FILES['curriculo'];

    // echo $curriculo['type'];//image/jpeg - Mime Type

    if ($curriculo['type'] != 'application/wps-office.pdf'){
       //exit('Formato de arquivo invalido');
      header ('Location: up.php');

    } 

   // var_dump($curriculo);
//primeiro atributo arquivo temporario
//segundo atributo e o local que queremos salvar

    $resultado = move_uploaded_file($curriculo['tmp_name'], 'img/cv_1'.rand (1000,99999). '.pdf');

    if ($resultado === true) {
      echo 'Arquivo carregado com sucesso';
    } else {
      echo 'Erro ao carregar arquivo';
    }