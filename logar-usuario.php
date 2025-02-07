<?php
require './includes/conexao.php';
session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT id, nome, senha FROM alunos WHERE nome = ?";

    if ($stmt = $conexao->prepare($sql)) {
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $nome, $senha_banco);
            $stmt->fetch();
            if ($password === $senha_banco) {
                $_SESSION['id'] = $id; 
                $_SESSION['username'] = $nome; 
                header('Location: instrucoes.php');
                exit;
            } else {
                header('Location: index.php?erro=senha_incorreta'); 
                exit;
            }
        } else {
            header('Location: index.php?erro=usuario_nao_encontrado'); 
            exit;
        }
        $stmt->close();
    } else {
        echo "Erro: Não foi possível preparar a consulta.";
    }
} else {
    echo "Erro: Nome de usuário ou senha não foram enviados.";
}

$conexao->close();
