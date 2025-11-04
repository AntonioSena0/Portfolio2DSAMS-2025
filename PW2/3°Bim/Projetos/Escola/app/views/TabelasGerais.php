<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title><?php echo htmlspecialchars($table ?? 'Gerenciamento'); ?></title>
    <link rel="stylesheet" href="./CSS/stylephp.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

<section id="php-real" class="conteudo">

    <?php if (isset($_GET['msg'])) { ?>
        <h3 class="message-status"><?php echo htmlspecialchars(urldecode($_GET['msg'])); ?></h3>
    <?php } ?>

    <h1>Tabela: <?php echo htmlspecialchars($table ?? 'Dados'); ?></h1>

    <form class="search-form" action="index.php" method="GET">
        <input type="hidden" name="url" value="<?php echo strtolower($table); ?>">
        <input type="text" name="pesquisa" placeholder="Buscar em <?php echo htmlspecialchars($table); ?>..." value="<?php echo htmlspecialchars($pesquisa ?? ''); ?>">
        <button type="submit">Pesquisar</button>
    </form>

    <div class="table-container">

    <?php if ($table === 'Alunos') { ?>
        
        <table>
            <thead>
                <tr>
                    <th>Matrícula</th>
                    <th>Nome</th>
                    <th>Endereço</th>
                    <th>Cidade</th>
                    <th>Cod. Curso</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($pro_bd)) {
                    foreach ($pro_bd as $pro_mostrar) { ?>
                        <tr>
                            <td><?php echo htmlspecialchars($pro_mostrar['matricula']); ?></td>
                            <td><?php echo htmlspecialchars($pro_mostrar['nome']); ?></td>
                            <td><?php echo htmlspecialchars($pro_mostrar['endereco']); ?></td>
                            <td><?php echo htmlspecialchars($pro_mostrar['cidade']); ?></td>
                            <td><?php echo htmlspecialchars($pro_mostrar['codcurso']); ?></td>
                            <td>
                                <a href="index.php?url=alunos/deletar&id=<?php echo $pro_mostrar['matricula']; ?>" 
                                   onclick="return confirm('Tem certeza que deseja excluir este aluno?')">
                                   <i class="fa fa-trash delete-icon"></i>
                                </a>
                                <a href="index.php?url=alunos&alterar=<?php echo $pro_mostrar['matricula']; ?>#modal">
                                   <i class="fa-solid fa-pen-to-square update-icon"></i>
                                </a>
                            </td>
                        </tr>
                    <?php } 
                } else { ?>
                    <tr><td colspan="6">Nenhum aluno encontrado.</td></tr>
                <?php } ?>
            </tbody>
        </table>

    <?php } elseif ($table === 'Cursos') { ?>
        
        <table>
            <thead>
                <tr>
                    <th>Cod. Curso</th>
                    <th>Nome</th>
                    <th>Cod. Disc. 1</th>
                    <th>Cod. Disc. 2</th>
                    <th>Cod. Disc. 3</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($pro_bd)) {
                    foreach ($pro_bd as $pro_mostrar) { ?>
                        <tr>
                            <td><?php echo htmlspecialchars($pro_mostrar['codcurso']); ?></td>
                            <td><?php echo htmlspecialchars($pro_mostrar['nome']); ?></td>
                            <td><?php echo htmlspecialchars($pro_mostrar['coddisc1']); ?></td>
                            <td><?php echo htmlspecialchars($pro_mostrar['coddisc2']); ?></td>
                            <td><?php echo htmlspecialchars($pro_mostrar['coddisc3']); ?></td>
                            <td>
                                <a href="index.php?url=cursos/deletar&id=<?php echo $pro_mostrar['codcurso']; ?>" 
                                   onclick="return confirm('Tem certeza que deseja excluir este curso?')">
                                   <i class="fa fa-trash delete-icon"></i>
                                </a>
                                <a href="index.php?url=cursos&alterar=<?php echo $pro_mostrar['codcurso']; ?>#modal">
                                   <i class="fa-solid fa-pen-to-square update-icon"></i>
                                </a>
                            </td>
                        </tr>
                    <?php } 
                } else { ?>
                    <tr><td colspan="6">Nenhum curso encontrado.</td></tr>
                <?php } ?>
            </tbody>
        </table>

    <?php } elseif ($table === 'Disciplinas') { ?>

        <table>
            <thead>
                <tr>
                    <th>Cod. Disciplina</th>
                    <th>Nome da Disciplina</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($pro_bd)) {
                    foreach ($pro_bd as $pro_mostrar) { ?>
                        <tr>
                            <td><?php echo htmlspecialchars($pro_mostrar['CodDisciplina']); ?></td>
                            <td><?php echo htmlspecialchars($pro_mostrar['NomeDisciplina']); ?></td>
                            <td>
                                <a href="index.php?url=disciplinas/deletar&id=<?php echo $pro_mostrar['CodDisciplina']; ?>" 
                                   onclick="return confirm('Tem certeza que deseja excluir esta disciplina?')">
                                   <i class="fa fa-trash delete-icon"></i>
                                </a>
                                <a href="index.php?url=disciplinas&alterar=<?php echo $pro_mostrar['CodDisciplina']; ?>#modal">
                                   <i class="fa-solid fa-pen-to-square update-icon"></i>
                                </a>
                            </td>
                        </tr>
                    <?php } 
                } else { ?>
                    <tr><td colspan="3">Nenhuma disciplina encontrada.</td></tr>
                <?php } ?>
            </tbody>
        </table>

    <?php } else { ?>
        <p>Nenhuma tabela selecionada ou tabela inválida.</p>
    <?php } ?>

    </div>

    <?php 
    $registro_edicao = null;
    if (isset($aluno_edicao)) {
        $registro_edicao = $aluno_edicao;
        $url_update = "alunos/alterar";
        $id_field = 'matricula';
    } elseif (isset($curso_edicao)) {
        $registro_edicao = $curso_edicao;
        $url_update = "cursos/alterar";
        $id_field = 'codcurso';
    } elseif (isset($disciplina_edicao)) {
        $registro_edicao = $disciplina_edicao;
        $url_update = "disciplinas/alterar";
        $id_field = 'CodDisciplina';
    }

    if ($registro_edicao) {
        ?>
        <div id="modal">
            <div>
                <h3>Alterar Registro de <?php echo htmlspecialchars($table); ?></h3>
                <form action="index.php?url=<?php echo $url_update; ?>" method="POST">
                    
                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($registro_edicao[$id_field] ?? ''); ?>">

                    <?php if ($table === 'Alunos') { ?>
                        <label for="nome">Nome:</label>
                        <input type="text" id="nome" name="nome" value="<?php echo htmlspecialchars($registro_edicao['nome'] ?? ''); ?>" required>
                        <label for="endereco">Endereço:</label>
                        <input type="text" id="endereco" name="endereco" value="<?php echo htmlspecialchars($registro_edicao['endereco'] ?? ''); ?>" required>
                        <label for="cidade">Cidade:</label>
                        <input type="text" id="cidade" name="cidade" value="<?php echo htmlspecialchars($registro_edicao['cidade'] ?? ''); ?>" required>
                        <label for="codcurso">Cod. Curso:</label>
                        <input type="text" id="codcurso" name="codcurso" value="<?php echo htmlspecialchars($registro_edicao['codcurso'] ?? ''); ?>" required>
                    
                    <?php } elseif ($table === 'Cursos') { ?>
                        <label for="nome">Nome do Curso:</label>
                        <input type="text" id="nome" name="nome" value="<?php echo htmlspecialchars($registro_edicao['nome'] ?? ''); ?>" required>
                        <label for="coddisc1">Cod. Disc. 1:</label>
                        <input type="text" id="coddisc1" name="coddisc1" value="<?php echo htmlspecialchars($registro_edicao['coddisc1'] ?? ''); ?>" required>
                        <label for="coddisc2">Cod. Disc. 2:</label>
                        <input type="text" id="coddisc2" name="coddisc2" value="<?php echo htmlspecialchars($registro_edicao['coddisc2'] ?? ''); ?>">
                        <label for="coddisc3">Cod. Disc. 3:</label>
                        <input type="text" id="coddisc3" name="coddisc3" value="<?php echo htmlspecialchars($registro_edicao['coddisc3'] ?? ''); ?>">

                    <?php } elseif ($table === 'Disciplinas') { ?>
                        <label for="nome">Nome da Disciplina:</label>
                        <input type="text" id="nome" name="nome" value="<?php echo htmlspecialchars($registro_edicao['NomeDisciplina'] ?? ''); ?>" required>
                    <?php } ?>

                    <button type="submit" name="Confirmar">Confirmar Alteração</button>
                    <a href="index.php?url=<?php echo strtolower($table); ?>" class="button">Cancelar</a>
                </form>
            </div>
        </div>
    <?php } ?>

    <button id="close-btn">Voltar ao Menu</button>

</section>

<script src="./JS/scriptphp.js"></script> 

</body>
</html>