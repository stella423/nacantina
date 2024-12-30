<?php
class ProductModel{
    private $connection;

    public function __construct($connection){
        $this->connection = $connection;
    }

    public function inserirProduto($nome, $descricao, $preco, $categoria){
        try {
         $query=$this->connection->prepare("INSERT INTO produto ( nome, descricao, preco, idCategoria ) VALUES ( :nome, :descricao, :preco, :idCategoria)"); 
        
         $query->bindParam(':nome', $nome);
         $query->bindParam(':descricao', $descricao);
         $query->bindParam(':preco', $preco);
         $query->bindParam(':idCategoria', $categoria);
         return $query->execute();
       
        } catch (PDOException $e) {
           echo "erro". $e->getMessage();
        }

    }
    

    public function buscar(){
        try {
        $sql= ("SELECT p.idProduto, p.nome, p.descricao, p.preco, c.categoria FROM `produto` as p JOIN categoria as c WHERE p.idCategoria = c.idCategoria");
        $query=$this->connection->prepare($sql);
        $query->execute();
        return $query->FetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo "erro".$e->getMessage();
        }
    }

    public function deletar($idProduto){
        try {
         $sql = ("DELETE FROM produto WHERE idProduto=:idProduto");
         $query= $this->connection->prepare($sql);
         $query->bindParam(':idProduto',$idProduto);
         return $query->execute();
        } catch (PDOException $e) {
            echo "erro".$e->getMessage();
        }
    }
     public function updateProduto($nome, $descricao, $preco, $categoria, $id){
        try {
            $sql = "UPDATE produto SET nome=:nome, descricao=:descricao, preco=:preco, idCategoria=:idCategoria  WHERE idProduto=:idProduto";
            $query = $this->connection ->prepare($sql);
            $query->bindParam(':nome', $nome);
            $query->bindParam(':descricao', $descricao);
            $query->bindParam(':preco', $preco);
            $query->bindParam(':idCategoria', $categoria);
            $query->bindParam(':idProduto', $id);
            return $query->execute();
        } catch (PDOException $e) {
            echo "erro". $e->getMessage();
        }
     }


}
?>
