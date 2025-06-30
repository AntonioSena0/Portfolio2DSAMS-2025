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

function adicionar() {
    if (isset($_POST['nome']) && isset($_POST['estoque'])) {
        $this->setNome($_POST['nome']);
        $this->setEstoque($_POST['estoque']);

        try {
            $this->conn = new conexão();
            $sql = $this->conn->prepare("INSERT INTO produtos (nome, estoque) VALUES (:nome, :estoque)");
            $nome = $this->getNome();
            $estoque = $this->getEstoque();
            $sql->bindParam(':nome', $nome);
            $sql->bindParam(':estoque', $estoque);
            $sql->execute();
            $this->conn = null;
        } catch (PDOException $exc) {
            echo "Erro ao executar consulta. " . $exc->getMessage();
        }
    }
}
}

?>