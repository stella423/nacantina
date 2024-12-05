<?php
class ClassModel{
    private $connection;

    public function __construct(){
        $this->connection->$connection;

    }

    public function adicionarAluno($aluno, $sigla, $classe){
        try {
            $query->$this->connection = prepare("INSERT INTO Turma(idTurma, sigla, classe) VALUE (:idTurma, :sigla, :classe)");
            $query->bindPram(":idTurma", $idTurma);
            $query->bindPram(":sigla", $sigla);
            $query->bindPram(":classe", $classe);
            return $query->execute();
        } catch (PDOExcepection $e) {
            echo "erro", $e->getMessage();
        }
    }

    public function buscarTurma(){
        try {
            //code...
        } catch (PDOException $e) {
            //throw $th;
        }
    }

}
?>