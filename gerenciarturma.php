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
    <botton onclick=>
            
        </div>
        ";
    }
    $cnn->close();
    echo'</select>';
    ?>
    
</body>
</html>