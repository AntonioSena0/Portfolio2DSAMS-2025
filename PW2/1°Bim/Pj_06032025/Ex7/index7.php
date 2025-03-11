<html>
<head>
    <title>Média</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="body2">
    <?php

        function calcularmedia($nota1, $nota2, $nota3, $nota4){
            $med = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
            return $med;
        }
        
        function exibir($MA){
            if($MA >= 6){
                echo "Aluno foi aprovado com uma média de: " . "<strong>" . $MA . "" . "</strong>";
            }
            else if($MA >= 3 && $MA < 6){
                echo "Aluno deverá realizar um exame de recuperação pois está com uma média de: " . "<strong>" . $MA . "" . "</strong>";
            }
            else{
                echo "Aluno está retido com uma média de: " . "<strong>" . $MA . "" . "</strong>";
            }
        }

        $n1 = $_POST['nt1'];
        $n2 = $_POST['nt2'];
        $n3 = $_POST['nt3'];
        $n4 = $_POST['nt4'];

        $media = calcularmedia($n1, $n2, $n3, $n4);
        exibir($media)

    ?>
</body>
</html>