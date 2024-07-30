<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de Artículo</title>
    <link rel="stylesheet" href="../../public/styles.css">
</head>
<body>
    <h1>Alta de Artículo</h1>
    <form action="../../public/index.php?action=alta" method="post">
        <label for="sku">SKU:</label>
        <input type="number" id="sku" name="sku" required>

        <label for="articulo">Artículo:</label>
        <input type="text" id="articulo" name="articulo" maxlength="15">

        <label for="marca">Marca:</label>
        <input type="text" id="marca" name="marca" maxlength="15">

        <label for="modelo">Modelo:</label>
        <input type="text" id="modelo" name="modelo" maxlength="20">

        <label for="departamento">Departamento:</label>
        <input type="number" id="departamento" name="departamento">

        <label for="clase">Clase:</label>
        <input type="number" id="clase" name="clase">

        <label for="familia">Familia:</label>
        <input type="number" id="familia" name="familia">

        <label for="cantidad">Cantidad:</label>
        <input type="number" id="cantidad" name="cantidad">

        <label for="stock">Stock:</label>
        <input type="number" id="stock" name="stock">

        <button type="submit">Alta</button>
    </form>
</body>
</html>
