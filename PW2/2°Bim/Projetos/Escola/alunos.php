<?php

include_once 'conexão.php';

class alunos{
    private $matricula;
    private $nome;
    private $endereco;
    private $cidade;
    private $codcurso;
    private $conn;

    public function getMatricula() {
        return $this->matricula;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    public function getCodCurso() {
        return $this->codcurso;
    }

    function listar(){
        try{
            $this-> conn = new conexão();
            $sql = $this->conn->query("select * from alunos order by matricula");
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;
        }
        catch(PDOException $exc){
            echo "Erro ao executar consulta. " . $exc->getMessage();
        }
    }
}
?>