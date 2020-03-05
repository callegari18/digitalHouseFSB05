<?php

$servicos = [
  ["imagem"=>"img/site.png","titulo"=>"SITE","descricao"=>"Descrição serviço 1"],
  ["imagem"=>"img/blog.png","titulo"=>"BLOG","descricao"=>"Descrição serviço 2"],
  ["imagem"=>"img/loja.png","titulo"=>"LOJA VIRTUAL","descricao"=>"Descrição serviço 3"],
  ["imagem"=>"img/loja.png","titulo"=>"LOJA VIRTUAL","descricao"=>"Descrição serviço 3"],
  ["imagem"=>"img/loja.png","titulo"=>"LOJA VIRTUAL","descricao"=>"Descrição serviço 3"]

];


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Agéncia Web</title>
</head>
<body>
  <header>
    <!-- Just an image -->
  <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">
      <img src="img/logo.png" width="130"  alt="">
    </a>
    <ul class="nav">
        <li class="nav-item">
          <a class="nav-link active" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Serviços</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Sobre nós</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Contato</a>
        </li>
      </ul>
  </nav>
  </header>
  <main>
      <section id="banner">
      <h2>Compre nossos produtos! =)</h2>
    </section>
    <section id="servico" class="container mt-5">
      <div class="row">
       
      <?php foreach ($servicos as $servico){

       ?>
      
      <div class="col-4">
          <div class="card" >
            <img src= "<?php echo $servico["imagem"]; ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">
                <?php echo $servico["titulo"]; ?>
              </h5>
              <p class="card-text"> <?php echo $servico["descricao"]; ?></p>
              <a href="#" class="btn btn-primary">Saiba mais</a>
            </div>
          </div>
        </div>
      <?php } ?>

    </section>
    <section id="sobre" class="container mt-5">
      <div class="row">
        <div class="col-6">
          <img src="img/about.svg" class="img-fluid"/>
        </div>
        <div class="col-6 d-flex justify-content-center flex-column">
          <h1>Sobre nós</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur molestias totam, velit eius maiores deleniti adipisci sit ea in asperiores
             ullam repudiandae aspernatur nam accusantium assumenda voluptatibus veritatis rerum hic.</p>
        </div>
      </div>
    </section>
  </main>
</body>
</html>