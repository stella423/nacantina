<?php
 require_once "../models/productModels.php";
 require_once "../config/database.php";
class ProductController{
    private $connection;
    private $model;

    public function __construct(){
        $this->connection = new Database();
        $this->model = new ProductModel($this->connection->getConnection());
    }
    public function inserirProduto( $nome, $descricao, $preco, $categoria){
        return $this->model->inserirProduto( $nome, $descricao, $preco, $categoria);
    }
    public function deletar($idProduto){
        return $this->model->deletar( $idProduto);
    }
    public function buscar(){
        return $this->model->buscar();

    }
    public function updateProduto($nome, $descricao, $preco, $categoria, $id){
        return $this->model->updateProduto($nome, $descricao, $preco, $categoria, $id);
    }
    
    
}
?>