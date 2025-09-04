<?php

include_once 'conexão.php';

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
}

?>