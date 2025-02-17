<?php
require 'conexao.php';
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matérias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/styles/areaaluno.css">
    <link rel="shortcut icon" href="img/faetec.ico" type="image/x-icon">
</head>

<body>
    <div>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid fixed-top flex-column">
                <a class="navbar-brand" href="#">Faeterj Paracambi Alumni</a>
                <p>Matérias</p>
            </div>
        </nav>
    </div>
    <div class="list-group">
        <a href="#" class="first list-group-item list-group-item-action" aria-current="true">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Estrutura de Dados</h5>
                <small>ESDA</small>
            </div>
            <p class="mb-1">Professor: Pafúncio Gomes</p>
            <small>SEGUNDA FEIRA | 7:50-12:00 </small>
        </a>
        <a href="#" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Java para Ornitorrincos</h5>
                <small class="text-body-secondary">JPOR</small>
            </div>
            <p class="mb-1">Professora: Jubiscléia Silva</p>
            <small class="text-body-secondary">SEGUNDA FEIRA | 17:15-21:45</small>
        </a>
        <a href="#" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Controle de Wave</h5>
                <small class="text-body-secondary">CTWV</small>
            </div>
            <p class="mb-1">Professor: Gu Mumias</p>
            <small class="text-body-secondary">QUINTA FEIRA | 8:40-12:00</small>
        </a>
        <a href="#" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Magia Avançada III</h5>
                <small class="text-body-secondary">MAV3</small>
            </div>
            <p class="mb-1">Professora: Hermione</p>
            <small class="text-body-secondary">SEXTA FEIRA | 23:45-02:00</small>
        </a>
        <a href="#" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Gadagem Profissional | Musculação</h5>
                <small class="text-body-secondary">GPMS</small>
            </div>
            <p class="mb-1">Professor: Thiago Pio</p>
            <small class="text-body-secondary">TERÇA FEIRA | 10:00-11:00</small>
        </a>
        <a href="#" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Técnicas Avançadas | Tigrinho</h5>
                <small class="text-body-secondary">TIGER</small>
            </div>
            <p class="mb-1">Professor: Luizinho</p>
            <small class="text-body-secondary">TERÇA FEIRA | 22:00-INDETERMINADO</small>
        </a>
    </div>
    <button href="index.php" class="btn btn-warning py-2 mt-3"><a href="index.php"><b>Voltar</b></a></button>
</body>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>