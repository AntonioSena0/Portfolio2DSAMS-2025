<?php 

include_once __DIR__ . '/../config/conexão.php';

class disciplinas{
    private $codDisciplina;
    private $nomeDisciplina;
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
            } else {
                return "Erro ao salvar registro";
            }
        } catch (PDOException $exc) {
            return "Erro ao salvar registro: " . $exc->getMessage();
        }
    }
    
    function consultar() {
        try {
            $this->conn = new conexão();
            $sql = $this->conn->prepare("SELECT * FROM disciplinas WHERE NomeDisciplina LIKE ? ORDER BY CodDisciplina");
            $busca = $this->getNomeDisciplina() . "%";
            @$sql->bindParam(1, $busca, PDO::PARAM_STR);
            $sql->execute();
            return $sql->fetchAll();
        } catch (PDOException $exc) {
            echo "Erro ao consultar disciplinas. " . $exc->getMessage();
        }
    }
    
    function excluir() {
        try {
            $this->conn = new conexão();
            $sql = $this->conn->prepare("DELETE FROM disciplinas WHERE CodDisciplina = ?");
            @$sql->bindParam(1, $this->getCodDisciplina(), PDO::PARAM_INT);
            if ($sql->execute()) {
                return "Disciplina excluída com sucesso!";
            } else {
                return "Erro ao excluir disciplina!";
            }
        } catch (PDOException $exc) {
            echo "Erro ao excluir disciplina. " . $exc->getMessage();
        }
    }

    function alterar(){
        try {
            $this->conn = new conexão();
            $sql = $this->conn->prepare("UPDATE disciplinas SET NomeDisciplina = ? WHERE CodDisciplina = ?");
            @$sql->bindParam(1, $this->nomeDisciplina, PDO::PARAM_STR);
            @$sql->bindParam(2, $this->codDisciplina, PDO::PARAM_INT);

            if($sql->execute() == 1){
                return "Disciplina alterada com sucesso!";
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
            $sql = $this->conn->prepare("SELECT * FROM disciplinas WHERE CodDisciplina = ?");
            @$sql->bindParam(1, $id, PDO::PARAM_INT);
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