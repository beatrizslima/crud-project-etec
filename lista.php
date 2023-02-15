<?php
include_once 'conexao_bd.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <!--Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <title>Lista de funcionárioss</title>
</head>

<body>

    <div class="container p-3 my-3 border">
        <h2>Lista de funcionários</h2>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nome:</th>
                    <th>Sobrenome:</th>
                    <th>E-mail</th>
                    <th>Idade</th>
                </tr>
            </thead>

            <tbody>

                <?php
                $sql = "SELECT * FROM tbClientes";

                $resultado = mysqli_query($connection, $sql);


                while ($dados = mysqli_fetch_array($resultado)) {
                    ?>

                    <tr>
                        <td>
                            <?php echo $dados['nomeCli']; ?>
                        </td>
                        <td>
                            <?php echo $dados['sobreNomeCli']; ?>
                        </td>
                        <td>
                            <?php echo $dados['emailCli']; ?>
                        </td>
                        <td>
                            <?php echo $dados['idadeCli']; ?>
                        </td>

                    <?php } ?>

            </tbody>
        </table>

        <a href="index.php " class="btn btn-outline-warning">Voltar</a>
        <a class="btn btn-outline-warning">Cadastrar novo funcionário</a>
    </div>
</body>

</html>