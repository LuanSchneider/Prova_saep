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
        <h1>Gerenciamento de Tarefas</h1>
        <nav>
            <ul>
                <li><a href="index.php">Cadastro de aluno</a></li>
                <li><a href="cadatrarturma.php">Cadastro de turma</a></li>
                <li><a href="gerenciarturma.php">Gerenciar turma</a></li>
            </ul>
        </nav>
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