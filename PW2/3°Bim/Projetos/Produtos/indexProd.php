<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Menu</title>
    <link rel="stylesheet" href="./AdicionaisPHP/stylephp.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

<section id="php-real" class="conteudo">
    <h1>Lista de Produtos</h1>

    <form method="GET" class="search-bar">
        <input type="text" name="pesquisa" placeholder="Buscar produto..." 
               value="<?php echo isset($_GET['pesquisa']) ? $_GET['pesquisa'] : ''; ?>">
        <button type="submit">Pesquisar</button>
    </form>

    <?php 
        include_once 'produto.php';
        $l = new produto();

        if (isset($_GET['pesquisa']) && $_GET['pesquisa'] != "") {
            $l->setNome($_GET['pesquisa']);
            $pro_bd = $l->consultar();
        } else {
            $pro_bd = $l->listar();
        }

        if (isset($_GET['excluir'])) {
            $l->setId($_GET['excluir']);
            $l->excluir();
            header("Location: ".$_SERVER['PHP_SELF']);
            exit;
        }
    ?>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Estoque</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pro_bd as $pro_mostrar) { ?>
                <tr>
                    <td><?php echo $pro_mostrar[0]; ?></td>
                    <td><?php echo $pro_mostrar[1]; ?></td>
                    <td><?php echo $pro_mostrar[2]; ?></td>
                    <td>
                        <a href="?excluir=<?php echo $pro_mostrar[0]; ?>" 
                           onclick="return confirm('Tem certeza que deseja excluir este produto?')">
                           <i class="fa fa-trash delete-icon"></i>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <button id="close-btn" class="voltar">Fechar</button>
</section>

<script src="./AdicionaisPHP/scriptphp.js"></script>

</body>
</html>