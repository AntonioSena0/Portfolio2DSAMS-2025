<?php
include_once __DIR__ . '/../models/Produto.php';

class ProdutoController {
    public function index() {

        $l = new Produto();
        
        $pesquisa = $_GET['pesquisa'] ?? '';
        $produto_edicao = null;

        if (!empty($pesquisa)) {
            $l->setNome($pesquisa);
            $pro_bd = $l->consultar(); 
        } else {
            $pro_bd = $l->listar();
        }
        

        if (isset($_GET['alterar'])) {
            $produto_edicao = $l->consultarPorId($_GET['alterar']);
        }
        
        
        include __DIR__ . '/../views/TabelaGeral.php';
    }

    public function store() {
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btnenviar'])) {
        
        try {
            $produto = new produto(); 
            $produto->setNome(trim($_POST['txtnome']));
            $produto->setEstoque(trim($_POST['txtestoque']));

            $resultado = $produto->salvar();

            header("Location: index.php?url=produtos");
            exit;
        } catch (Exception $e) {
            $erro_msg = "Erro ao inserir: " . $e->getMessage();
            header("Location: index.php?url=main&msg=" . urlencode($erro_msg));
            exit;
        }
        }

        include __DIR__ . '/../views/produtos/TabelaGeral.php';
    }

    public function delete() {
        if (!isset($_GET['id'])) {
            header("Location: index.php?url=produtos");
            exit;
        }
        
        include_once '../models/produto.php';
        $l = new produto();
        $l->setId($_GET['id']);
        $resultado = $l->excluir();
        
        header("Location: index.php?url=produtos&msg=" . urlencode($resultado));
        exit;
    }

    public function update() {
        if (isset($_POST['Confirmar'])) {
            include_once '../models/produto.php';
            $pro = new produto();
            
            $pro->setId(trim($_POST['id']));
            $pro->setNome(trim($_POST['nomenovo']));
            $pro->setEstoque(trim($_POST['estoquenovo']));
            
            $resultado = $pro->alterar();
            
            header("Location: index.php?url=produtos&msg=" . urlencode($resultado));
            exit;
        }
        header("Location: index.php?url=produtos");
        exit;
    }

}
?>
