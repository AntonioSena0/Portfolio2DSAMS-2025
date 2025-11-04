<?php

include_once __DIR__ . '/../models/cursos.php'; 

class CursoController {
    
    public function index() {
        
        $l = new cursos();
        
        $pesquisa = $_GET['pesquisa'] ?? '';
        $curso_edicao = null;
        $table = "Cursos";
        $pro_bd = [];

        if (!empty($pesquisa)) {
            $l->setNome($pesquisa);
            $pro_bd = $l->consultar() ?? []; 
        } else {
            $pro_bd = $l->listar() ?? [];
        }
        
        if (isset($_GET['alterar'])) {
            $curso_edicao = $l->consultarPorId($_GET['alterar']);
        }
        
        include __DIR__ . '/../views/TabelaGeral.php';
    }

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btnenviar'])) {
            
            try {
                $curso = new cursos(); 
                $curso->setCodCurso(trim($_POST['codcurso_curso']));
                $curso->setNome(trim($_POST['nome_curso']));
                $curso->setCodDisc1(trim($_POST['coddisc1']));
                $curso->setCodDisc2(trim($_POST['coddisc2']));
                $curso->setCodDisc3(trim($_POST['coddisc3']));

                $resultado = $curso->salvar();

                header("Location: index.php?url=cursos");
                exit;
            } catch (Exception $e) {
                $erro_msg = "Erro ao inserir: " . $e->getMessage();
                header("Location: index.php?url=cursos&msg=" . urlencode($erro_msg)); 
                exit;
            }
        }
        
        include __DIR__ . '/../views/cursos/FormularioInserir.php';
    }

    public function delete() {
        if (!isset($_GET['id'])) {
            header("Location: index.php?url=cursos");
            exit;
        }
        
        $l = new cursos();
        $l->setCodCurso($_GET['id']); 
        $resultado = $l->excluir();
        
        header("Location: index.php?url=cursos&msg=" . urlencode($resultado));
        exit;
    }

    public function update() {
        if (isset($_POST['Confirmar'])) {
            
            $curso = new cursos();
            
            $curso->setCodCurso(trim($_POST['id']));
            $curso->setNome(trim($_POST['nome']));
            $curso->setCodDisc1(trim($_POST['coddisc1']));
            $curso->setCodDisc2(trim($_POST['coddisc2']));
            $curso->setCodDisc3(trim($_POST['coddisc3']));
            
            $resultado = $curso->alterar();
            
            header("Location: index.php?url=cursos&msg=" . urlencode($resultado));
            exit;
        }
        header("Location: index.php?url=cursos");
        exit;
    }

}