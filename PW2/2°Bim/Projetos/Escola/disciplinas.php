<?php 

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