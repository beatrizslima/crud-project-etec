<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <title>Cadastro Funcionários</title>
</head>

<body>

    <div class="container p-3 my-3 border">
        <h2>Cadastrar funcionário</h2>
        <form action="criar_func.php" method="POST">
            Nome: <input type="text" name="nome" id="nome" class="form-control"> <br>
            Sobrenome: <input type="text" name="sobrenome" id="sobrenome" class="form-control"> <br>
            E-mail: <input type="text" name="email" id="email" class="form-control"> <br>
            Idade: <input type="text" name="idade" id="idade" class="form-control"> <br>

            <a href="index.php " class="btn btn-outline-warning">Voltar</a>
            <button type="submit" class="btn btn-outline-warning" name="btn-cadastrar">Cadastrar</button>
        </form>

    </div>
</body>
</html>