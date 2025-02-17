<?php
require 'conexao.php';
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/styles/login.css">
</head>

<body>
    <section>
        <nav class="navbar navbar-expand-lg bg-body-tertiary align-items-center d-flex">
            <div class="container-fluid fixed-top justify-content-center flex-column">
                <a class="navbar-brand" href="#">Faeterj Paracambi Alumni</a>
                <p>Login</p>
            </div>
        </nav>
    </section>
    <div style="margin-bottom: 100px;"></div>
    <section class="cadastro">
        <form action="logar-usuario.php" method="POST">
            <h3 class="title mb-5"><b>Login</b></h3>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="username" name="username" placeholder="Digite seu nome" required>
                <label class="name" for="floatinName">Nome</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="password" name="password" placeholder="Digite sua senha" required>
                <label class="password" for="floatinSenha">Senha</label>
            </div>
            
            <button class="btn btn-primary py-2"><b>Entrar</b></button>
        </form>
        <button href="index.php" class="btn btn-warning py-2 mt-3"><a href="index.php"><b>Voltar</b></a></button>
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>