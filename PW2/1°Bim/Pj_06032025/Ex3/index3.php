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
        
        function exibir($media){
            if($media >= 5){
                echo "Aluno aprovado com uma média de: " . "<strong>" . $media . "" . "</strong>";
            }else{
                echo "Aluno reprovado com uma média de: " . "<strong>" . $media . "" . "</strong>";
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