<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Soma Dos Impares</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="body1">
    <header>

        <h1>Soma dos Ímpares no Intervalo</h1>

    </header>

    <section>

        <form class="form1"  method="post">

        <strong>

        Valor Inicial:

        </strong>    
        <br>
        <input type="text" name="vlrInicial" class="num">
        <br>
        <strong>

        Valor Final:

        </strong> 
        <br>
        <input type="text" name="vlrFinal" class="num">      
        <br>

        <input type="submit" value="Confirmar" id="confirmar">        

        </form>

    </section>

    <section>

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

        if(isset($_POST['vlrInicial']) && isset($_POST['vlrFinal'])){
            $valInicial = $_POST['vlrInicial'];
            $valFinal = $_POST['vlrFinal'];
            $resultado = Somar($valInicial, $valFinal);
            echo "A soma dos números ímpares entre " . $valInicial . " e " . $valFinal . " é " . "<strong>" . $resultado . "</strong>";
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