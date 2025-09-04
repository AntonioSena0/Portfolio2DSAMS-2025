<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Menu</title>
    <link rel="stylesheet" href="./AdicionaisPHP/stylephp.css">
</head>
<body>

<section id="php-real" class="conteudo">
    <h1>Lista de Produtos</h1>
    <?php 
        include_once 'produto.php';
        $l = new produto();
        
        $pro_bd = $l->listar();
    ?>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Estoque</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pro_bd as $pro_mostrar) { ?>
                <tr>
                    <td><?php echo $pro_mostrar[0]; ?></td>
                    <td><?php echo $pro_mostrar[1]; ?></td>
                    <td><?php echo $pro_mostrar[2]; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <button id="close-btn" class="voltar">Fechar</button>
</section>

<script src="./AdicionaisPHP/scriptphp.js"></script>

</body>
</html>