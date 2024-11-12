<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
        Gerenciador de alunos
        <button onclick="location.href='index.php'"> cadastrar aluno</button>
        <button onclick="location.href='cadatrarturma.php'"> cadastrar turma</button>
        <button onclick="location.href='gerenciarturma.php'"> gerenciar turma</button>
    </header>
    <?php
    echo'<h2>Turmas</h2>';
   
    $cnn = new mysqli("localhost", "admin", "admin", "saep");
    $sql = "SELECT id, turma , descricao, aluno, prioridade FROM turma";
    $result = $cnn->query($sql);
    while ($row = $result->fetch_assoc()) {
   
    
        echo"
        <div>
            <h3>Turma: " . $row["turma"] . "</h3>
            <p>Descrição: " . $row["descricao"] . "</p>
            <p>Aluno: " . $row["aluno"] . "</p>
            <p>Prioridade: " . $row["prioridade"] . "</p>
    
 <form method='POST' action='php/atualizarStatus.php?id=" . $row["id"] . "'>
    
   <select name='status' id='status'>
        <option value='fazer'>fazer</option>
        <option value='concluido'>concluido</option>
        <option value='cancelado'>cancelado</option>
        <option value='para fazer'>para fazer</option>
        <option value='em andamento'>em andamento</option>
        <option value='cancelado'>cancelado</option>
      
        
    </select>
    <button type='submit'>Atualizar Status</button>
</form>
<button>
    <a href='php/excluir.php?id=" . $row["id"] . "'>Excluir</a>
</button>
<button>
    <a href='php/editar.php?id=" . $row["id"] . "'>Editar</a>
        </div>
        ";
        
    }
    function atualizarStatus($id) {
        $cnn = new mysqli("localhost", "admin", "admin", "saep");
        $status = $_POST['status'];
        $sql = "UPDATE turma SET `status` = '$status' WHERE id = $id";
        $cnn->query($sql);
        $cnn->close();
    }
    $cnn->close();
    echo'</select>';
    ?>
    
    
</body>
</html>
