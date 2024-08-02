<form id="form-articulo" method="POST" action="index.php?action=addProduct">
  <label for="sku">SKU:</label>
  <input type="number" id="sku" name="sku" required>

  <div id="detalles-articulo">
    <label for="articulo">Artículo:</label>
    <input type="text" id="articulo" name="articulo" maxlength="15">

    <label for="marca">Marca:</label>
    <input type="text" id="marca" name="marca" maxlength="15">

    <label for="modelo">Modelo:</label>
    <input type="text" id="modelo" name="modelo" maxlength="20">

    <label for="departamento">Departamento:</label>
    <input type="number" id="departamento" name="departamento" maxlength="1">

    <label for="clase">Clase:</label>
    <input type="number" id="clase" name="clase" maxlength="2">

    <label for="familia">Familia:</label>
    <input type="number" id="familia" name="familia" maxlength="3">

    <label for="cantidad">Cantidad:</label>
    <input type="number" id="cantidad" name="cantidad" maxlength="9">

    <label for="stock">Stock:</label>
    <input type="number" id="stock" name="stock" maxlength="9">
  </div>

  <input type="submit" value="Agregar Producto">
  <button type="button" id="btn-baja">Baja</button>
  <button type="button" id="btn-cambio">Cambio</button>
  <button type="button" id="btn-consulta">Consulta</button>
</form>

<div class="products">
  <h2>Products</h2>
  <?php
  include_once './config/db.php';
  $db = new DB();
  $products = $db->getProducts();
  ?>
  <table>
    <tr>
      <th>SKU</th>
      <th>Artículo</th>
      <th>Marca</th>
      <th>Modelo</th>
      <th>Departamento</th>
      <th>Clase</th>
      <th>Familia</th>
      <th>Fecha</th>
      <th>Stock</th>
      <th>Cantidad</th>
      <th>Descontinuado</th>
      <th>Fecha de baja</th>
    </tr>
    <?php
    while ($fila = $products->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $fila['sku'] . "</td>";
      echo "<td>" . $fila['articulo'] . "</td>";
      echo "<td>" . $fila['marca'] . "</td>";
      echo "<td>" . $fila['modelo'] . "</td>";
      echo "<td>" . $fila['departamento'] . "</td>";
      echo "<td>" . $fila['clase'] . "</td>";
      echo "<td>" . $fila['familia'] . "</td>";
      echo "<td>" . $fila['fecha'] . "</td>";
      echo "<td>" . $fila['stock'] . "</td>";
      echo "<td>" . $fila['cantidad'] . "</td>";
      echo "<td>" . $fila['descontinuado'] . "</td>";
      echo "<td>" . $fila['fecha_baja'] . "</td>";
      echo "</tr>";
    }
    ?>
    </tr>
  </table>
</div>