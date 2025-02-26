<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Salario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1> Cálculo de Salário </h1>
    </header>

    <section>

    <form class="form1" name="frmsalario" method="POST">

        <strong>Digite a quantidade de hora trabalhadas</strong>
        <input type="text" name="txthora">
        <br>
        <strong>Digite o valor da hora...</strong>
        <input type="text" name="txtvalor">
        <br>
        <input type="submit" value="Salario">
        <br>
        <input type="reset" value="Limpar">
        <br>

        <?php
        if(isset($_POST['txthora']) && isset($_POST['txtvalor'])){
            $valor = $_POST['txtvalor'];
            $horas = $_POST['txthora'];
            $salario = $horas * $valor;
            echo "De acordo com as informações digitadas, o salário é " .  '<strong>' . "R$" . $salario . '</strong>';
        }
        else{
            echo '<strong>' . "Preencha os campos" . '</strong>';
        }
        ?>

    </section>

    <footer>
        <h4>Atividade Realizada por: Antonio Bernardino de Sena Neto</h4>
    </footer>

    </form>
</body>
</html>