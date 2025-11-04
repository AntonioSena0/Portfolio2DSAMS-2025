<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="./CSS/style.css">
</head>
<body>

    <header>
        <div class="header-container">
            <button id="listar" class="list">Gerenciar</button>
            <button id="inserir" class="list">Inserir</button>
        </div>
    </header>

    <main class="main"> 
        <div class="texto">
            <h1>Escola</h1>
        </div>
        <div class="conteudo">
            
            <section class="php-listar">
                <form action="" onsubmit="return false;"> 
                    <strong>Qual tabela deseja listar?</strong>
                    <br>
                    
                    <select name="Tabela" id="tabela-listar">
                        <option value="alunos">Alunos</option>
                        <option value="cursos">Cursos</option>
                        <option value="disciplinas">Disciplinas</option>
                    </select>
                    <div class="funcoes">
                    <button type="button" id="acessar-tabela">acessar</button>
                    <button class="voltar">Voltar</button>
                    </div>
                </form>
            </section>
            
            <section class="php-inserir">
                <form action="index.php?url=alunos/inserir" method="post" class="form-container">
                <select name="Tabela" id="tabelaInserir">
                    <option value="Alunos">Alunos</option>
                    <option value="Cursos">Cursos</option>
                    <option value="Disciplinas">Disciplinas</option>
                </select>

                <input type="hidden" name="url" id="inserir-url-input" value="alunos/inserir">

            <div class="input-area">
                <div class="grupo-inputs grupo-alunos">
                    <input type="text" name="matricula" placeholder="Matrícula">
                    <input type="text" name="nome" placeholder="Nome">
                    <input type="text" name="endereco" placeholder="Endereço">
                    <input type="text" name="cidade" placeholder="Cidade">
                    <input type="text" name="codcurso" placeholder="Código do Curso">
                </div>

                <div class="grupo-inputs grupo-cursos">
                    <input type="text" name="codcurso_curso" placeholder="Código do Curso">
                    <input type="text" name="nome_curso" placeholder="Nome">
                    <input type="text" name="coddisc1" placeholder="Código Disciplina 1">
                    <input type="text" name="coddisc2" placeholder="Código Disciplina 2">
                    <input type="text" name="coddisc3" placeholder="Código Disciplina 3">
                </div>

                <div class="grupo-inputs grupo-disciplinas">
                    <input type="text" name="coddisciplina" placeholder="Código da Disciplina">
                    <input type="text" name="nome_disciplina" placeholder="Nome da Disciplina">
                </div>
            </div>
            <br>
                <div class="funcoes">
                    <input name="btnenviar" type="submit" value="Inserir">
                    <button class="voltar">Voltar</button>
                </div>
            </form>

            </section>

            </div>
    </main>
    
    <footer>
        <div class="footer-container">
            <h4>Atividade Realizada Por: Antonio B. de Sena Neto</h4>
        </div>
    </footer>

    <script src="./JS/script.js"></script>

</body>
</html>