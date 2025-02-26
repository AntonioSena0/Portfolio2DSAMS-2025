<html>
<head>
    <title>Ação - Recebimento dos dados de um formulário</title>
</head>
<body>

<?php 

    $Vnome = $_POST["nome"];
    $Vidade = $_POST["idade"];

    echo "Oi !! " . $Vnome . "." . "<br>" . " Você tem " . $Vidade . " anos !!";

?>

</body>
</html>