<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    
    <h1>Cadastro de produto</h1>
    <form action="gravar.php" method="POST">
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome">
        </div>
        <div>
            <label for="descricao">Descrição</label>
            <input type="text" name="descricao">
        </div>
        <div>
            <label for="preco">Preço</label>
            <input type="number" step=".01" name="preco">
        </div>
        <button>Salvar dados</button>
    </form>

</body>
</html>