<html>
<head>
    <title>Números Ímpares</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="body2">
    <?php

    function VerificarExibir($num1, $num2){

        if($num2 > $num1){
            echo "Os números impares entre " . $num1 . " e " . $num2 . " são: " . "<br>";
            for($i = $num2; $i >= $num1; $i--){
                if($i % 2 != 0){
                    echo "<strong>" . " --> " . $i . "</strong>";
                }
            }
        }
        else if($num1 > $num2){
            echo "Os números impares entre " . $num1 . " e " . $num2 . " são: " . "<br>";
            for($i = $num1; $i >= $num2; $i--){
                if($i % 2 != 0){
                    echo "<strong>" . " --> " . $i . "</strong>";
                }
            }
        }
        else{
            echo "Os números impares entre " . $num1 . " e " . $num2 . " é: " . "<br>";
            for($i = $num1; $i >= $num2; $i--){
                if($i % 2 != 0){
                    echo "<strong>" . " --> " . $i . "</strong>";
                }
                else{
                    echo "<strong>" . "Você digitou dois números pares iguais" . "</strong>";
                }
            }
        }
    }

    $n1 = $_POST['num1'];
    $n2 = $_POST['num2'];

    if($n1 != "" && $n2 != ""){
        VerificarExibir($n1, $n2);
    }
    else{
        echo "Falta de informações";
    }

    ?>
</body>
</html>