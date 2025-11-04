<?php

include_once __DIR__ . '/../config/conexão.php';

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
    function consultar() {
        try {
            $this->conn = new conexão();
            $sql = $this->conn->prepare("SELECT * FROM alunos WHERE nome LIKE ? ORDER BY matricula");
            $busca = $this->getNome() . "%";
            @$sql->bindParam(1, $busca, PDO::PARAM_STR);
            $sql->execute();
            return $sql->fetchAll();
        } catch (PDOException $exc) {
            echo "Erro ao consultar alunos. " . $exc->getMessage();
        }
    }

    function excluir() {
        try {
            $this->conn = new conexão();
            $sql = $this->conn->prepare("DELETE FROM alunos WHERE matricula = ?");
            @$sql->bindParam(1, $this->getMatricula(), PDO::PARAM_INT);
            if ($sql->execute()) {
                return "Aluno excluído com sucesso!";
            } else {
                return "Erro ao excluir aluno!";
            }
        } catch (PDOException $exc) {
            echo "Erro ao excluir aluno. " . $exc->getMessage();
        }
    }

    function alterar(){
        try {
            $this->conn = new conexão();
            $sql = $this->conn->prepare("UPDATE alunos SET nome = ?, endereco = ?, cidade = ?, codcurso = ? WHERE matricula = ?");
            @$sql->bindParam(1, $this->nome, PDO::PARAM_STR);
            @$sql->bindParam(2, $this->endereco, PDO::PARAM_STR);
            @$sql->bindParam(3, $this->cidade, PDO::PARAM_STR);
            @$sql->bindParam(4, $this->codcurso, PDO::PARAM_INT);
            @$sql->bindParam(5, $this->matricula, PDO::PARAM_INT);

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
            $sql = $this->conn->prepare("SELECT * FROM alunos WHERE matricula = ?");
            @$sql->bindParam(1, $id, PDO::PARAM_INT);
            $sql->execute();

            $resultado = $sql->fetch(PDO::FETCH_ASSOC);
            $this->conn = null;
            
            return $resultado;
        }
        catch(PDOException $exc){
            echo "Erro ao consultar. " . $exc->getMessage();
            return false;
        }
    }
}
?>