<?php

$depoimentos = [
  ["imagem"=>"img/dep-1.png","nome"=>"Maria","descricao"=>"	Lorem ipsum vel velit placerat morbi faucibus lorem consequat accumsan, molestie habitasse ipsum blandit pharetra proin quisque himenaeos facilisis, viverra non luctus class donec odio semper dictum."],
  ["imagem"=>"img/dep-2.png","nome"=>"Vinicius","descricao"=>"Lorem ipsum vel velit placerat morbi faucibus lorem consequat accumsan, molestie habitasse ipsum blandit pharetra proin quisque himenaeos facilisis, viverra non luctus class donec odio semper dictum."],
  ["imagem"=>"img/dep-3.png","nome"=>"João","descricao"=>"Lorem ipsum vel velit placerat morbi faucibus lorem consequat accumsan, molestie habitasse ipsum blandit pharetra proin quisque himenaeos facilisis, viverra non luctus class donec odio semper dictum."]

];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/pet-tinder.css">
    <title>Pet Tinder</title>
</head>
<body >
    <header>

    </header>
    <main>

        <img id="logoIndex" src="imagem/logo.png" alt="Logo-PetTinder">


    <section id="login" class="container mt-5">
        
    
    <form action="login.php" method="POST">
    
        <label for="login">Login</label><br>
        <input type="text" name="nomeCompleto" id="emailLogin" placeholder="E-mail"></br>
        <input type="password" name="nomeCompleto" id="senhaLogin" placeholder="Senha"></br>
        <button type="submit" >Entrar</button> 
        <a href="cadastro.html">Cadastre-se</a>
       
    </form>
    </section>


    <section id="depoimento" class="container mt-5">
        <div class="row">
         
        <?php foreach ($depoimentos as $depoimento){
  
         ?>
         
          <div class="col mb-4">
              <div class="card" >
              <img src= "<?php echo $depoimento["imagem"]; ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">
                  <?php echo $depoimento["nome"]; ?>
                </h5>
                <p class="card-text"> <?php echo $depoimento["descricao"]; ?></p>
                
              </div>
            </div>
          </div>
          
        <?php } ?>
  
      </section>


    </main>
    <footer>

    </footer>
</body>
</html>