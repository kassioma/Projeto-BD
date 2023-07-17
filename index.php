<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AvaUnB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <!-- Barra de navegação -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">AVAUnB</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=novo">Adicionar Estudante</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=listar">Lista de Estudantes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=novaDisciplina">Adicionar Disciplina</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=listarDisciplina">Lista de Disciplinas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col mt5">
            <?php
                include("config.php"); // Arquivo para conexão com o Banco
                // Switch para incluir os arquivos de acordo com a página solicitada
                switch(@$_REQUEST["page"]){
                    case "novo":
                        include("novo-estudante.php"); // Inclui o arquivo para adicionar estudante
                    break;
                    case "listar":
                        include("listar-estudante.php"); // Inclui o arquivo para listar estudantes
                    break;
                    case "salvar":
                        include("salvar-estudante.php"); // Inclui o arquivo para salvar estudante
                    break;
                    case "editar":
                        include("editar-estudante.php"); // Inclui o arquivo para editar estudante
                    break;
                    case "novaDisciplina":
                        include("./disciplinas/nova-disciplina.php"); // Inclui o arquivo para adicionar disciplina
                    break;
                    case "listarDisciplina":
                        include("./disciplinas/listar-disciplina.php"); // Inclui o arquivo para listar disciplinas
                    break;
                    case "salvarDisciplina":
                        include("./disciplinas/salvar-disciplina.php"); // Inclui o arquivo para salvar disciplinas
                    break;
                    case "editarDisciplina":
                        include("./disciplinas/editar-disciplina.php"); // Inclui o arquivo para salvar disciplinas
                    break;
                    default:
                        print "<h1>Bem vindos!<h1>"; // Página padrão exibida se nenhuma página específica for solicitada
                    
                }
            ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>