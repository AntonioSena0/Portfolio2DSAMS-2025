<htmL>
<head>
<title>Página calcularquadrado.php</title>
<style>
	body{
    background-color: royalblue;
    font-size: 3rem;
	font-family: Arial;
	text-align: center;
	color: white;
}
</style>
</head>
<body>
<br>
<?php
	$A = $_POST['txta'];
	$B = $_POST['txtb'];
	$soma = $A + $B;
	$quadr = pow($soma,2);
	echo '<strong>' . "A soma dos valores é " . $soma . '</strong>' . '<br>';
	echo '<strong>' . "O quadrado da soma é " . $quadr . '</strong>';
 ?>
 </body>
 </html>