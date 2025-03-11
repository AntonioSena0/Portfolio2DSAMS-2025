<html>
<head>
    <title>Soma Dos Impares</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="body2">
    <?php

        function Somar($vlrInicial, $vlrFinal){
            $soma = 0;
            for($i = $vlrInicial; $i <= $vlrFinal; $i++){
                if($i % 2 != 0){
                    $soma += $i;
                }
            }
            return $soma;
        }

        $valInicial = $_POST['vlrInicial'];
        $valFinal = $_POST['vlrFinal'];
        $resultado = Somar($valInicial, $valFinal);
        echo "<strong>" . "A soma dos números ímpares entre " . $valInicial . " e " . $valFinal . " é " . $resultado . "</strong>";

    ?>
</body>
</html>