<?php

include_once __DIR__ . '/../models/Usuario.php'; 

class UsuarioController {
    
    public function showLogin() {
        include __DIR__ . '/../views/Login.php';
    }

    public function authenticate() {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['txtusu']) || !isset($_POST['txtsenha'])) {
            header("Location: index.php?url=login");
            exit;
        }

        $usuarioModel = new Usuario();
        
        $usuarioModel->setUsu(trim($_POST['txtusu']));
        $usuarioModel->setSenha(trim($_POST['txtsenha']));
        $resultado = $usuarioModel->login();
        
        if (count($resultado) > 0) {
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }
            $_SESSION['usuario_logado'] = $resultado[0]['usuario']; 

            header("Location: index.php?url=main");
            exit;
        } else {
            $erro = "Usuário ou senha inválidos!";
            header("Location: index.php?url=login&erro=" . urlencode($erro));
            exit;
        }
    }

}
?>