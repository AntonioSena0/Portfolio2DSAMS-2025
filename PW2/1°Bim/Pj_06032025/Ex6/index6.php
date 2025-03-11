<html>
<head>
    <title>Salário Líquido</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="body2">
    
    <?php

        function SalárioLíquido($salariob) {
            $gratificação = $salariob * 10/100;
            $somagrat = $salariob + $gratificação;
            $imposto = $somagrat * 20/100;
            $subtraçãoimposto = $somagrat - $imposto;
            echo "<strong>" . "Salário Bruto: " . $salariob . "<br>" . "Gratificação: " . $somagrat . "<br>" . "Salário Líquido: " . $subtraçãoimposto . "</strong";
        }

        $slriob = $_POST['salariob'];
        SalárioLíquido($slriob);

    ?>

</body>
</html>