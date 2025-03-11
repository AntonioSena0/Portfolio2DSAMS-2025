<html>
<head>
    <title> Página calcularsalario.php </title>
</head>
<style>
    body{
    background-color: green;
    font-size: 3rem;
	font-family: Arial;
	text-align: center;
    color: white;
}
</style>
<body>
    <?php
    $valor = $_POST['txtvalor'];
    $horas = $_POST['txthora'];
    $salario = $horas * $valor;
    echo "De acordo com as informações digitadas na página anterior, o salário é " . '<strong>' . "R$" . $salario . '</strong>';
    ?>
</body>
</html>