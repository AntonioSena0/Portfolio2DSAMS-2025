<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Lista de Produtos</title>
    <link rel="stylesheet" href="./CSS/stylephp.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

<section id="php-real" class="conteudo">
    <h1>Lista de Produtos</h1>

    <form method="GET" action="index.php">
        <div class="search-bar">
            <input type="hidden" name="url" value="produtos"> <input type="text" name="pesquisa" placeholder="Buscar produto..." 
                value="<?php echo htmlspecialchars($pesquisa ?? ''); ?>">
        <button type="submit">Pesquisar</button>
        </div>
    </form>
    
    <?php if (isset($_GET['msg'])): ?>
        <p style="color: green; font-weight: bold;"><?php echo htmlspecialchars($_GET['msg']); ?></p>
    <?php endif; ?>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Estoque</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            if (isset($pro_bd)) {
                foreach ($pro_bd as $pro_mostrar) { 
            ?>
                <tr>
                    <td><?php echo htmlspecialchars($pro_mostrar[0]); ?></td>
                    <td><?php echo htmlspecialchars($pro_mostrar[1]); ?></td>
                    <td><?php echo htmlspecialchars($pro_mostrar[2]); ?></td>
                    <td>
                        <a href="index.php?url=produtos/deletar&id=<?php echo $pro_mostrar[0]; ?>" 
                            onclick="return confirm('Tem certeza que deseja excluir este produto?')">
                           <i class="fa fa-trash delete-icon"></i>
                        </a>
                        <a href="index.php?url=produtos&alterar=<?php echo $pro_mostrar[0]; ?>#modal">
                           <i class="fa-solid fa-pen-to-square update-icon"></i>
                        </a>
                    </td>
                </tr>
            <?php 
                }
            } 
            ?>
        </tbody>
    </table>

    <?php 
    if (isset($produto_edicao)) { 
    ?>
    <div id="modal" style="display: block;">
        <h3>Alterar Produto</h3>
        <form id="formAlterar" method="POST" action="index.php?url=produtos/alterar"> 
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($produto_edicao['id']); ?>">
            <input type="text" value="<?php echo htmlspecialchars($produto_edicao['id']); ?>" disabled> <label>Nome:</label>
            <input type="text" name="nomenovo" value="<?php echo htmlspecialchars($produto_edicao['nome']); ?>" required><br><br>

            <label>Estoque:</label>
            <input type="text" name="estoquenovo" value="<?php echo htmlspecialchars($produto_edicao['estoque']); ?>" required><br><br>

            <button type="submit" name="Confirmar">Confirmar Alteração</button>
            <a href="index.php?url=produtos" class="button">Cancelar</a>
        </form>
    </div>
    <?php } ?>

    <button id="close-btn" class="voltar">Fechar</button>
</section>

<script src="./JS/scriptphp.js"></script>

</body>
</html>