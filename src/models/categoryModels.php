<?php
class CategoryModel{
    private $connection;

    public function __construct($connection){
        $this->connection=$connection;
    }

    public function adicionarCategoria($idCategoria, $nome){
        try {
            $query=$this->connection->prepare("INSERT INTO Categoria(idCategoria, nome) VALUES (:idCategoria, :nome)");
            $query->bindParam(':idCategoria', $idCategoria);
            $query->bindParam(':nome', $nome);
            return $query->execute();
        } catch (PDOException $e) {
           echo "erro". $e->getMessage();
        }
    }
    public function buscarCategoria(){
        try {
            $sql = ("SELECT * FROM Categoria");
            $result=$this->connection->query($sql);
            $result->execute();
            return $result;
        } catch (PDOException $e) {
           echo "wrong".$e->getMessage();
        }
    }

}
?>