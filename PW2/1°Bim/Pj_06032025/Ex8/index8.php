<html>
<head>
    <title>Maior ao Menor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="body2">
    <?php

        function Verificar($num1, $num2, $num3) {
            if($num1 > $num2 && $num1 > $num3 && $num2 > $num3) {
                echo "<strong>" . "Num1: " . $num1 . " <br> " . " Num2: " . $num2 . " <br> " . " Num3: " . $num3 . "</strong>";
            }
            else if($num1 > $num2 && $num1 > $num3 && $num3 > $num2) {
                echo "<strong>" . "Num1: " . $num1 . " <br> " . " Num3: " . $num3 . " <br> " . " Num2: " . $num2 . "</strong>";
            }
            else if($num2 > $num1 && $num2 > $num3 && $num1 > $num3) {
                echo "<strong>" . "Num2: " . $num2 . " <br> " . " Num1: " . $num1 . " <br> " . " Num3: " . $num3 . "</strong>";
            }
            else if($num2 > $num1 && $num2 > $num3 && $num3 > $num1) {
                echo "<strong>" . "Num2: " . $num2 . " <br> " . " Num3: " . $num3 . " <br> " . " Num1: " . $num1 . "</strong>";
            }
            else if($num3 > $num1 && $num3 > $num2 && $num1 > $num2) {
                echo "<strong>" . "Num3: " . $num3 . " <br> " . " Num1: " . $num1 . " <br> " . " Num2: " . $num2 . "</strong>";
            }
            else if($num3 > $num1 && $num3 > $num2 && $num2 > $num1) {
                echo "<strong>" . "Num3: " . $num3 . " <br> " . " Num2: " . $num2 . " <br> " . " Num1: " . $num1 . "</strong>";
            }
        }

        $n1 = $_POST['num1'];
        $n2 = $_POST['num2'];
        $n3 = $_POST['num3'];

        Verificar($n1, $n2, $n3);

    ?>
</body>
</html>