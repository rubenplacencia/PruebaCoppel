<?php
class db
{
  private $host = 'localhost';
  private $user = 'root';
  private $password = 'root';
  private $database = 'Coppel';

  private $connection;

  private $error = false;

  function __construct()
  {
    $this->connection = new mysqli($this->host, $this->user, $this->password, $this->database);
    if ($this->connection->connect_errno) {
      $this->error = true;
    }
  }

  function hasError()
  {
    return $this->error;
  }

  public function getProducts()
  {
    if ($this->error == true) {
      return null;
    } 
    $result = $this->connection->query('SELECT sku, articulo, marca, modelo, departamento, clase, familia, fecha, stock, cantidad, descontinuado, fecha_baja FROM product');
    return $result;
  }

  public function addProduct(
    $sku,
    $articulo,
    $marca,
    $modelo,
    $departamento,
    $clase,
    $familia,
    $stock,
    $cantidad,
    $descontinuado,
  )
  {
    if ($this->error == true) {
      return false;
    }

    $add_product_sql = "INSERT INTO product (sku, articulo, marca, modelo, departamento, clase, familia, stock, cantidad, descontinuado) VALUES (" . $sku . ", '". $articulo . "', '" . $marca . "', '" . $modelo . "', " . $departamento . ", " . $clase . ", " . $familia . ", " . $stock . ", " . $cantidad . ", " . $descontinuado . ")";
    if(!$this->connection->query($add_product_sql)) {
      return false;
    }
    
    return true;
  }
}