<?php
session_start();
require 'conexao.php';

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['matricula'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $matricula = $_POST['matricula'];

    $sql = "INSERT INTO alunos (nome, senha, email, matricula) VALUES (?, ?, ?, ?)";

    if ($stmt = $conexao->prepare($sql)) {

        $stmt->bind_param("ssss", $username, $password, $email, $matricula);

        // Execute the statement
        if ($stmt->execute()) {
            header('Location: index.php');
            exit;
        } else {
            header('Location: index.php');
            exit;
        }

        // Close the statement
        $stmt->close();
    } else {
        // Handle query preparation failure
        echo "Error: Could not prepare query.";
    }
} else {
    echo "Error: Missing username or password.";
}

$conexao->close();
?>
