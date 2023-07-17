<h1>Adcione uma Disciplina</h1>

<form action="?page=salvarDisciplina" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <!-- Um formulário para adicionar Disciplinas -->
    <div class="mb-3">
        <label>Código</label>
        <input type="text" name="codigo" class="form-control" placeholder="Digite o código da Disciplina">
    </div>
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control" placeholder="Digite o nome da Disciplina">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>