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
        <form action="index.php" class="form-style">
            <label class="form_label" for="">Nombre de Accion:</label>
            <input class="form_input" type="text" placeholder="Ingrese nombre...">
            <label class="form_label" for="">Cantidad de Acciones:</label>
            <input class="form_input" type="number">
            <label class="form_label" for="">Precio por Accion:</label>
            <input class="form_input" type="number">
            <input class="button submit_button" type="submit" value="Agregar Compra">
            <input class="button cancel_button" type="submit" value="Cancelar">
        </form>
    </div>
</body>

</html>