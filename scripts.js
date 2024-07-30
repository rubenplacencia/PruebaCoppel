// scripts.js
document.getElementById('btn-alta').addEventListener('click', function() {
    var sku = document.getElementById('sku').value;
    var articulo = document.getElementById('articulo').value;
    var marca = document.getElementById('marca').value;
    var modelo = document.getElementById('modelo').value;
    var departamento = document.getElementById('departamento').value;
    var clase = document.getElementById('clase').value;
    var familia = document.getElementById('familia').value;
    var cantidad = document.getElementById('cantidad').value;
    var stock = document.getElementById('stock').value;

    if (parseInt(cantidad) > parseInt(stock)) {
        alert('La cantidad no puede ser mayor al stock.');
        return;
    }

    // Realizar la llamada AJAX para enviar los datos a PHP
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "alta.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            var status = xhr.status;
            if (status === 0 || (status >= 200 && status < 400)) {
                alert('Artículo dado de alta con éxito.');
                console.log(sku, articulo);
            } else {
                alert('Error al dar de alta el artículo.');
            }
        }
    };
    xhr.send("sku=" + sku + "&articulo=" + articulo + "&marca=" + marca + "&modelo=" + modelo + "&departamento=" + departamento + "&clase=" + clase + "&familia=" + familia + "&cantidad=" + cantidad + "&stock=" + stock);
});
