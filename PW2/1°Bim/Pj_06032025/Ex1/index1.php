<html>
<head>
<title>Tabuada</title>
<link rel="stylesheet" href="style.css">
</head>
<body class="body2">
    <?php
    
    $num = $_POST['txtA'];
    $i = 0;
    do{
        $res = $num * $i;
        echo "<strong>" . $num . " X " . $i . " = " . $res . "<br>" . "</strong>";
        $i++;
    }while($i <= 10);
    
    ?>
</body>
</html>