<?php
class CategoryModel{
    private $connection;

    public function __construct($connection){
        $this->connection=$connection;
    }

    public function adicionarCategoria( $nome){
        try {
            $query=$this->connection->prepare("INSERT INTO Categoria(categoria) VALUES ( :categoria)");
          
            $query->bindParam(':categoria', $nome);
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
    public function deletar($idCategoria){
        try {
            $sql = ("DELETE FROM categoria WHERE idCategoria=:idCategoria ");
            $query=$this->connection->prepare($sql);
            $query->bindParam(':idCategoria', $idCategoria);
            return $query->execute();

        } catch (PDOException $e) {
           echo "erro",$e->getMessage();
        }
    }

}
?>