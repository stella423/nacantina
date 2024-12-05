<?php

   require_once "/..models/classModels.php";
   require_once "/..config/database.php";

class ClassController{
    private $connection;
    private $model;

    public function __construct(){
        $this->connection = new Database();
        $this->model = new ClassModel($this->connection->getConnection());

    } 
    public function adcionarAluno($id, $sigla, $classe){
        return $this->model->adicionarAluno($id, $sigla, $classe);

    }
    public function removerAluno(){
        return $this->model->removerAluno();
    }
}
?>