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

    public function setCodCurso($codcurso) {
        $this->codcurso = $codcurso;
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
    function salvar() {
        try {
            $this->conn = new conexão();
            $sql = $this->conn->prepare("INSERT INTO alunos (matricula, nome, endereco, cidade, codcurso) VALUES (?, ?, ?, ?, ?)");
            @$sql->bindParam(1, $this->matricula, PDO::PARAM_INT);
            @$sql->bindParam(2, $this->nome, PDO::PARAM_STR);
            @$sql->bindParam(3, $this->endereco, PDO::PARAM_STR);
            @$sql->bindParam(4, $this->cidade, PDO::PARAM_STR);
            @$sql->bindParam(5, $this->codcurso, PDO::PARAM_INT);
            
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