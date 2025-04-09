<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="body1">
    <header>

        <h1>Calculadora</h1>

    </header>

    <section class="section1">

    <?php

        function Calcular($num1, $num2, $operador){
            switch($operador){
                case $operador == "+":
                    return $num1 + $num2;
                    break;
                case $operador == "-":
                    return $num1 - $num2;
                    break;
                case $operador == "*":
                    return $num1 * $num2;
                    break;
                case $operador == "/":
                    if($num2 != 0){
                        return $num1 / $num2;
                        break;
                    }
                    else{
                        return "<strong>" . "IMPOSSÍVEL DIVIDIR POR ZERO" . "</strong>"; 
                        break;
                    }
                case $operador == "%":
                    return $num2 * $num1/100;
                    break;
                case $operador == "x^y":
                    return pow($num1, $num2);
                    break;
            }
        }

        if(isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operador'])){
            $n1 = $_POST['num1'];
            $n2 = $_POST['num2'];
            $op = $_POST['operador'];

            if($n1 != "" && $n2 != "" && $op != ""){
                $resultado = Calcular($n1, $n2, $op);
                echo "<strong>" . $resultado . "</strong>";
            }
            else{
                echo "Falta de informações";
            }
        }
        else{
            echo "";
        }
    ?>

    <hr>

        <form class="form1"  method="post">

        <strong>

        Número 1:

        </strong>    
        <br>
        <input type="text" name="num1" class="num">
        <br>

        <strong>

        Operador:
    
        </strong>    
        <br>
        <select class="slc1" name="operador">
            <option value="+">+
            <option value="-">-
            <option value="*">*
            <option value="/">/
            <option value="%">%
            <option value="x^y">x^y
        </select>
        <br>

        <strong>

        Número 2:
        
        </strong>    
        <br>
        <input type="text" name="num2" class="num">
        <br>

        <input type="submit" value="Confirmar" id="confirmar">        

        </form>

    </section>

    <footer>

        <h4>Atividade Realizada Por: Antonio B. de Sena Neto</h4>

    </footer>

</body>
</html>