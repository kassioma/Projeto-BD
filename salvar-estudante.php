<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $matricula = $_POST["matricula"];
        $curso = $_POST["curso"];
        $senha = md5($_POST["senha"]);

        $sql = "INSERT INTO estudantes (nome, email, matricula, curso, senha) VALUES ('{$nome}', '{$email}', '{$matricula}', '{$curso}', '{$senha}')";

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Cadastrou com sucesso!');</script>";
            print "<script>location.href='?page=listar';</script>";
        } else {
            print "<script>alert('Não foi possível cadastrar.');</script>";
            print "<script>location.href=?page=listar';</script>";
        }

        break;

    case 'editar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $matricula = $_POST["matricula"];
        $curso = $_POST["curso"];
        $senha = md5($_POST["senha"]);

        $sql = "UPDATE estudantes SET 
                nome= '{$nome}',
                email= '{$email}',
                matricula= '{$matricula}',
                curso= '{$curso}',
                senha= '{$senha}'
                WHERE
                    id=" . $_REQUEST["id"];

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Editado com sucesso!');</script>";
            print "<script>location.href='?page=listar';</script>";
        } else {
            print "<script>alert('Não foi possível editar.');</script>";
            print "<script>location.href=?page=listar';</script>";
        }

        break;

    case 'excluir':

        $sql = "DELETE FROM estudantes WHERE id =" . $_REQUEST["id"];

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Deletado com sucesso!');</script>";
            print "<script>location.href='?page=listar';</script>";
        } else {
            print "<script>alert('Não foi possível deletar.');</script>";
            print "<script>location.href=?page=listar';</script>";
        }

        break;

}