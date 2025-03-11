<html>
<head>
<title>Desconto</title>
<link rel="stylesheet" href="style.css">
</head>
<body class="body2">
    
    <?php 

    function desconto($n1, $n2){
        $vlrDesc = $n1 * $n2/100;
        $vlrFinal = $n1 - $vlrDesc;
        echo "<strong>" . "O valor com o desconto é: " . $vlrFinal . "</strong>";
    }

    $Prod = $_POST['VlrPrdt'];  
    $Desc = $_POST['PorcDesc'];
    desconto($Prod, $Desc);

    


    ?>
</body>
</html>