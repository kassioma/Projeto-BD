<?php
// Switch para determinar a ação a ser executada com base no valor de "acao" enviado via requisição
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        // Recupera os dados do formulário para cadastrar um disciplina
        $codigo = $_POST["codigo"];
        $nome = $_POST["nome"];
        // Realiza o hash da senha usando o algoritmo MD5

        // Monta a consulta SQL para inserir um novo disciplina na tabela "disciplinas"
        $sql = "INSERT INTO disciplinas (codigo, nome) VALUES ('{$codigo}', '{$nome}')";

        // Executa a consulta SQL
        $res = $conn->query($sql);

        // Verifica se a consulta foi executada com sucesso
        if ($res == true) {
            // Exibe um alerta de sucesso e redireciona para a página de listar disciplinas
            print "<script>alert('Cadastrou com sucesso!');</script>";
            print "<script>location.href='?page=listar-disciplina';</script>";
        } else {
            // Exibe um alerta de erro e redireciona para a página de listar disciplinas
            print "<script>alert('Não foi possível cadastrar.');</script>";
            print "<script>location.href=?page=listar-disciplina';</script>";
        }

        break;

    case 'editar':
        // Recupera os dados do formulário para editar um disciplina
        $codigo = $_POST["codigo"];
        $nome = $_POST["nome"];

        // Monta a consulta SQL para atualizar os dados do disciplina na tabela "disciplinas"
        $sql = "UPDATE disciplinas SET 
                codigo='{$codigo}',
                nome='{$nome}'
                WHERE
                    id=" . $_REQUEST["iddisciplinas"];

        // Executa a consulta SQL
        $res = $conn->query($sql);


        // Verifica se a consulta foi executada com sucesso
        if ($res == true) {
            // Exibe um alerta de sucesso e redireciona para a página de listar disciplinas
            print "<script>alert('Disciplina editada com sucesso!');</script>";
            print "<script>location.href='?page=listar-disciplina';</script>";
        } else {
            // Exibe um alerta de erro e redireciona para a página de listar disciplinas
            print "<script>alert('Não foi possível editar.');</script>";
            print "<script>location.href='?page=listar-disciplina';</script>";
        }

        break;

    case 'excluir':
        // Monta a consulta SQL para excluir um disciplina da tabela "disciplinas"
        $sql = "DELETE FROM disciplinas WHERE iddisciplinas =" . $_REQUEST["iddisciplinas"];

        // Executa a consulta SQL
        $res = $conn->query($sql);

        // Verifica se a consulta foi executada com sucesso
        if ($res == true) {
            // Exibe um alerta de sucesso e redireciona para a página de listar disciplinas
            print "<script>alert('Deletado com sucesso!');</script>";
            print "<script>location.href='?page=listarDisciplina';</script>";
        } else {
            // Exibe um alerta de erro e redireciona para a página de listar disciplinas
            print "<script>alert('Não foi possível deletar.');</script>";
            print "<script>location.href=?page=listarDisciplina';</script>";
        }

        break;
}
?>