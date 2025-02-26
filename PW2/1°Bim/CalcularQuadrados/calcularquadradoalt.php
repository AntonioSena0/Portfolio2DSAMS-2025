<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cálculo de Quadrados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1 class="t1">Cálculo de Quadrados</h1>
    </header>
    <section>
        <form class="form1" method="POST">

            Digite o valor de A <input type="text" name="txta" id="txta">
            <br>
            Digite o valor da B <input type="text" name="txtb" id="txtb">
            <br>
            <input type="submit" value="Calcular" id="conf">
            <br>

        </form>

        <?php
        if (isset($_POST['txta']) && isset($_POST['txtb'])){
	        $A = $_POST['txta'];
	        $B = $_POST['txtb'];
	        $soma = $A + $B;
	        $quadr = pow($soma,2);
	        echo '<strong>' . "A soma dos valores é " . $soma . '</strong>' . '<br>';
	        echo '<strong>' . "O quadrado da soma é " . $quadr . '</strong>' . '<br>';
        }
        else {
            echo '<strong>' . "insira os valores" . '</strong>';
        }
        ?>

    </section>
    <footer>
        <h4>Atividade Realizada por: Antonio Bernardino de Sena Neto</h4>
    </footer>
</body>
</html>