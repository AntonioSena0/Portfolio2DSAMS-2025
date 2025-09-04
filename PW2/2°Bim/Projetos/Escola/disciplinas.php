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
            $sql = $this->conn->query("select * from disciplinas order by CodDisciplina");
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
            $sql = $this->conn->prepare("INSERT INTO disciplinas (CodDisciplina, NomeDisciplina) VALUES (?, ?)");
            @$sql->bindParam(1, $this->codDisciplina, PDO::PARAM_INT);
            @$sql->bindParam(2, $this->nomeDisciplina, PDO::PARAM_STR);
            
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