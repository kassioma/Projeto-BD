<h1>Editar estudante</h1>

<?php
    // Consulta ao banco de dados para recuperar os dados do estudante específico
    $sql = "SELECT * FROM estudantes WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <!-- Um formulário para editar os dados do estudante -->
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" value="<?php print $row->email; ?>" class="form-control" placeholder="email@unb.com.br">
    </div>
    <div class="mb-3">
        <label>Matrícula</label>
        <input type="text" name="matricula" value="<?php print $row->matricula; ?>" class="form-control" placeholder="Digite sua matrícula">
    </div>
    <div class="mb-3">
        <label>Curso</label>
        <input type="text" name="curso" value="<?php print $row->curso; ?>" class="form-control" placeholder="Digite seu curso">
    </div>
    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="senha" class="form-control" required placeholder="Digite sua senha">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>
