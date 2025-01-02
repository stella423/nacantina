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

    public function adicionarCategoria( $nome){
        return $this->model->adicionarCategoria( $nome);

    }
    public function buscarCategoria(){
        return $this->model->buscarCategoria();
    }   
    public function deletar($id){
        return $this->model->deletar($id);
    }
    public function update($categoria, $idCategoria){
        return $this->model->update($categoria, $idCategoria);
    }

}
?>