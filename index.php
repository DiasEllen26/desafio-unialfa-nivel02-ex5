<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    </head>
  <body>
    <div class="login-dark">
        <form method="POST" action="recupera-dados.php">
            <h2 class="sr-only">Formulario</h2>
                <div class="illustration">
                    <i class="bi bi-person-circle text-light"></i>
                </div>
                <div class="form-group">Nome
                    <input class="form-control" type="text" name="nome">
                <div class="form-group">Email
                    <input class="form-control" type="text" name="email">
                <div class="form-group">
                <div class="form-group">Idade
                    <input class="form-control" type="number" name="idade">
                <div class="form-group">Hobbie
                    <input class="form-control" type="text" name="hobbie" >
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">Cadastrar</button>
                </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
  </body>
</html>