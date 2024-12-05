<?php
class ClientModel{

    private $connection;

    public function __construct($connection){
        $this->connection->$connection();

    } 
    public function cadastro($id, $nome, $telefone, $senha, $tipoCliente){
        echo" Senha controller ",$senha;
       try { 
        $query->$this->connection=prepare("INSERT INTO cliente (id, nome, telefone, senha, tipoCliente) VALUE (:id, :nome, :telefone, :senha, :tipoCliente)");
        $query->bindParam(':id', $id);
        $query->bindParam(':nome', $nome);
        $query->bindParam(':telefone', $telefone);
        $query->bindParam(':senha', $senha);
        $query->bindParam(':tipoCiente', $tipoCliente);
        return $query->execute();

       }catch (PDOExpection $e) {
        echo "senha errada", $e->getMessage();
        
       }

    }
    public function buscarCliente($sql){
       try {
        $sql = ("SELECT * FROM cliente") ;
        $result->prepare($sql);
        $response->execute();
       } catch (PDOExpection $e) {
        echo "erro ao seleccionar", $e->getMessage();
       }
        

    }
}
?>