<?php
class MainController
{
  private $products = [];
  
  public function __construct()
  {
    if (isset($_SESSION['products'])) {
      $this->products = $_SESSION['products'];
    }
  }

  public function view()
  {
    $products = $this->getProducts();
    $content = "views/template/MainForm.php";
    require_once 'views/template/Base.php';
  }

  public function handleRequest()
  {
    $action = isset($_GET['action']) ? $_GET['action'] : '';
    switch ($action) {
      case 'addProduct':
        $this->addProduct();
        break;
      // Otros casos para baja, cambio, consulta, etc.
    }
    $this->view();
  }

  private function getProducts()
  {
    return $this->products;
  }

  private function addProduct()
  {
    $product = [
      'sku' => $_POST['sku'],
      'articulo' => $_POST['articulo'],
      'marca' => $_POST['marca'],
      'modelo' => $_POST['modelo'],
      'departamento' => $_POST['departamento'],
      'clase' => $_POST['clase'],
      'familia' => $_POST['familia'],
      'fecha' => $_POST['fecha'],
      'stock' => $_POST['stock'],
      'cantidad' => $_POST['cantidad'],
      'descontinuado' => $_POST['descontinuado']
    ];
    
    array_push($this->products, $product);
    $this->view();
  }
}
