<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Tabuada</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="body1">
    <header>

        <h1>Tabuada</h1>

    </header>

    <section>

        <form class="form1"  method="post"  >

        <strong>

            Digite um número:

        </strong>    
        <br>
        <input type="text" name="txtA" id="num">
        <br>
        <input type="submit" value="Confirmar" id="confirmar">


        </form>

    </section>

    <section>

    <?php
    
    if(isset($_POST['txtA'])){

        $num = $_POST['txtA'];
        $i = 0;
        do{
            $res = $num * $i;
            echo "<strong>" . $num . " X " . $i . " = " . $res . "<br>" . "</strong>";
            $i++;
        }while($i <= 10);

    }
    else{
        echo "Insira um valor";
    }
    ?>

    </section>

    <footer>

        <h4>Atividade Realizada Por: Antonio B. de Sena Neto</h4>

    </footer>

</body>
</html>