<?php 

require 'conexion.php';
require 'clases/Accion.php';
$db = conectarDB();

use Clases\Accion;

Accion::setDB($db);