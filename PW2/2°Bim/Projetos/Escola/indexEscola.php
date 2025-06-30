<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Menu</title>
    <link rel="stylesheet" href="./AdicionaisPHP/stylephp.css">
</head>
<body>

<section id="php-real" class="conteudo">

    <?php
<<<<<<< HEAD
        include_once 'alunos.php';
        include_once 'cursos.php';
        include_once 'disciplinas.php';
=======
        include_once 'escola.php';
>>>>>>> 06b4a1e4c284848453a7915a0478325c29367fff

        $l1 = new alunos();
        $l2 = new cursos();
        $l3 = new disciplinas();
        
        $pro_bd1 = $l1->listar();
        $pro_bd2 = $l2->listar();
        $pro_bd3 = $l3->listar();

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
<<<<<<< HEAD
=======
        include_once 'escola.php';

        $l1 = new alunos();
        $l2 = new cursos();
        $l3 = new disciplinas();
        
        $pro_bd1 = $l1->listar();
        $pro_bd2 = $l2->listar();
        $pro_bd3 = $l3->listar();

>>>>>>> 06b4a1e4c284848453a7915a0478325c29367fff
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
<<<<<<< HEAD
=======
        include_once 'escola.php';

        $l1 = new alunos();
        $l2 = new cursos();
        $l3 = new disciplinas();
        
        $pro_bd1 = $l1->listar();
        $pro_bd2 = $l2->listar();
        $pro_bd3 = $l3->listar();

>>>>>>> 06b4a1e4c284848453a7915a0478325c29367fff
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