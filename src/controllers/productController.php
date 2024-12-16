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
    public function inserirProduto($idProduto, $nome, $descricao, $preco){
        return $this->model->inserirProduto($idProduto, $nome, $descricao, $preco);
    }
}
?>