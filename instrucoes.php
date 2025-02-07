<?php
require 'conexao.php';
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instruções</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/instrucoes.css">
</head>

<body>
    <div>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid fixed-top flex-column">
                <a class="navbar-brand" href="#">Faeterj Paracambi Alumni</a>
                <p>Instruções de uso</p>
            </div>
        </nav>
    </div>
    <section class="main">
        <div class="card">
            <div class="card-body">
                <h5>1. Acesso ao Sistema</h5>
                <p class="card-text text-center">Para acessar, você precisa realizar seu cadastro. Ao clicar no botão Efetuar Cadastro, você será redirecionado para fazer esse processo. É necessário que você use seu e-mail para se cadastrar. Após se cadastrar, você será redirecionado automaticamente para a tela de seleção de matérias. Até o presente momento, o login via Google está desabilitado.</p>
            </div>
        </div>
        <div class="separador mt-3"></div>
        <div class="card">
            <div class="card-body">
                <h5>2. Uso do Sistema</h5>
                <p class="card-text text-center">
                    O aplicativo disponibiliza duas áreas principais: <b>Turmas ofertadas</b> e <b>  Plano de estudos.</b> Para se inscrever em uma turma, basta selecionar a matéria e salvar sua inscrição. Para retirar uma turma inscrita, basta ir na seçao do plano de estudos e removê-la.
                </p>
            </div>
        </div>
        <div class="buttons">
            <button class="btn btn-warning">
                <a href="index.php"><b>Voltar</b></a>
            </button>
        </div>
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>