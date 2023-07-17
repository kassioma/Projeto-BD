<?php
// Switch para determinar a ação a ser executada com base no valor de "acao" enviado via requisição
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        // Recupera os dados do formulário para cadastrar um estudante
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $matricula = $_POST["matricula"];
        $curso = $_POST["curso"];
        $senha = md5($_POST["senha"]); // Realiza o hash da senha usando o algoritmo MD5

        // Monta a consulta SQL para inserir um novo estudante na tabela "estudantes"
        $sql = "INSERT INTO estudantes (nome, email, matricula, curso, senha) VALUES ('{$nome}', '{$email}', '{$matricula}', '{$curso}', '{$senha}')";

        // Executa a consulta SQL
        $res = $conn->query($sql);

        // Verifica se a consulta foi executada com sucesso
        if ($res == true) {
            // Exibe um alerta de sucesso e redireciona para a página de listar estudantes
            print "<script>alert('Cadastrou com sucesso!');</script>";
            print "<script>location.href='?page=listar';</script>";
        } else {
            // Exibe um alerta de erro e redireciona para a página de listar estudantes
            print "<script>alert('Não foi possível cadastrar.');</script>";
            print "<script>location.href=?page=listar';</script>";
        }

        break;

    case 'editar':
        // Recupera os dados do formulário para editar um estudante
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $matricula = $_POST["matricula"];
        $curso = $_POST["curso"];
        $senha = md5($_POST["senha"]); // Realiza o hash da senha usando o algoritmo MD5

        // Monta a consulta SQL para atualizar os dados do estudante na tabela "estudantes"
        $sql = "UPDATE estudantes SET 
                nome= '{$nome}',
                email= '{$email}',
                matricula= '{$matricula}',
                curso= '{$curso}',
                senha= '{$senha}'
                WHERE
                    id=" . $_REQUEST["id"];

        // Executa a consulta SQL
        $res = $conn->query($sql);

        // Verifica se a consulta foi executada com sucesso
        if ($res == true) {
            // Exibe um alerta de sucesso e redireciona para a página de listar estudantes
            print "<script>alert('Editado com sucesso!');</script>";
            print "<script>location.href='?page=listar';</script>";
        } else {
            // Exibe um alerta de erro e redireciona para a página de listar estudantes
            print "<script>alert('Não foi possível editar.');</script>";
            print "<script>location.href=?page=listar';</script>";
        }

        break;

    case 'excluir':
        // Monta a consulta SQL para excluir um estudante da tabela "estudantes"
        $sql = "DELETE FROM estudantes WHERE id =" . $_REQUEST["id"];

        // Executa a consulta SQL
        $res = $conn->query($sql);

        // Verifica se a consulta foi executada com sucesso
        if ($res == true) {
            // Exibe um alerta de sucesso e redireciona para a página de listar estudantes
            print "<script>alert('Deletado com sucesso!');</script>";
            print "<script>location.href='?page=listar';</script>";
        } else {
            // Exibe um alerta de erro e redireciona para a página de listar estudantes
            print "<script>alert('Não foi possível deletar.');</script>";
            print "<script>location.href=?page=listar';</script>";
        }

        break;
}
?>