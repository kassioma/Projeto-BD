<h1>Lista de Disciplinas</h1>
<?php
// Consulta ao banco de dados para recuperar os estudantes
$sql = "SELECT * FROM disciplinas";
$res = $conn->query($sql);
$qtd = $res->num_rows;

// Verifica se existem estudantes retornados pela consulta
if ($qtd > 0) {
    // Cria uma tabela para exibir os estudantes em formato tabular
    print "<table class='table table-hover table-striped table-bordered'>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Código</th>";
    print "<th>Nome</th>";
    print "<th>Ações</th>";

    // Itera sobre cada estudante retornado pela consulta
    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>" . $row->iddisciplinas . "</td>";
        print "<td>" . $row->codigo . "</td>";
        print "<td>" . $row->nome . "</td>";

        // Cria botões para editar e excluir cada estudante
        print "<td>
                    
                    <button onclick=\"location.href='?page=editar&iddisciplinas=".$row->iddisciplinas."';\" class='btn btn-success'>Editar</button>
                    <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvarDisciplina&acao=excluir&iddisciplinas=".$row->iddisciplinas."';}else{false;}\" class='btn btn-danger'>Excluir</button>
               
                </td>";
        print "</tr>";
    }
    print "</table>";
} else {
    // Exibe uma mensagem de alerta caso nenhum estudante seja encontrado
    print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
}
?>
