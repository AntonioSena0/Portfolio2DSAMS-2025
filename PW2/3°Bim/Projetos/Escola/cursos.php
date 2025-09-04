<?php

class cursos{
    private $codcurso;
    private $nome;
    private $coddisc1;
    private $coddisc2;
    private $coddisc3;
    private $conn;

    public function getCodCurso() {
        return $this->codcurso;
    }

    public function setCodCurso($codcurso) {
        $this->codcurso = $codcurso;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getCodDisc1() {
        return $this->coddisc1;
    }

    public function setCodDisc1($coddisc1) {
        $this->coddisc1 = $coddisc1;
    }

    public function getCodDisc2() {
        return $this->coddisc2;
    }

    public function setCodDisc2($coddisc2) {
        $this->coddisc2 = $coddisc2;
    }

    public function getCodDisc3() {
        return $this->coddisc3;
    }

    public function setCodDisc3($coddisc3) {
        $this->coddisc3 = $coddisc3;
    }
    
    function listar(){
        try{
            $this-> conn = new conexão();
            $sql = $this->conn->query("select * from cursos order by codcurso");
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
            $sql = $this->conn->prepare("INSERT INTO cursos (codcurso, nome, coddisc1, coddisc2, coddisc3) VALUES (?, ?, ?, ?, ?)");
            @$sql->bindParam(1, $this->codcurso, PDO::PARAM_INT);
            @$sql->bindParam(2, $this->nome, PDO::PARAM_STR);
            @$sql->bindParam(3, $this->coddisc1, PDO::PARAM_INT);
            @$sql->bindParam(4, $this->coddisc2, PDO::PARAM_INT);
            @$sql->bindParam(5, $this->coddisc3, PDO::PARAM_INT);
            
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
            $sql = $this->conn->prepare("SELECT * FROM cursos WHERE nome LIKE ? ORDER BY codcurso");
            $busca = "%" . $this->nome . "%";
            $sql->bindParam(1, $busca, PDO::PARAM_STR);
            $sql->execute();
            return $sql->fetchAll();
        } catch (PDOException $exc) {
            echo "Erro ao consultar cursos. " . $exc->getMessage();
        }
    }

    function excluir() {
        try {
            $this->conn = new conexão();
            $sql = $this->conn->prepare("DELETE FROM cursos WHERE codcurso = ?");
            $sql->bindParam(1, $this->codcurso, PDO::PARAM_INT);
            if ($sql->execute()) {
                return "Curso excluído com sucesso!";
            } else {
                return "Erro ao excluir curso!";
            }
        } catch (PDOException $exc) {
            echo "Erro ao excluir curso. " . $exc->getMessage();
        }
    }

}

?>