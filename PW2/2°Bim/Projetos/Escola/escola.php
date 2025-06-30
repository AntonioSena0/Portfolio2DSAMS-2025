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
            $sql = $this->conn->query("select * from cursos order by nome");
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;
        }
        catch(PDOException $exc){
            echo "Erro ao executar consulta. " . $exc->getMessage();
        }
    }
}

class disciplinas{
    private $CodDisciplina;
    private $NomeDisciplina;
    private $conn;
    
    public function getCodDisciplina() {
        return $this->codDisciplina;
    }

    public function setCodDisciplina($codDisciplina) {
        $this->codDisciplina = $codDisciplina;
    }

    public function getNomeDisciplina() {
        return $this->nomeDisciplina;
    }

    public function setNomeDisciplina($nomeDisciplina) {
        $this->nomeDisciplina = $nomeDisciplina;
    }
    
    function listar(){
        try{
            $this-> conn = new conexão();
            $sql = $this->conn->query("select * from disciplinas order by NomeDisciplina");
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