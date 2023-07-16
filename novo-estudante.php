<h1>Novo estudante</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control" placeholder="Digite seu nome">
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" placeholder="email@unb.com.br">
    </div>
    <div class="mb-3">
        <label>Matrícula</label>
        <input type="text" name="matricula" class="form-control" placeholder="Digite sua matrícula">
    </div>
    <div class="mb-3">
        <label>Curso</label>
        <input type="text" name="curso" class="form-control" placeholder="Digite seu curso">
    </div>
    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="senha" class="form-control" placeholder="Digite sua senha">
    </div>
    <div class="mb-3">
        <button type"submit" class="btn btn-primary">Enviar</button>
    </div>
</form>