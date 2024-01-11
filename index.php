<?php
require 'conexion.php';
require 'clases/Accion.php';
$db = conectarDB();
use Clases\Accion;
Accion::setDB($db);

$acciones = Accion::listar();

?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="estilos/index.css">
        <title>Acciones</title>
        <script src="https://kit.fontawesome.com/a36f81b4d3.js" crossorigin="anonymous"></script>
    </head>
    <body>
    <div id="top-bar-menu-container">
        <div id="top-bar">
            <h1 id="app-name">Proyecto 1</h1>
        </div>
    </div>
    <h2 id="section-title">Acciones</h2>
    <div class="account_operations">
        <a href="compra.php" class="operation">
            <div class="operation-icon">
            <i class="fa-solid fa-plus"></i>
            </div>
            <span class="operation-name">Agregar Compra</span>
        </a>
    </div>
    <div id="table_container">
        <table>
            <thead>
                <tr>
                    <th>NOMBRE DE ACCION</th>
                    <th>FECHA DE COMPRA</th>
                    <th>PRECIO DE COMPRA POR ACCION</th>
                    <th>CANTIDAD DE ACCIONES</th>
                    <th>COSTO TOTAL DE COMPRA</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach( $acciones as $accion ): ?>
                <tr>
                    <td><?php echo $accion->nombre; ?></td>
                    <td><?php echo $accion->fecha; ?></td>
                    <td><?php echo $accion->precio; ?></td>
                    <td><?php echo $accion->cantidad; ?></td>
                    <td><?php echo $accion->costoTotal; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5">
                        <div class="links"><a href="#">&laquo;</a> <a class="active" href="#">1</a> <a
                                href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">&raquo;</a></div>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
    </body>
</html>