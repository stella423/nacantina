<?php
//require_once "../controllers/categoryController.php";
require_once "../controllers/classController.php";
require_once "../controllers/productController.php";
require_once "../controllers/clientController.php";


//$category = new CategoryController();
 //print_r ($category->adicionarCategoria('', 'nome'));
   //print_r ($category->buscarCategoria());

//$class = new ClassController();   
//print_r ($class->addCionarAluno('tgs', '12°', 'Classe 10'));
//print_r ($class->buscarAluno());

 // $product = new ProductController();
  //$product->inserirProduto('1', 'pizza', 'pizza de calabresa', '100kz');
  //echo $product[0];

  $client = new ClientController();
  //print_r ($client->cadastro('domingos', '9876545', '123', 'prof'));
  //print_r ($client->editar(5 ,'domingos', '555555', '123', 'prof'));
  print_r ($client->deletar(1));

  print_r($client->buscarClientes());

?>