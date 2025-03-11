<html>
<head>
    <title>Calculadora</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="body2">
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
    ?>
</body>
</html>