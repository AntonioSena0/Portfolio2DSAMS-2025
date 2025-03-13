<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Números Ímpares</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="body1">
    <header>

        <h1>Números Ímpares no Intervalo</h1>

    </header>

    <section>

        <form class="form1"  method="post">

        <strong>

        Número 1:

        </strong>    
        <br>
        <input type="text" name="num1" class="num">
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

    <section>

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
            
            for($i = $num1; $i >= $num2; $i--){
                if($i % 2 != 0){
                    echo "Os números impares entre " . $num1 . " e " . $num2 . " é: " . "<br>";
                    echo "<strong>" . " --> " . $i . "</strong>";
                }
                else{
                    echo "<strong>" . "Você digitou dois números pares iguais" . "</strong>";
                }
            }
        }
    }

    if(isset($_POST['num1']) && isset($_POST['num2'])){
        $n1 = $_POST['num1'];
        $n2 = $_POST['num2'];

        if($n1 != "" && $n2 != ""){
            VerificarExibir($n1, $n2);
        }
        else{
            echo "Falta de informações";
        }
    }
    else{
        echo "Preencha os campos";
    }

    ?>

    </section>

    <footer>

        <h4>Atividade Realizada Por: Antonio B. de Sena Neto</h4>

    </footer>

</body>
</html>