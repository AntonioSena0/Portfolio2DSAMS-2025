<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Soma Dos Quadrados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="body1">
    <header>

        <h1>Soma dos Quadrados</h1>

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

    function Calcular($num1, $num2, $num3) {
        $soma = pow($num1, 2) + pow($num2, 2) + pow($num3, 2);
        echo "<strong>" . "A soma dos quadrados dos números é: " . $soma . "</strong>";
    }

    if(isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['num3'])){
    $n1 = $_POST['num1'];
    $n2 = $_POST['num2'];
    $n3 = $_POST['num3'];
    Calcular($n1, $n2, $n3);
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