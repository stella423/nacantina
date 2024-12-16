<?php

require_once "../models/categoryModels.php";
require_once "../config/database.php";

class CategoryController{
    private $connection;
    private $model; 

    public function __construct(){
        $this->connection= new Database();
        $this->model = new CategoryModel($this->connection->getConnection());
    }

    public function adicionarCategoria($idCategoria, $nome){
        return $this->model->adicionarCategoria($idCategoria, $nome);

    }
    public function buscarCategoria(){
        return $this->model->buscarCategoria();
    }     

}
?>