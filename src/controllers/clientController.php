<?php

require_once "../models/clientModels.php";
require_once "../config/database.php";

class ClientController{

    
    private $connection;
    private $model;

    public function __construct(){
        $this->connection = new Database();
        $this->model = new ClientModel($this->connection->getConnection());
    }

    public function cadastro( $nome, $telefone, $senha, $tipoCliente){
        echo" Senha controller ",$senha;
        return $this->model->cadastro( $nome, $telefone, $senha, $tipoCliente);
    }    

    public function buscarClientes( ){
        return $this->model->buscarClientes();
    }
    public function buscarCliente($coluna, $valor ){
        return $this->model->buscarCliente($coluna, $valor);
    }



    public function deletar($id){
        return $this->model->deletar($id);
    }

    public function editar($id, $nome, $telefone, $senha, $tipoCliente){
        return $this->model->editar($id, $nome, $telefone, $senha, $tipoCliente);
    }


}
?>