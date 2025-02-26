<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Alunos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>

        <form class="form1" name="form1" method="POST">

            <fieldset style="width: 40%;">

                <legend>Dados Pessoais</legend>
                Nome: <input type="text" name="txtnome" size="50">
                <br>
                Telefone: <input type="text" name="txttelefone" size="20" maxlength="14">
                <br>
                RG: <input type="text" name="txtRG" size="14" maxlength="15">
                <br>

            </fieldset>
    
                <fieldset style="width: 40%;">

                <legend>Opções</legend>
                <input type="submit" value="confirmar">
                <input type="reset" value="Limpar">

            </fieldset>    

            <fieldset style="width: 40%;">

                <legend>Dados Escolares</legend>
                Curso: 
                <select class="slc1" name="cbocursos">
                    <option value="Informática">Informática
                    <option value="Administração">Administração
                    <option value="Enfermagem">Enfermagem
                    <option value="Alimentos">Alimentos
                </select>
                <br>
                Módulo: <input type="text" name="txtmodulo" size="10"><br>

        </fieldset>
        <br>
        <fieldset class="field2">

        <?php 
        if(isset($_POST['txtnome']) && isset($_POST['txttelefone']) && isset($_POST['cbocursos']) && isset($_POST['txtRG']) && isset($_POST['txtmodulo'])){
	        echo '<strong>' . "Informações digitadas: " .'</strong>' . '<br>' . '<br>';
	        echo "Nome digitado...: " . $_POST['txtnome'] . '<br>';
	        echo "Telefone...: " . $_POST['txttelefone'] . '<br>';
	        echo "Curso...: " . $_POST['cbocursos'] . '<br>';
	        echo "RG...: " . $_POST['txtRG'] . '<br>';
	        echo "Módulo...:" . $_POST['txtmodulo'] . '<br>';
        } else {
            echo "preencha os campos";
        }
        ?>

        </fieldset>

    </form>

    </section>

    <footer>
        <h4>Atividade Realizada por: Antonio Bernardino de Sena Neto</h4>
    </footer>

    </body>
</body>
</html>