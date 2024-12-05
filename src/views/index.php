<?php

    require_once "../controllers/clientController.php";
    require_once "../controllers/classController.php";
    
   

    $client = new ClientController();
    $turma= new classController();


    // cadastrar cliente
    //$client->cadastro('Ariana grande','9999999', '121212', 'singer');
   // echo $client[0];

    
  /* echo "<pre>";
   print_r($client->buscarClientes());

   echo "</pre>";

   print_r($client->deletar(3));

   echo "<pre>";
   print_r($client->buscarClientes());

   echo "</pre>";
   */

   print_r($turma->actualizarAluno());

?>