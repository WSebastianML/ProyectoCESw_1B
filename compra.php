<?php
require 'app.php';
use Clases\Accion;

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nombreAccion = $_POST['accion']['nombre'];
    $precioAccion = floatval($_POST['accion']['precio']);
    $cantidadAccion = floatval($_POST['accion']['cantidad']);
    $iniciales = str_replace(' ', '', $nombreAccion);;
    // Aquí va la validación de existencia de la acción en Alpha Vantage
    $apikey = 'IJ19FBSWXP4ZFYML';
    $url = "https://www.alphavantage.co/query?function=SYMBOL_SEARCH&keywords=$iniciales&apikey=$apikey";
    echo "$url";
    $response = file_get_contents($url);

    if ($response) {
        $data = json_decode($response, true);

        // Verificar si se encontraron símbolos
        if (isset($data['bestMatches']) && !empty($data['bestMatches'])) {
            // La acción existe, procede a crearla en la base de datos
            $costoTotal = $precioAccion * $cantidadAccion;
            $_POST['accion']['costoTotal'] = strval($costoTotal);
            $accion = new Accion($_POST['accion']);
            $accion->crear();
            echo "La acción se creó correctamente.";
        } else {
            // La acción no existe
            echo "La acción '$nombreAccion' no existe en Alpha Vantage. No se pudo crear.";
        }
    } else {
        // Error al realizar la solicitud
        echo "Error al conectar con Alpha Vantage. No se pudo verificar la existencia de la acción.";
    }
}
?>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/index.css">

    <title>Mi Chaucherita</title>
</head>

<body>
    <div id="top-bar-menu-container">
        <div id="top-bar">
            <h1 id="app-name">Proyecto 1</h1>
        </div>
    </div>
    <h2 id="section-title">Nueva compra</h2>
    <div class="form-container">
        <form action="compra.php" class="form-style" method="POST">
            <label class="form_label" for="">Nombre de Accion:</label>
            <input class="form_input" type="text" name="accion[nombre]" placeholder="Ingrese nombre..." required>
            <label class="form_label" for="">Fecha: </label>
            <input class="form_input" type="date" name="accion[fecha]" required>
            <label class="form_label" for="">Precio por Accion:</label>
            <input class="form_input" type="number" name="accion[precio]" step="0.01" inputmode="decimal" placeholder="Ingrese el precio por accion" required>
            <label class="form_label" for="">Cantidad de Acciones:</label>
            <input class="form_input" type="number" name="accion[cantidad]" placeholder="Ingrese la cantidad de acciones" required>
            <input class="button submit_button" type="submit" value="Agregar Compra">
            <a href="index.php">Cancelar</a>
        </form>
    </div>
</body>

</html>
