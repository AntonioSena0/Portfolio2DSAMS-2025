<?php

include_once __DIR__ . '/../models/disciplinas.php'; 

class DisciplinaController {
    
    public function index() {
        
        $l = new disciplinas();
        
        $pesquisa = $_GET['pesquisa'] ?? '';
        $disciplina_edicao = null;
        $table = "Disciplinas";
        $pro_bd = [];

        if (!empty($pesquisa)) {
            $l->setNomeDisciplina($pesquisa);
            $pro_bd = $l->consultar() ?? []; 
        } else {
            $pro_bd = $l->listar() ?? [];
        }
        
        if (isset($_GET['alterar'])) {
            $disciplina_edicao = $l->consultarPorId($_GET['alterar']);
        }
        
        include __DIR__ . '/../views/TabelasGerais.php';
    }

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btnenviar'])) {
            
            try {
                $disciplina = new disciplinas(); 
                $disciplina->setCodDisciplina(trim($_POST['coddisciplina']));
                $disciplina->setNomeDisciplina(trim($_POST['nome_disciplina']));

                $resultado = $disciplina->salvar();

                header("Location: index.php?url=disciplinas");
                exit;
            } catch (Exception $e) {
                $erro_msg = "Erro ao inserir: " . $e->getMessage();
                header("Location: index.php?url=disciplinas&msg=" . urlencode($erro_msg)); 
                exit;
            }
        }
        
        include __DIR__ . '/../views/TabelasGerais.php';
    }

    public function delete() {
        if (!isset($_GET['id'])) {
            header("Location: index.php?url=disciplinas");
            exit;
        }
        
        $l = new disciplinas();
        $l->setCodDisciplina($_GET['id']); 
        $resultado = $l->excluir();
        
        header("Location: index.php?url=disciplinas&msg=" . urlencode($resultado));
        exit;
    }

    public function update() {
        if (isset($_POST['Confirmar'])) {
            
            $disciplina = new disciplinas();
            
            $disciplina->setCodDisciplina(trim($_POST['id'])); 
            $disciplina->setNomeDisciplina(trim($_POST['nome']));
            
            $resultado = $disciplina->alterar();
            
            header("Location: index.php?url=disciplinas&msg=" . urlencode($resultado));
            exit;
        }
        header("Location: index.php?url=disciplinas");
        exit;
    }

}