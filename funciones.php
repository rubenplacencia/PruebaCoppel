// funciones.php
<?php
include 'db.php';

function altaArticulo($sku, $articulo, $marca, $modelo, $departamento, $clase, $familia, $cantidad, $stock) {
    global $conn;
    $stmt = $conn->prepare("CALL alta_articulo(?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isssiiiii", $sku, $articulo, $marca, $modelo, $departamento, $clase, $familia, $cantidad, $stock);
    $stmt->execute();
    $stmt->close();
}

function bajaArticulo($sku) {
    global $conn;
    $stmt = $conn->prepare("CALL baja_articulo(?)");
    $stmt->bind_param("i", $sku);
    $stmt->execute();
    $stmt->close();
}

function cambioArticulo($sku, $articulo, $marca, $modelo, $departamento, $clase, $familia, $cantidad, $stock, $descontinuado) {
    global $conn;
    $stmt = $conn->prepare("CALL cambio_articulo(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isssiiiiii", $sku, $articulo, $marca, $modelo, $departamento, $clase, $familia, $cantidad, $stock, $descontinuado);
    $stmt->execute();
    $stmt->close();
}

function consultaArticulo($sku) {
    global $conn;
    $stmt = $conn->prepare("CALL consulta_articulo(?)");
    $stmt->bind_param("i", $sku);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();
    $stmt->close();
    return $data;
}
?>
