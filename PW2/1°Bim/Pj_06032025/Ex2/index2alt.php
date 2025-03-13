<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Desconto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="body1">
    <header>

        <h1>Desconto</h1>

    </header>

    <section>

        <form class="form1"  method="post">

        <strong>

            Valor do Produto:

        </strong>    
        <br>
        <input type="text" name="VlrPrdt" class="num">
        <br>

        <strong>

            Porcentagem de desconto:

        </strong> 
        <br>
        <input type="text" name="PorcDesc" class="num">
        <br>         

        <input type="submit" value="Confirmar" id="confirmar">


        </form>

    </section>

    <section>

    <?php 

    function desconto($n1, $n2){
        $vlrDesc = $n1 * $n2/100;
        $vlrFinal = $n1 - $vlrDesc;
        echo "<strong>" . "O valor com o desconto é: " . $vlrFinal . "</strong>";
    }
    
    if(isset($_POST['VlrPrdt']) && isset($_POST['PorcDesc'])){
    $Prod = $_POST['VlrPrdt'];  
    $Desc = $_POST['PorcDesc'];
    desconto($Prod, $Desc);
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