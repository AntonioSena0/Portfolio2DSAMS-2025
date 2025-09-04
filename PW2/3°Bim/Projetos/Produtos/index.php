<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="./AdicionaisHTML/style.css">
</head>

<body>

    <header>
        <div class="header-container">
            <button id="listar" class="list">Itens</button>
            <button id="inserir" class="list">Inserir</button>
            <button id="alterar" class="list">Alterar</button>
        </div>
    </header>

    <main class="main">
        <div class="texto">
            <h1>Produtos</h1>
        </div>
        <div class="conteudo">
            <section class="php-listar">
                <form action="indexProd.php">
                    <div class="funcoes">
                        <input type="submit" value="acessar">
                        <button class="voltar">Voltar</button>
                    </div>
                </form>
            </section>
            <section class="php-inserir">
                <form method="post">
                    <input type="text" name="txtnome" placeholder="Nome" required>
                    <br><br>
                    <input type="text" name="txtestoque" placeholder="Estoque" required>
                    <div class="funcoes">
                        <input name="btnenviar" type="submit" value="Inserir"> &nbsp;&nbsp;
                        <button class="voltar">Voltar</button>
                    </div>
                </form>
                <?php
                    extract($_POST, EXTR_OVERWRITE);
                    if (isset($btnenviar)) {
                        include_once 'produto.php';
                        $pro = new produto();
                        $pro->setNome(trim($_POST['txtnome']));
                        $pro->setEstoque(trim($_POST['txtestoque']));
                        echo "<h3>" . $pro->salvar() . "</h3>";
                        $pro->listar();
                    }
                ?>

            </section>
            <section class="php-alterar">
                <form action="indexProd.php" method="post">
                    <input type="text" name="nome" placeholder="Nome">
                    <br>
                    <input type="text" name="estoque" placeholder="Estoque">
                    <br><br>
                    <input type="text" name="novo_nome" placeholder="Novo Nome">
                    <br>
                    <input type="text" name="novo_estoque" placeholder="Novo Estoque">
                    <div class="funcoes">
                        <input type="submit" value="Alterar">
                        <button class="voltar">Voltar</button>
                    </div>
                </form>
            </section>
        </div>
    </main>

    <footer>
        <div class="footer-container">
            <h4>Atividade Realizada Por: Antonio B. de Sena Neto</h4>
        </div>
    </footer>

    <script src="./AdicionaisHTML/script.js"></script>

</body>

</html>