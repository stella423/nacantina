<?php
class ClientModel{

    private $connection;

    public function __construct($connection){
        $this->connection=$connection;

    } 
    public function cadastro( $nome, $telefone, $senha, $tipoCliente){
       
       try { 
        $query=$this->connection->prepare("INSERT INTO cliente ( nome, telefone, senha, tipoCliente) VALUES ( :nome, :telefone, :senha, :tipoCliente)");
     
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

    public function editar($id, $nome, $telefone, $senha, $tipoCliente ){
        try {
            $sql = "UPDATE cliente SET nome = :nome, telefone = :telefone, senha = :senha, tipoCliente= :tipoCliente WHERE id=:id";
            $query = $this->connection ->prepare($sql);
            $query->bindParam(':id', $id);
            $query->bindParam(':nome', $nome);
            $query->bindParam(':telefone', $telefone);
            $query->bindParam(':senha', $senha);
            $query->bindParam(':tipoCliente', $tipoCliente);
            return $query->execute();
            

        } catch (PDOException $e) {
         echo "erro".$e->getMessage();
        }

    }
    

    public function deletar($id){
        try {
            $sql = " DELETE FROM cliente WHERE id =:id";
            $query=$this->connection->prepare($sql);
            $query->bindParam(':id', $id);
            return $query->execute();
        } catch (PDOException $e) {
           echo "erro".$e->getMessage();
        }
    }

    
}
?>