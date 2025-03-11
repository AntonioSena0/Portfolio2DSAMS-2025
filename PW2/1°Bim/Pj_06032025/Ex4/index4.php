<html>
<head>
    <title>Troca De Valores</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="body2">
    
    <?php

        function TrocarValores($num1, $num2) {
            $troca = $num1;
            $num1 = $num2;
            $num2 = $troca;
            echo "<strong>" . "Após a troca o número 1 é: " . $num1 . "<br>" . "Após a troca o número 2 é: " . $num2 . "</strong>";
        }

        $n1 = $_POST['num1'];
        $n2 = $_POST['num2'];
        TrocarValores($n1, $n2);

    ?>

</body>
</html>