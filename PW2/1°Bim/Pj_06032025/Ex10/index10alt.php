<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Par ou Impar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="body1">
    <header>

        <h1>Descubra se o número é Par ou Impar</h1>

    </header>

    <section>

        <form class="form1"  method="post">

        <strong>

        Número:

        </strong>    
        <br>
        <input type="text" name="num" class="num" required>
        <br>

        <input type="submit" value="Confirmar" id="confirmar">        

        </form>

    </section>

    <section>

    <?php

        function Verificar($num){
            if($num % 2 == 0){
                return true;
            }
            else{
                return false;
            }
        }

        if(isset($_POST['num'])){
            $n = $_POST['num'];
            $vrfcr = Verificar($n);

            if($vrfcr == true){
                echo "<strong>" . "O número " . $n . " é par" . "</strong>";
            }
            else{
                echo "<strong>" . "O número " . $n . " é impar" . "</strong>";
            }
        }
        else{
            echo "Insira os valores";
        }
    ?>

    </section>

    <footer>

        <h4>Atividade Realizada Por: Antonio B. de Sena Neto</h4>

    </footer>

</body>
</html>