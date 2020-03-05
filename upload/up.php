<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carregando arquivos (upload)</title>
</head>
<body>
    
    <form enctype="multipart/form-data" action="lerarquivo.php" method="post">
        <div>
            <label for="nome">Nome Completo</label>
            <input type="text" name="nome_completo">
        </div>
        <div>
            <label for="curriculo">Carregue seu CV aqui</label>
            <input type="file" name="curriculo" id="">
        </div>
        <button>Salvar dados</button>
    
    
    </form>


</body>
</html>