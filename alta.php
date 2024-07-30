// alta.php
<?php
include 'funciones.php';

$sku = $_POST['sku'];
$articulo = $_POST['articulo'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$departamento = $_POST['departamento'];
$clase = $_POST['clase'];
$familia = $_POST['familia'];
$cantidad = $_POST['cantidad'];
$stock = $_POST['stock'];

altaArticulo($sku, $articulo, $marca, $modelo, $departamento, $clase, $familia, $cantidad, $stock);
?>
