<?php
$cnn = new mysqli("localhost", "admin", "admin", "saep");

if ($cnn->connect_error) {
    die("Connection failed: " . $cnn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];

$sql = "INSERT INTO aluno (nome, email) VALUES (?, ?)";
$stmt = $cnn->prepare($sql);
$stmt->bind_param("ss", $name, $email);

if ($stmt->execute()) {
    echo "Aluno cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar aluno: " . $stmt->error;
}

$stmt->close();
$cnn->close();
?>