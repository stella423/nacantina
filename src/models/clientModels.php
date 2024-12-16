<?php
class ClientModel{

    private $connection;

    public function __construct($connection){
        $this->connection=$connection;

    } 
    public function cadastro($id, $nome, $telefone, $senha, $tipoCliente){
        echo" Senha controller ",$senha;
       try { 
        $query->$this->connection=prepare("INSERT INTO cliente (id, nome, telefone, senha, tipoCliente) VALUES (:id, :nome, :telefone, :senha, :tipoCliente)");
        $query->bindParam(':id', $id);
        $query->bindParam(':nome', $nome);
        $query->bindParam(':telefone', $telefone);
        $query->bindParam(':senha', $senha);
        $query->bindParam(':tipoCliente', $tipoCliente);
        return $query->execute();

       }catch (PDOException $e) {
        echo "senha errada". $e->getMessage();
        
       }  

    }
    public function buscarClientes(){
       try {
        $sql = ("SELECT * FROM cliente");
        $result=$this->connection->query($sql);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);


       } catch (PDOException $e) {
        echo "erro ao selecionar". $e->getMessage();
       }
        

    }

    public function buscarCliente($coluna, $valor){
        try {
            $sql = "SELECT * FROM cliente WHERE  $coluna LIKE :valor";
            $valor = "%$valor%";
            $resp = $this->connection->prepare($sql);
            $resp->bindParam(':valor',$valor);
            $resp->execute();

            return $resp->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo "erro". $e->getMessage();
        }

    }

    
}
?>