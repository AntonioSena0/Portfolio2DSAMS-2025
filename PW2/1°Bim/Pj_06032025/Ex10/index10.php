<html>
<head>
    <title>Par ou Impar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="body2">
    <?php

        function Verificar($num){
            if($num % 2 == 0){
                return true;
            }
            else{
                return false;
            }
        }

        $n = $_POST['num'];
        $vrfcr = Verificar($n);

        if($vrfcr == true){
            echo "<strong>" . "O número " . $n . " é par" . "</strong>";
        }
        else{
            echo "<strong>" . "O número " . $n . " é impar" . "</strong>";
        }
    ?>
</body>
</html>