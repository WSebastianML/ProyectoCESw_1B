<?php
require 'app.php';
use Clases\Accion;
$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

if(!$id) {
    header('Location: index.php');
}

$accion = Accion::buscar($id);


if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $costoTotal = floatval($_POST['accion']['precio']) * floatval($_POST['accion']['cantidad']);
    $_POST['accion']['costoTotal'] = strval($costoTotal);
    $args = $_POST['accion'];
    $accion->sincronizar($args);
    $accion->actualizar();
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
    <h2 id="section-title">Actualizar</h2>
    <div class="form-container">
        <form class="form-style" method="POST">
            <label class="form_label" for="">Nombre de Accion:</label>
            <input class="form_input" type="text" name="accion[nombre]" value="<?php echo $accion->getNombre(); ?>">
            <label class="form_label" for="">Fecha: </label>
            <input class="form_input" type="date" name="accion[fecha]">
            <label class="form_label" for="">Precio por Accion:</label>
            <input class="form_input" type="number" name="accion[precio]" step="0.01" inputmode="decimal" value="<?php echo $accion->getPrecio(); ?>">
            <label class="form_label" for="">Cantidad de Acciones:</label>
            <input class="form_input" type="number" name="accion[cantidad]" value="<?php echo $accion->getCantidad(); ?>">
            <input class="button submit_button" type="submit" value="Agregar Compra">
            <a href="index.php">Cancelar</a>
        </form>
    </div>
</body>

</html>