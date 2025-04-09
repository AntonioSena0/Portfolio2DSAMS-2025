<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Maior ao Menor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="body1">
    <header>

        <h1>Maior ao Menor</h1>

    </header>

    <section>

        <form class="form1"  method="post">

        <strong>

        Número 1:

        </strong>    
        <br>
        <input type="text" name="num1" class="num" required>
        <br>
        <strong>

        Número 2:

        </strong> 
        <br>
        <input type="text" name="num2" class="num" required>      
        <br>
        <strong>   
        
        Número 3:

        </strong> 
        <br>
        <input type="text" name="num3" class="num" required>      
        <br>

        <input type="submit" value="Confirmar" id="confirmar">        

        </form>

    </section>

    <section>

    <?php

        function Verificar($num1, $num2, $num3) {
            if($num1 > $num2 && $num1 > $num3 && $num2 > $num3) {
                echo "<strong>" . "Num1: " . $num1 . " <br> " . " Num2: " . $num2 . " <br> " . " Num3: " . $num3 . "</strong>";
            }
            else if($num1 > $num2 && $num1 > $num3 && $num3 > $num2) {
                echo "<strong>" . "Num1: " . $num1 . " <br> " . " Num3: " . $num3 . " <br> " . " Num2: " . $num2 . "</strong>";
            }
            else if($num2 > $num1 && $num2 > $num3 && $num1 > $num3) {
                echo "<strong>" . "Num2: " . $num2 . " <br> " . " Num1: " . $num1 . " <br> " . " Num3: " . $num3 . "</strong>";
            }
            else if($num2 > $num1 && $num2 > $num3 && $num3 > $num1) {
                echo "<strong>" . "Num2: " . $num2 . " <br> " . " Num3: " . $num3 . " <br> " . " Num1: " . $num1 . "</strong>";
            }
            else if($num3 > $num1 && $num3 > $num2 && $num1 > $num2) {
                echo "<strong>" . "Num3: " . $num3 . " <br> " . " Num1: " . $num1 . " <br> " . " Num2: " . $num2 . "</strong>";
            }
            else if($num3 > $num1 && $num3 > $num2 && $num2 > $num1) {
                echo "<strong>" . "Num3: " . $num3 . " <br> " . " Num2: " . $num2 . " <br> " . " Num1: " . $num1 . "</strong>";
            }
        }

        if(isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['num3'])){
            $n1 = $_POST['num1'];
            $n2 = $_POST['num2'];
            $n3 = $_POST['num3'];

            Verificar($n1, $n2, $n3);
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