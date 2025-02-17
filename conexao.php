<?php 
define('HOST', 'localhost');
define('USUARIO', 'alvaro');
define('SENHA', '');
define('DB', 'matricula');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('died');
?> 