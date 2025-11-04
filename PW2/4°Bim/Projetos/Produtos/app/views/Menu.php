<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="./CSS/style.css">
</head>

<body>

    <header>
        <div class="header-container">
            <button id="listar" class="list">Itens</button>
            <button id="inserir" class="list">Inserir</button>
        </div>
    </header>

    <main class="main">
        <div class="texto">
            <h1>Produtos</h1>
        </div>
        <div class="conteudo">
            <section class="php-listar">
                <form action="../../public/index.php/produtos" method="get">
                    <div class="funcoes">
                        <h1>Gerenciar Itens:</h1>
                        <br>
                        <a href="index.php?url=produtos">
                            <input type="button" value="acessar"> 
                        </a>
                        <button class="voltar">Voltar</button>
                    </div>
                </form>
            </section>
            <section class="php-inserir">
                <form method="post" action="index.php?url=produtos/inserir">
                    <h1>Inserir:</h1>
                    <br>
                    <input type="text" name="txtnome" placeholder="Nome" required>
                    <br><br>
                    <input type="text" name="txtestoque" placeholder="Estoque" required>
                    <div class="funcoes">
                        <input name="btnenviar" type="submit" value="Inserir"> &nbsp;&nbsp;
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

    <script src="./JS/script.js"></script>

</body>

</html>