<?php

require_once "/..models/clientModels.php";
require_once "/..config/database.php";

class ClientController{

    
    private $connection;
    private $model;

    public function __construct(){
        $this->connection = new Database();
        $this->model = new ClientModel($this->connection->getConnection());
    }

    public function cadastro($id, $nome, $telefone, $senha, $tipoCliente){
        echo" Senha controller ",$senha;
        return $this->model->cadastro($id, $nome, $telefone, $senha, $tipoCliente);
    }

    public function buscarCliente($sql){
        return $this->model->buscarCliente($sql);
    }

    public function deletar(){
        return $this->model->deletar();
    }

    public function update(){
        return $this->model->update();
    }


}
?>