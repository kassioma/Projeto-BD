<h1>Lista de estudantes</h1>
<?php
// Consulta ao banco de dados para recuperar os estudantes
$sql = "SELECT * FROM estudantes";
$res = $conn->query($sql);
$qtd = $res->num_rows;

// Verifica se existem estudantes retornados pela consulta
if ($qtd > 0) {
    // Cria uma tabela para exibir os estudantes em formato tabular
    print "<table class='table table-hover table-striped table-bordered'>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Nome</th>";
    print "<th>E-mail</th>";
    print "<th>Matrícula</th>";
    print "<th>Curso</th>";
    print "<th>Ações</th>";
    print "</tr>";

    // Itera sobre cada estudante retornado pela consulta
    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>" . $row->id . "</td>";
        print "<td>" . $row->nome . "</td>";
        print "<td>" . $row->email . "</td>";
        print "<td>" . $row->matricula . "</td>";
        print "<td>" . $row->curso . "</td>";

        // Cria botões para editar e excluir cada estudante
        print "<td>
                <button onclick=\"location.href='?page=editar&id=" . $row->id . "';\" class='btn btn-success'>Editar</button>
                <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=" . $row->id . "';}else{return false;}\" class='btn btn-danger'>Excluir</button>
                </td>";
        print "</tr>";
    }

    print "</table>";
} else {
    // Exibe uma mensagem de alerta caso nenhum estudante seja encontrado
    print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
}
?>
