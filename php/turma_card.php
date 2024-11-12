<div class="turma-card" id="row-<?= $row['id'] ?>">
    <div class="campo">
        <label>Turma</label>
        <input type="text" value="<?= $row['turma'] ?>" id="turma-<?= $row['id'] ?>" disabled>
    </div>
    <div class="campo">
        <label>Descrição</label>
        <input type="text" value="<?= $row['descricao'] ?>" id="descricao-<?= $row['id'] ?>" disabled>
    </div>
    <div class="campo">
        <label>Aluno</label>
        <input type="text" value="<?= $row['aluno'] ?>" id="aluno-<?= $row['id'] ?>" disabled>
    </div>
    <div class="campo">
        <label>Prioridade</label>
        <input type="text" value="<?= $row['prioridade'] ?>" id="prioridade-<?= $row['id'] ?>" disabled>
    </div>
    <div class="campo">
        <label>Status</label>
        <select id="status-<?= $row['id'] ?>" disabled>
            <option value="para fazer" <?= $row['status'] == 'para fazer' ? 'selected' : '' ?>>Para Fazer</option>
            <option value="em andamento" <?= $row['status'] == 'em andamento' ? 'selected' : '' ?>>Em Andamento</option>
            <option value="concluido" <?= $row['status'] == 'concluido' ? 'selected' : '' ?>>Concluído</option>
        </select>
    </div>
    <div class="acoes">
        <button onclick="editarTurma(<?= $row['id'] ?>)">Editar</button>
        <button onclick="salvarTurma(<?= $row['id'] ?>)" style="display: none;" id="salvar-<?= $row['id'] ?>">Salvar</button>
        <button><a href="php/excluir.php?id=<?= $row['id'] ?>" onclick="return confirm('Tem certeza que deseja excluir esta turma?')">Excluir</a></button>
    </div>
</div>
