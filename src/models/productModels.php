<?php
class ProductModel{
    private $connection;

    public function __construct($connection){
        $this->connection = $connection;
    }
    public function inserirProduto($idProduto, $nome, $descricao, $preco){
        try {
         $query=$this->connection->prepare("INSERT INTO produto (idProduto, nome, descricao, preco ) VALUES (:idProduto, :nome, :descricao, :preco,)"); 
         $query->bindParam(':idProduto', $idProduto);
         $query->bindParam(':nome', $nome);
         $query->bindParam(':descricao', $descricao);
         $query->bindParam(':preco', $preco);
         return $query->execute();
       
        } catch (PDOException $e) {
           echo "erro". $e->getMessage();
        }

    }


}
?>
