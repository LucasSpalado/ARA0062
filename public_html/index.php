<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Animate -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <style> 
        body {
            background-color: #A9D3E2;
        }
    </style>
    <title>Recanto dos Viajantes</title>
  </head>
  <body>
     <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
          <h5 class="my-0 mr-md-auto font-weight-normal"><strong>Recanto dos Viajantes</strong></h5>
          <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="https://www.trivago.com.br/">Hoteis</a>
            <a class="p-2 text-dark" href="https://www.melhoresdestinos.com.br/melhores-praias-do-brasil.html">Praias</a>
            <a class="p-2 text-dark" href="https://www.skyscanner.com.br/noticias/encante-se-com-7-maravilhas-do-mundo-moderno">Maravilhas do Mundo</a>
  </nav>
  <a class="btn btn-outline-primary" href="login.html">Login</a>
</div>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="animate__animated animate__wobble">Cadastre sua aventura!!!!</h1>
  <p class="lead">O ambiente virtual perfeito para compartilhar suas aventuras pelo mundo em apenas<strong> 250 caracteres!!!</strong></p>
</div>

<div class="container">

    <div class="row" >
    
     <?php
            include_once("servico/Bd.php");
            
            $bd = new Bd();
            
            $sql = "select * from  blog";
            
            foreach ($bd->query($sql) as $row) {
               
               echo  '
                <div class="card mr-5 mb-5" style="width: 18rem;">
                  <div class="card-body">
                    <h5 class="card-title">'.$row['titulo'].'</h5>
                    <p class="card-text">'.substr($row['corpo'],0,250).'</p>
                  </div>
                </div>
               ';
               
            }
        
        ?>
        
    </div><!-- fim de linha -->

</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>