<html>
<head>
    <title>TrocaDeValores</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="body2">
    
    <?php

        function Calcular($num1, $num2, $num3) {
            $soma = pow($num1, 2) + pow($num2, 2) + pow($num3, 2);
            echo "<strong>" . "A soma dos quadrados dos números é: " . $soma . "</strong";
        }

        $n1 = $_POST['num1'];
        $n2 = $_POST['num2'];
        $n3 = $_POST['num3'];
        Calcular($n1, $n2, $n3);

    ?>

</body>
</html>