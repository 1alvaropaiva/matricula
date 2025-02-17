<?php
require 'conexao.php';
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faeterj - Rematrícula</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/styles/index.css">
    <link rel="shortcut icon" href="img/faetec.ico" type="image/x-icon">
</head>

<body>
    <div>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid fixed-top flex-column">
                <a class="navbar-brand" href="#">Faeterj Paracambi Alumni</a>
                <p>Rematrícula</p>
            </div>
        </nav>
    </div>
    <section class="main">
        <div class="card">
            <div class="card-body">
                <p class="card-text text-center">Para acessar o sistema, é necessário que você crie seu login clicando no botao abaixo e, no campo e-mail, use seu e-mail institucional <b>(@aluno.faeterj-prj.faetec.rj.gov.br).</b> Após criar, você será redirecionado ao sistema.</p>
            </div>
        </div>
        <div class="buttons">
            <a href="login.php" class="btn btn-warning"><b>Login</b></a>
            <a href="cadastro.php" class="btn btn-warning"><b>Cadastro</b></a>
            <a href="instrucoes.php" class="btn btn-warning"><b>Ver orientações e instruções de uso</b></a>
        </div>
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>