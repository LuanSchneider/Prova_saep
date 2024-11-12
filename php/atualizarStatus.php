<?php
function atualizarStatus($id) {
    $cnn = new mysqli("localhost", "admin", "admin", "saep");
    
    if ($cnn->connect_error) {
        die("Erro de conexão: " . $cnn->connect_error);
    }

    $status = $_POST['status'];
    $sql = "UPDATE turma SET `status` = ? WHERE id = ?";
    $stmt = $cnn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("si", $status, $id);
        
        if ($stmt->execute()) {
            echo "Status atualizado com sucesso!";
        } else {
            echo "Erro ao atualizar status: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Erro ao preparar a query: " . $cnn->error;
    }

    $cnn->close();
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    atualizarStatus($_GET["id"]);
}

?>