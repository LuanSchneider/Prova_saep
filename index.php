<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        Gerenciador de alunos
        <button onclick="location.href='index.php'"> cadastrar aluno</button>
        <button onclick="location.href='cadatrarturma.php'"> cadastrar turma</button>
        <button onclick="location.href='gerenciarturma.php'"> gerenciar turma</button>
    </header>
    <h2>cadastro de alunos</h2>
    <form action="php/index.php" method="post">
        <label for="name"> nome</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="email">email</label>
        <input type="email" name="email" id="email">
        <br>
        <input type="submit"VALUE="cadastrar" >
    </form>
</body>
</html>