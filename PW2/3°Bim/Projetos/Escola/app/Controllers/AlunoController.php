<?php

include_once __DIR__ . '/../models/alunos.php'; 

class AlunoController {
    
    public function index() {
        
        $l = new alunos();
        
        $pesquisa = $_GET['pesquisa'] ?? '';
        $aluno_edicao = null;
        $table = "Alunos";
        $pro_bd = [];

        if (!empty($pesquisa)) {
            $l->setNome($pesquisa);
            $pro_bd = $l->consultar() ?? []; 
        } else {
            $pro_bd = $l->listar() ?? [];
        }
        
        if (isset($_GET['alterar'])) {
            $aluno_edicao = $l->consultarPorId($_GET['alterar']);
        }
        
        include __DIR__ . '/../views/TabelasGerais.php';
    }

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btnenviar'])) {
            
            try {
                $aluno = new alunos(); 
                $aluno->setMatricula(trim($_POST['matricula']));
                $aluno->setNome(trim($_POST['nome']));
                $aluno->setEndereco(trim($_POST['endereco']));
                $aluno->setCidade(trim($_POST['cidade']));
                $aluno->setCodCurso(trim($_POST['codcurso']));

                $resultado = $aluno->salvar();

                header("Location: index.php?url=alunos");
                exit;
            } catch (Exception $e) {
                $erro_msg = "Erro ao inserir: " . $e->getMessage();
                header("Location: index.php?url=alunos&msg=" . urlencode($erro_msg)); 
                exit;
            }
        }

        include __DIR__ . '/../views/TabelasGerais.php';
    }

    public function delete() {
        if (!isset($_GET['id'])) {
            header("Location: index.php?url=alunos");
            exit;
        }
        
        $l = new alunos();
        $l->setMatricula($_GET['id']); 
        $resultado = $l->excluir();
        
        header("Location: index.php?url=alunos&msg=" . urlencode($resultado));
        exit;
    }

    public function update() {
        if (isset($_POST['Confirmar'])) {
            
            $aluno = new alunos();
            
            $aluno->setMatricula(trim($_POST['id'])); 
            $aluno->setNome(trim($_POST['nome']));
            $aluno->setEndereco(trim($_POST['endereco']));
            $aluno->setCidade(trim($_POST['cidade']));
            $aluno->setCodCurso(trim($_POST['codcurso']));
            
            $resultado = $aluno->alterar();
            
            header("Location: index.php?url=alunos&msg=" . urlencode($resultado));
            exit;
        }
        header("Location: index.php?url=alunos");
        exit;
    }

}