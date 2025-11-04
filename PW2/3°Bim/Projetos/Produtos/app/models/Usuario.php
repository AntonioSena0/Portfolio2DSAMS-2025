<?php 

    include_once __DIR__ . '/../config/conexão.php';

    class Usuario{
        private $usu;
        private $senha;
        private $conn;

        public function getUsu(){
            return $this->usu;
        }

        public function setUsu($usu){
            $this->usu = $usu;
        }

        public function getSenha(){
            return $this->senha;
        }

        public function setSenha($senha){
            $this->senha = $senha;
        }

        public function login(){
            try{
                $this->conn = new conexão();
                $sql = $this->conn->prepare("select * from usuario where login = ? and senha = ?");
                @$sql->bindParam(1, $this->getUsu(), PDO::PARAM_STR);
                @$sql->bindParam(2, $this->getSenha(), PDO::PARAM_STR);
                $sql->execute();
                return $sql->fetchAll();
                $this->conn = null;
            }
            catch(PDOException $exc){
                echo "Erro ao consultar. " . $exc->getMessage();
            }
        }
    }

?>