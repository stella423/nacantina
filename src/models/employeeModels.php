<?php 

class EmployeeModel{
    private $connection;

    public function __construct($connection){
        $this->connection=$connection;
    }
    public function inserirFuncionario($nome, $telefone, $senha){
        try {
            $query=$this->connection ->prepare("INSERT INTO funcionario (nome, telefone, senha) VALUES (:nome, :telefone, :senha)");
            $query->bindParam(':nome', $nome);
            $query->bindParam(':telefone', $telefone);
            $query->bindParam(':senha', $senha);
            return $query->execute();

        } catch (PDOException $e) {
          echo "erro".$e->getMessage();
        }
    }
    public function buscarFuncionarios(){
        try {
            $sql = ("SELECT * FROM funcionario ");
            $result=$this->connection ->prepare($sql);
            $result->execute();
            return $result->FetchALL(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
           echo "erro".$e->getMessage();
        }
    }
    public function buscarFuncionario($valor, $coluna){
        try {
            $sql = ("SELECT * FROM Funcionario WHERE $coluna Like :valor") ;
            $response =$this->connection->prepare($sql);
            $response->bindParam(':valor', $valor);
            $response->execute();
            return $response->FetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "erro".$e->getMessage();
        }
    }

    public function editarFuncionario($idFuncionario, $nome, $telefone, $senha){
        try {
           $sql = ("UPDATE  funcionario SET nome=:nome, telefone=:telefone, senha=:senha WHERE idFuncionario=:idFuncionario");
           $query = $this->connection->prepare($sql);
           $query->bindParam(':idFuncionario', $idFuncionario);
           $query->bindParam(':nome', $nome);
           $query->bindParam(':telefone', $telefone);
           $query->bindParam(':senha', $senha);
           return $query->execute();
        } catch (PDOException $e) {
          echo "erro".$e->getMessage();
        }
    }
    public function deletarFuncionario($id){
       try {
        $sql= ("DELETE FROM funcionario WHERE idFuncionario=:idFuncionario");
        $query=$this->connection->prepare($sql);
        $query->bindParam(':idFuncionario', $id);
        return $query->execute();
       } catch (PDOException $e) {
        echo "erro".$e->getMessage();
       }
    }
}
?>