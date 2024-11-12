<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Tarefas</title>
    <link rel="stylesheet" href="css/gerenciarturma.css">
</head>

<body>
    <header>
        <h1>Gerenciamento de Tarefas</h1>
        <nav>
            <ul>
                <li><a href="cadastro-usuarios.php">Cadastro de Usuários</a></li>
                <li><a href="cadastro-tarefas.php">Cadastro de Tarefas</a></li>
                <li><a href="gerenciar-tarefas.php">Gerenciar Tarefas</a></li>
            </ul>
        </nav>
    </header>

    <h2>Turmas</h2>
    <div class="turmas-container">
        <!-- Coluna Para Fazer -->
        <div id="para-fazer" class="status-column">
            <h3>Para Fazer</h3>
            <?php
            $cnn = new mysqli("localhost", "admin", "admin", "saep");
            $sql = "SELECT id, turma, descricao, aluno, prioridade, `status` FROM turma WHERE `status` = 'para fazer'";
            $result = $cnn->query($sql);

            while ($row = $result->fetch_assoc()) {
                include 'php/turma_card.php';
            }
            ?>
        </div>

        <!-- Coluna Em Andamento -->
        <div id="em-andamento" class="status-column">
            <h3>Em Andamento</h3>
            <?php
            $sql = "SELECT id, turma, descricao, aluno, prioridade, `status` FROM turma WHERE `status` = 'em andamento'";
            $result = $cnn->query($sql);

            while ($row = $result->fetch_assoc()) {
                include 'php/turma_card.php';
            }
            ?>
        </div>

        <!-- Coluna Concluído -->
        <div id="concluido" class="status-column">
            <h3>Concluído</h3>
            <?php
            $sql = "SELECT id, turma, descricao, aluno, prioridade, `status` FROM turma WHERE `status` = 'concluido'";
            $result = $cnn->query($sql);

            while ($row = $result->fetch_assoc()) {
                include 'php/turma_card.php';
            }
            $cnn->close();
            ?>
        </div>
    </div>
    <script>
    function editarTurma(id) {
        document.getElementById(`turma-${id}`).disabled = false;
        document.getElementById(`descricao-${id}`).disabled = false;
        document.getElementById(`aluno-${id}`).disabled = false;
        document.getElementById(`prioridade-${id}`).disabled = false;
        document.getElementById(`status-${id}`).disabled = false;

        // Mostra o botão Salvar e oculta o botão Editar
        document.getElementById(`salvar-${id}`).style.display = 'inline-block';
    }

    function salvarTurma(id) {
        const turma = document.getElementById(`turma-${id}`).value;
        const descricao = document.getElementById(`descricao-${id}`).value;
        const aluno = document.getElementById(`aluno-${id}`).value;
        const prioridade = document.getElementById(`prioridade-${id}`).value;
        const status = document.getElementById(`status-${id}`).value;

        const formData = new FormData();
        formData.append('id', id);
        formData.append('turma', turma);
        formData.append('descricao', descricao);
        formData.append('aluno', aluno);
        formData.append('prioridade', prioridade);
        formData.append('status', status);

        fetch('php/atualizarTurma.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            alert(data);
            location.reload(); // Recarrega para atualizar a posição com base no novo status
        })
        .catch(error => {
            console.error('Erro ao atualizar turma:', error);
        });
    }
</script>

</body>

</html>
