<html>
<head>
<title> Página dadosalunos.php </title>
<style>
	body{
    background-color: crimson;
    font-size: 3rem;
	font-family: Arial;
	text-align: center;
	color: white;
}
</style>
</head>
<body>
<?php 
	echo '<strong>' . "Segue abaixo as informações digitadas na página anterior" . '</strong>' . '<br>' . '<br>';
	echo "Nome digitado...: " . $_POST['txtnome'] . '<br>';
	echo "Telefone...: " . $_POST['txttelefone'] . '<br>';
	echo "Curso...: " . $_POST['cbocursos'] . '<br>';
	echo "RG...: " . $_POST['txtRG'] . '<br>';
	echo "Módulo...:" . $_POST['txtmodulo'] . '<br>';
?>
</body>
</html>