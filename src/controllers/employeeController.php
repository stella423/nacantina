<?php
require_once "../models/employeeModels.php";
require_once "../config/database.php";

class EmployeeController{
    private $connection;
    private $model;

    public function __construct(){
        $this->connection = new Database();
        $this->model = new EmployeeModel($this->connection->getConnection());
    }
    public function inserirFuncionario($nome, $telefone, $senha){
        echo" Senha controller ",$telefone;
        return $this->model->inserirFuncionario($nome, $telefone, $senha);
    }
    public function buscarFuncionarios(){
        return $this->model->buscarFuncionarios();
    }
    public function buscarFuncionario($valor, $coluna){
        return $this->model->buscarFuncionario($valor, $coluna);
    }

    public function editarFuncionario($idFuncionario, $nome, $telefone, $senha){
        return $this->model->editarFuncionario($idFuncionario, $nome, $telefone, $senha);
    }
    public function deletarFuncionario($id){
        return $this->model->deletarFuncionario($id);
    }
}
?>