<?php
namespace Clases;

class Accion{
    protected static $db;
    private $nombre;
    private $fecha;
    private $precio;
    private $cantidad;
    private $costoTotal;

    public function __construct($nombre, $fecha, $precio, $cantidad, $costoTotal){
        $this->$nombre = $nombre;
        $this->$fecha = $fecha;
        $this->$precio = $precio;
        $this->$cantidad = $cantidad;
        $this->$costoTotal = $costoTotal;
    }

    public static function setDB($baseDatos){
        self::$db = $baseDatos;
    }

    public static function listar(){
        $query = "SELECT * FROM Accion";
        $resultado = self::consultarSQL($query);
        return $resultado;
    }

    public static function consultarSQL($query){
        $resultado = self::$db->query($query);
        $array = [];
        while($registro = $resultado->fetch_assoc()){
            $array[] = static::crearObjeto($registro);
        }
        $resultado->free();
        return $array;
    }

    public static function crearObjeto($registro){
        $objeto = new static;
        foreach($registro as $key => $value ) {
            if(property_exists( $objeto, $key  )) {
                $objeto->$key = $value;
            }
        }

        return $objeto;
    }


}

?>