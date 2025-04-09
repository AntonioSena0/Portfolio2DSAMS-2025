<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Salário Líquido</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="body1">
    <header>

        <h1>Salário Líquido</h1>

    </header>

    <section class="section1">

        <form class="form1"  method="post">

        <strong>

        Salário Bruto:

        </strong>    
        <br>
        <input type="text" name="salariob" class="num" required>
        <br>

        <input type="submit" value="Confirmar" id="confirmar">        

        </form>

    </section>

    <section class="section2">

    <?php

        function SalárioLíquido($salariob) {
            $gratificação = $salariob * 10/100;
            $somagrat = $salariob + $gratificação;
            $imposto = $somagrat * 20/100;
            $subtraçãoimposto = $somagrat - $imposto;
            echo "<strong>" . "Salário Bruto: " . $salariob . "<br>" . "Gratificação: " . $somagrat . "<br>" . "Salário Líquido: " . $subtraçãoimposto . "</strong>";
        }

        if(isset($_POST['salariob'])){
        $slriob = $_POST['salariob'];
        SalárioLíquido($slriob);
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