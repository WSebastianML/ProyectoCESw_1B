<?php
require 'app.php';
use Clases\Accion;
$accion = new Accion;


if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $costoTotal = floatval($_POST['accion']['precio']) * floatval($_POST['accion']['cantidad']);
    $_POST['accion']['costoTotal'] = strval($costoTotal);
    $accion = new Accion($_POST['accion']);
    echo "<pre>";
    var_dump($accion);
    echo "</pre>";
    $accion->crear();
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