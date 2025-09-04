<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Menu</title>
    <link rel="stylesheet" href="./AdicionaisPHP/stylephp.css">
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
        
        $pro_bd1 = $l1->listar();
        $pro_bd2 = $l2->listar();
        $pro_bd3 = $l3->listar();

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


        $table = $_POST['Tabela'] ?? null;
        if($table === "Alunos"){
    ?>
    <h1>Lista de Alunos</h1>

    <table>
        <thead>
            <tr>
                <th>Matrícula</th>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Cidade</th>
                <th>Curso</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($pro_bd1 as $pro_mostrar) {
                ?>
                <tr>
                    <td><?php echo $pro_mostrar[0]; ?></td>
                    <td><?php echo $pro_mostrar[1]; ?></td>
                    <td><?php echo $pro_mostrar[2]; ?></td>
                    <td><?php echo $pro_mostrar[3]; ?></td>
                    <td><?php echo $pro_mostrar[4]; ?></td>
                </tr>
                <?php }} ?>
            
        </tbody>
    </table>

        <?php
        $table = $_POST['Tabela'] ?? null;
        if($table === "Cursos"){
    ?>
    <h1>Lista de Cursos</h1>

    <table>
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Disciplina 1</th>
                <th>Disciplina 2</th>
                <th>Disciplina 3</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($pro_bd2 as $pro_mostrar) {
                ?>
                <tr>
                    <td><?php echo $pro_mostrar[0]; ?></td>
                    <td><?php echo $pro_mostrar[1]; ?></td>
                    <td><?php echo $pro_mostrar[2]; ?></td>
                    <td><?php echo $pro_mostrar[3]; ?></td>
                    <td><?php echo $pro_mostrar[4]; ?></td>
                </tr>
                <?php }} ?>
            
        </tbody>
    </table>

        <?php
        $table = $_POST['Tabela'] ?? null;
        if($table === "Disciplinas"){
    ?>
    <h1>Lista de Disciplinas</h1>

    <table>
        <thead>
            <tr>
                <th>Código</th>
                <th>Disciplina</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($pro_bd3 as $pro_mostrar) {
                ?>
                <tr>
                    <td><?php echo $pro_mostrar[0]; ?></td>
                    <td><?php echo $pro_mostrar[1]; ?></td>
                </tr>
                <?php }} ?>
            
        </tbody>
    </table>

    <button id="close-btn" class="voltar">Fechar</button>
</section>

<script src="./AdicionaisPHP/scriptphp.js"></script>

</body>
</html>