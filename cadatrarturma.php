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
    <form action="php/cadatrarturma.php" method="post">
        <label for="descricao">descrição</label>
        <input type="text" name="descricao" id="descricao">
        <br>
        <label for="turma">turma</label>
        <input type="text" name="turma" id="turma">
        <br>
        <label for="aluno"> aluno</label>
    <select name="aluno" id=" aluno">
        <?php
        include_once ('php/include.php');
        $cnn = new mysqli("localhost", "admin", "admin", "saep");
        $sql = "SELECT id, nome FROM aluno";
        $result = $cnn->query($sql);
        while ($row = $result->fetch_assoc()) {
            echo '<option value="' . $row["nome"] . '">' . $row["nome"] . '</option>';
        }
        $cnn->close();
        ?>
    </select>
    <br>
    <label for="prioridade"> prioridade</label>
    <select name="prioridade" id="prionidade">
        <option value="PCD">PCD</option>
        <option value="não é PCD">não é PCD</option>
    </select>
    <br>
    
        <input type="submit" value="cadastrar">
</form>
</body>
</html>