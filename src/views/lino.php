<?php
//require_once "../controllers/categoryController.php";
//require_once "../controllers/classController.php";
require_once "../controllers/productController.php";

//$category = new CategoryController();
 //print_r ($category->adicionarCategoria('', 'nome'));
   //print_r ($category->buscarCategoria());

//$class = new ClassController();   
//print_r ($class->addCionarAluno('tgs', '12°', 'Classe 10'));
  //print_r ($class->buscarAluno());

  $product = new ProductController();
  $product->inserirProduto('1', 'pizza', 'pizza de calabresa', '100kz');
  echo $product[0];

?>