<?php
$cnn = new mysqli("localhost", "admin", "admin", "saep");

if ($cnn->connect_error) {
    die("Connection failed: " . $cnn->connect_error);
}

$id = $_POST['id'];
$turma = $_POST['turma'];
$descricao = $_POST['descricao'];
$aluno = $_POST['aluno'];
$prioridade = $_POST['prioridade'];
$status = $_POST['status'];

$sql = "UPDATE turma SET turma = ?, descricao = ?, aluno = ?, prioridade = ?, `status` = ? WHERE id = ?";
$stmt = $cnn->prepare($sql);
$stmt->bind_param("sssssi", $turma, $descricao, $aluno, $prioridade, $status, $id);

if ($stmt->execute()) {
    echo "Turma atualizada com sucesso!";
} else {
    echo "Erro ao atualizar turma: " . $stmt->error;
}

$stmt->close();
$cnn->close();
?>
