<?php 
  include 'funcao.php';
?>

<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="sweetalert2.min.css">
    </head>
  <body>
    <?php
    if (isset($_POST)){
      $nome= $_POST['nome'] ?? NULL;
      $email = $_POST['email'] ?? NULL;
      $idade = $_POST['idade'] ?? NULL;
      $hobbie = $_POST['hobbie'] ?? NULL;
      
        if(strlen($nome) < 6){
         mensagemErro("O nome precisa no minimo ter 6 caracteres");
        }
        
        if($idade < 18){
         mensagemErro("Idade minima é 18");
        }
    }
    ?>

  <script src="sweetalert2.all.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>