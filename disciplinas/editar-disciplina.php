<h1>Editar Disciplina</h1>

<?php 
    // Consulta ao banco de dados para recuperar os dados da disciplina a ser editada
    $sql = "SELECT * FROM disciplinas WHERE iddisciplinas=".$_REQUEST["iddisciplinas"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action="?page=salvarDisciplina" method="POST">
    <input type="hidden" name="acao" value="editarDisciplina">
    <input type="hidden" name="iddisciplinas" value="<?php print $row->iddisciplinas;?>">

    <!-- Campo para editar o código da disciplina -->
    <div class="mb-3">
        <label>Código</label>
        <input type="text" name="codigo" value="<?php print $row->codigo;?>" class="form-control">
    </div>
    
    <!-- Campo para editar o nome da disciplina -->
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" value="<?php print $row->nome;?>" class="form-control">
    </div>
    
    <!-- Botão para enviar o formulário e salvar as alterações -->
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>