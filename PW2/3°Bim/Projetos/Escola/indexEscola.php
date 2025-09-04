<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Menu</title>
    <link rel="stylesheet" href="./AdicionaisPHP/stylephp.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

<section id="php-real" class="conteudo">

    <?php
        include_once 'alunos.php';
        include_once 'cursos.php';
        include_once 'disciplinas.php';

        $l1 = new alunos();
        $l2 = new cursos();
        $l3 = new disciplinas();

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btnenviar'])) {
            $tabela = $_POST['Tabela'];

            switch ($tabela) {
                case 'Alunos':
                    include_once 'alunos.php';
                    $aluno = new alunos();
                    $aluno->setMatricula(trim($_POST['matricula']));
                    $aluno->setNome(trim($_POST['nome']));
                    $aluno->setEndereco(trim($_POST['endereco']));
                    $aluno->setCidade(trim($_POST['cidade']));
                    $aluno->setCodCurso(trim($_POST['codcurso']));
                    echo "<h3>" . $aluno->salvar() . "</h3>";
                    $pro_bd1 = $aluno->listar();
                    break;

                case 'Cursos':
                    include_once 'cursos.php';
                    $curso = new cursos();
                    $curso->setCodCurso(trim($_POST['codcurso_curso']));
                    $curso->setNome(trim($_POST['nome_curso']));
                    $curso->setCodDisc1(trim($_POST['coddisc1']));
                    $curso->setCodDisc2(trim($_POST['coddisc2']));
                    $curso->setCodDisc3(trim($_POST['coddisc3']));
                    echo "<h3>" . $curso->salvar() . "</h3>";
                    $pro_bd2 = $curso->listar();
                    break;

                case 'Disciplinas':
                    include_once 'disciplinas.php';
                    $disciplina = new disciplinas();
                    $disciplina->setCodDisciplina(trim($_POST['coddisciplina']));
                    $disciplina->setNomeDisciplina(trim($_POST['nome_disciplina']));
                    echo "<h3>" . $disciplina->salvar() . "</h3>";
                    $pro_bd3 = $disciplina->listar();
                    break;
            }
        }

        if (isset($_GET['excluir']) && isset($_GET['Tabela'])) {
            switch ($_GET['Tabela']) {
                case 'Alunos':
                    $l1->setMatricula($_GET['excluir']);
                    $l1->excluir();
                    break;
                case 'Cursos':
                    $l2->setCodCurso($_GET['excluir']);
                    $l2->excluir();
                    break;
                case 'Disciplinas':
                    $l3->setCodDisciplina($_GET['excluir']);
                    $l3->excluir();
                    break;
            }
            header("Location: ".$_SERVER['PHP_SELF']."?Tabela=".$_GET['Tabela']);
            exit;
        }

        $table = $_GET['Tabela'] ?? ($_POST['Tabela'] ?? null);
        $pesquisa = $_GET['pesquisa'] ?? null;

        switch ($table) {
            case 'Alunos':
                if ($pesquisa) {
                    $l1->setNome($pesquisa);
                    $pro_bd1 = $l1->consultar();
                } else {
                    $pro_bd1 = $l1->listar();
                }
                break;
            case 'Cursos':
                if ($pesquisa) {
                    $l2->setNome($pesquisa);
                    $pro_bd2 = $l2->consultar();
                } else {
                    $pro_bd2 = $l2->listar();
                }
                break;
            case 'Disciplinas':
                if ($pesquisa) {
                    $l3->setNomeDisciplina($pesquisa);
                    $pro_bd3 = $l3->consultar();
                } else {
                    $pro_bd3 = $l3->listar();
                }
                break;
        }
    ?>

    <?php if($table === "Alunos"){ ?>
    <h1>Lista de Alunos</h1>

    <form method="GET" class="search-bar">
        <input type="hidden" name="Tabela" value="Alunos">
        <input type="text" name="pesquisa" placeholder="Buscar aluno..." value="<?php echo $pesquisa ?? ''; ?>">
        <button type="submit">Pesquisar</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>Matrícula</th>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Cidade</th>
                <th>Curso</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pro_bd1 as $pro_mostrar) { ?>
                <tr>
                    <td><?php echo $pro_mostrar[0]; ?></td>
                    <td><?php echo $pro_mostrar[1]; ?></td>
                    <td><?php echo $pro_mostrar[2]; ?></td>
                    <td><?php echo $pro_mostrar[3]; ?></td>
                    <td><?php echo $pro_mostrar[4]; ?></td>
                    <td>
                        <a href="?Tabela=Alunos&excluir=<?php echo $pro_mostrar[0]; ?>" 
                           onclick="return confirm('Deseja excluir este aluno?')">
                           <i class="fa fa-trash delete-icon"></i>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php } ?>


    <?php if($table === "Cursos"){ ?>
    <h1>Lista de Cursos</h1>

    <form method="GET" class="search-bar">
        <input type="hidden" name="Tabela" value="Cursos">
        <input type="text" name="pesquisa" placeholder="Buscar curso..." value="<?php echo $pesquisa ?? ''; ?>">
        <button type="submit">Pesquisar</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Disciplina 1</th>
                <th>Disciplina 2</th>
                <th>Disciplina 3</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pro_bd2 as $pro_mostrar) { ?>
                <tr>
                    <td><?php echo $pro_mostrar[0]; ?></td>
                    <td><?php echo $pro_mostrar[1]; ?></td>
                    <td><?php echo $pro_mostrar[2]; ?></td>
                    <td><?php echo $pro_mostrar[3]; ?></td>
                    <td><?php echo $pro_mostrar[4]; ?></td>
                    <td>
                        <a href="?Tabela=Cursos&excluir=<?php echo $pro_mostrar[0]; ?>" 
                           onclick="return confirm('Deseja excluir este curso?')">
                           <i class="fa fa-trash delete-icon"></i>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php } ?>


    <?php if($table === "Disciplinas"){ ?>
    <h1>Lista de Disciplinas</h1>

    <form method="GET" class="search-bar">
        <input type="hidden" name="Tabela" value="Disciplinas">
        <input type="text" name="pesquisa" placeholder="Buscar disciplina..." value="<?php echo $pesquisa ?? ''; ?>">
        <button type="submit">Pesquisar</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>Código</th>
                <th>Disciplina</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pro_bd3 as $pro_mostrar) { ?>
                <tr>
                    <td><?php echo $pro_mostrar[0]; ?></td>
                    <td><?php echo $pro_mostrar[1]; ?></td>
                    <td>
                        <a href="?Tabela=Disciplinas&excluir=<?php echo $pro_mostrar[0]; ?>" 
                           onclick="return confirm('Deseja excluir esta disciplina?')">
                           <i class="fa fa-trash delete-icon"></i>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php } ?>

    <button id="close-btn" class="voltar">Fechar</button>
</section>

<script src="./AdicionaisPHP/scriptphp.js"></script>

</body>
</html>