<?php
$cnn = new mysqli("localhost", "admin", "admin", "saep");

if ($cnn->connect_error) {
    die("Connection failed: " . $cnn->connect_error);
}

$descricao = $_POST['descricao'];
$turma = $_POST['turma'];
$aluno = $_POST['aluno'];
$prioridade = $_POST['prioridade'];
$status = 'para fazer';

$sql = "INSERT INTO turma (descricao, turma, aluno, prioridade, `status`) VALUES (?, ?, ?, ?, ?)";
$stmt = $cnn->prepare($sql);

if ($stmt === false) {
    die("Erro ao preparar a query: " . $cnn->error);
}

$stmt->bind_param("sssss", $descricao, $turma, $aluno, $prioridade, $status);

if ($stmt->execute()) {
    echo "Turma cadastrada com sucesso!";
} else {
    echo "Erro ao cadastrar turma: " . $stmt->error;
}

$stmt->close();
$cnn->close();
?>
