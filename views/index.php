<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Artículos</title>
    <link rel="stylesheet" href="./views/css/styles.css">
</head>
<body>
    <h1>Gestión de Artículos</h1>
    <form id="form-articulo">
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

        <button type="button" id="btn-alta">Alta</button>
        <button type="button" id="btn-baja">Baja</button>
        <button type="button" id="btn-cambio">Cambio</button>
        <button type="button" id="btn-consulta">Consulta</button>
    </form>

    <script src="./views/js/scripts.js"></script>
</body>
</html>
