<?php
require 'conexao.php';

$nome = $_POST['nome'] ?? null;
$email = $_POST['email'] ?? null;

if ($nome && $email) {
    $sql = $pdo->prepare("INSERT INTO usuario (nome, email) VALUES (:nome, :email)");
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':email', $email);

    if ($sql->execute()) {
        header("Location: formulario.php");
    } else {
        echo "Error: " . $sql->errorInfo()[2];
    }
} else {
    echo "NULO";
}
?>
