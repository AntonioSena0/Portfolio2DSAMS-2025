<?php

include_once __DIR__ . '/../config/conexão.php';

class produto{
    private $id;
    private $nome;
    private $estoque;
    private $conn;

    public function getId() {
        return $this->id;
    }

    public function setId($Cod) {
        $this->id = $Cod;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($name) {
        $this->nome = $name;
    }

    public function getEstoque() {
        return $this->estoque;
    }

    public function setEstoque($estoqui) {
        $this->estoque = $estoqui;
    }
    
    function listar(){
        try{
            $this-> conn = new conexão();
            $sql = $this->conn->query("select * from produtos order by nome");
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;
        }
        catch(PDOException $exc){
            echo "Erro ao executar consulta. " . $exc->getMessage();
        }
    }

    public function salvar() {
        try {
            $this->conn = new conexão();
            $sql = $this->conn->prepare("INSERT INTO produtos (nome, estoque) VALUES (?, ?)");
            @$sql->bindParam(1, $this->nome, PDO::PARAM_STR);
            @$sql->bindParam(2, $this->estoque, PDO::PARAM_INT);
            
            if ($sql->execute()) {
                return "Registro salvo com sucesso!";
            }
            else {
                return "Erro ao salvar registro";
            }
        } catch (PDOException $exc) {
            return "Erro ao salvar registro: " . $exc->getMessage();
        }
    }

    public function consultar() {
        try {
            $this->conn = new conexão();
            $sql = $this->conn->prepare("SELECT * FROM produtos WHERE nome LIKE ? ORDER BY nome");
            $busca = $this->getNome() . "%";
            @$sql->bindParam(1, $busca, PDO::PARAM_STR);
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;
        }
        catch(PDOException $exc){
            echo "Erro ao consultar. " . $exc->getMessage();
        }
    }
    public function excluir() {
        try {
            $this->conn = new conexão();
            $sql = $this->conn->prepare("DELETE FROM produtos WHERE id = ?");
            @$sql->bindParam(1, $this->getId(), PDO::PARAM_INT);
            if ($sql->execute()) {
                return "Registro excluído com sucesso!";
            } else {
                return "Erro ao excluir registro!";
            }
        }
        catch(PDOException $exc){
            echo "Erro ao excluir. " . $exc->getMessage();
        }
    }

    function alterar(){
        try {
            $this->conn = new conexão();
            $sql = $this->conn->prepare("update produtos set nome = ?, estoque = ? where id = ?");
            @$sql->bindParam(1, $this->getNome(), PDO::PARAM_STR);
            @$sql->bindParam(2, $this->getEstoque(), PDO::PARAM_STR);
            @$sql->bindParam(3, $this->getId(), PDO::PARAM_STR);

            if($sql->execute() == 1){
                return "Registro alterado com sucesso!";
            } else {
                return "Nenhum registro alterado.";
            }
            $this->conn = null;
        }
        catch(PDOException $exc){
            return "Erro ao alterar: " . $exc->getMessage();
        }
    }

    function consultarPorId($id){
        try {
            $this->conn = new conexão();
            $sql = $this->conn->prepare("select * from produtos where id = ?");
            @$sql->bindParam(1, $id, PDO::PARAM_STR);
            $sql->execute();
            return $sql->fetch(PDO::FETCH_ASSOC);
            $this->conn = null;
        }
        catch(PDOException $exc){
            echo "Erro ao consultar. " . $exc->getMessage();
            return false;
        }
    }

}

?>