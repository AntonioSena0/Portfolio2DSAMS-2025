<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Troca de Valores</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="body1">
    <header>

        <h1>Troca de Valores</h1>

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
        <input type="submit" value="Confirmar" id="confirmar">        

        </form>

    </section>

    <section>

    <?php

    function TrocarValores($num1, $num2) {
        $troca = $num1;
        $num1 = $num2;
        $num2 = $troca;
        echo "<strong>" . "Após a troca o número 1 é: " . $num1 . "<br>" . "Após a troca o número 2 é: " . $num2 . "</strong>";
    }

    if(isset($_POST['num1']) && isset($_POST['num2'])){
    $n1 = $_POST['num1'];
    $n2 = $_POST['num2'];
    TrocarValores($n1, $n2);
    }
    else{
        echo "Insira os valores para realizar a troca";
    }
?>

    </section>

    <footer>

        <h4>Atividade Realizada Por: Antonio B. de Sena Neto</h4>

    </footer>

</body>
</html>