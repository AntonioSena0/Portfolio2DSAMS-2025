<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Média</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="body1">
    <header>

        <h1>Média</h1>

    </header>

    <section>

        <form class="form1"  method="post">

        <strong>

        Nota 1:

        </strong>    
        <br>
        <input type="number" max="10" min="1" name="nt1" class="num" required>
        <br>
        <strong>

        Nota 2:

        </strong> 
        <br>
        <input type="number" max="10" min="1" name="nt2" class="num" required>      
        <br>
        <strong>

        Nota 3:

        </strong>    
        <br>
        <input type="number" max="10" min="1" name="nt3" class="num" required>
        <br>
        <strong>

        Nota 4:

        </strong> 
        <br>
        <input type="number" max="10" min="1" name="nt4" class="num" required>     
        <br>
        <input type="submit" value="Confirmar" id="confirmar">        

        </form>

    </section>

    <section>

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

        if(isset($_POST['nt1']) && isset($_POST['nt2']) && isset($_POST['nt3']) && isset($_POST['nt4'])){

            $n1 = $_POST['nt1'];
            $n2 = $_POST['nt2'];
            $n3 = $_POST['nt3'];
            $n4 = $_POST['nt4'];

            $media = calcularmedia($n1, $n2, $n3, $n4);
            exibir($media);
        }
        else{
            echo "Insira suas notas";
        }

    ?>

    </section>

    <footer>

        <h4>Atividade Realizada Por: Antonio B. de Sena Neto</h4>

    </footer>

</body>
</html>