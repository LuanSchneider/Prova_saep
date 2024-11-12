<?php
$cnn = new mysqli("localhost", "admin", "admin", "saep");

if ($cnn->connect_error) {
    die("Connection failed: " . $cnn->connect_error);
}

$descricao = $_POST['descricao'];
$turma = $_POST['turma'];
$aluno = $_POST['aluno'];
$prioridade = $_POST['prioridade'];

$sql = "INSERT INTO turma (descricao, turma, aluno, prioridade) VALUES (?, ?, ?, ?)";
$stmt = $cnn->prepare($sql);
$stmt->bind_param("ssss", $descricao, $turma, $aluno, $prioridade);

if ($stmt->execute()) {
    echo "Turma cadastrada com sucesso!";
} else {
    echo "Erro ao cadastrar turma: " . $stmt->error;
}

$stmt->close();
$cnn->close();

?>
