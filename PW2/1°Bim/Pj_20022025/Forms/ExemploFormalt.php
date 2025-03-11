<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulário</title>
</head>
<body>

    <header>
        <h1>Formulário</h1>
    </header>

    <section>

    <form class="form1" method="POST">

        Seu nome <input type="text" name="nome">
        <br>
        Sua idade <input type="text" name="idade">
        <input type="submit" value="Enviar">
    </form>

    <div class="php1">

        <?php
        if (isset($_POST['nome']) && isset($_POST['idade'])){
            
        $Vnome = $_POST["nome"];
        $Vidade = $_POST["idade"];
        
            echo "Oi !! " . $Vnome . "." . "<br>" . " Você tem " . $Vidade . " anos !!";
        }
        else {
            echo "Preencha os campos";
        }
        ?>

    </div>

    </section>

    <footer>
        <h4>Atividade Realizada por: Antonio Bernardino de Sena Neto</h4>
    </footer>

</body>
</html>