<?php
require_once "../controllers/categoryController.php";
require_once "../controllers/classController.php";
require_once "../controllers/productController.php";
require_once "../controllers/clientController.php";
require_once "../controllers/employeeController.php";


//$category = new CategoryController();
//print_r ($category->buscarCategoria());
//print_r ($category->adicionarCategoria( 'alimentos'));
//print_r ($category->deletar( 16 ));
//print_r ($category->deletar( 17 ));
//print_r($category->update( 'aperitivos', 21));


//$class = new ClassController();   
//print_r ($class->addCionarAluno('tgs', '12°', 'Classe 10'));
//print_r ($class->buscarAluno());



 $product = new ProductController();
 //echo $product[0];
 //$product->inserirProduto( 'magoga', 'pao com frango ', '1000', 18);
// echo "<pre>";
//$product->inserirProduto( 'Cheetos','batata do pacote','5000kz', 21);
//print_r ($product->buscar('hamburguer','nome'));
 //print_r ($product->updateProduto(10,'chorrasco', 'frango e batatas fritas', '2000', 20)); 
//$product->deletar(17);
 //echo "</pre>";
 //$product->deletar( 6);


 //$client = new ClientController();
  //print_r ($client->cadastro('domingos', '9876545', '123', 'prof'));
  //print_r ($client->editar(5 ,'domingos', '555555', '123', 'prof'));
  //print_r ($client->deletar(1));

  //print_r($client->buscarClientes());



 // $employee = new EmployeeController();
  //print_r($employee->inserirFuncionario('Elsa', '933445506', '123'));
 //print_r($employee->editarFuncionario(16, 'Teresa', '999 333 666', '098'));
 // echo "<pre>";
  //print_r($employee->buscarFuncionarios());
  //print_r($employee->buscarFuncionario('Elsa', 'nome'));
  //print_r($employee->deletarFuncionario(17));

//echo "</pre>";
?>