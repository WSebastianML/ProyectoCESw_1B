<?php
namespace Clases;

class Accion{
    protected static $db;
    private $nombre;
    private $fecha;
    private $precio;
    private $cantidad;
    private $costoTotal;

    protected static $columnasDB = ['nombre', 'fecha', 'precio', 'cantidad', 'costoTotal'];


    public function __construct($args = [])
    {
        $this->nombre = $args['nombre'] ?? null;
        $this->fecha = $args['fecha'] ?? '';
        $this->precio = $args['precio'] ?? '';
        $this->cantidad = $args['cantidad'] ?? '';
        $this->costoTotal = $args['costoTotal'] ?? '';
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getFecha(){
        return $this->fecha;
    }

    public function getPrecio(){
        return $this->precio;
    }

    public function getCantidad(){
        return $this->cantidad;
    }

    public function getCostoTotal(){
        return $this->costoTotal;
    }

    public static function setDB($baseDatos){
        self::$db = $baseDatos;
    }

    public static function listar(){
        $query = "SELECT * FROM Accion";
        $resultado = self::consultarSQL($query);
        return $resultado;
    }

    public function crear() {
        $atributos = $this->sanitizarAtributos();

        $query = " INSERT INTO Accion ( ";
        $query .= join(', ', array_keys($atributos));
        $query .= " ) VALUES (' "; 
        $query .= join("', '", array_values($atributos));
        $query .= " ') ";

        $resultado = self::$db->query($query);

        if($resultado) {
            header('Location: index.php');
        }
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

    public function atributos() {
        $atributos = [];
        foreach(static::$columnasDB as $columna) {
            if($columna === 'id') continue;
            $atributos[$columna] = $this->$columna;
        }
        return $atributos;
    }

    public function sanitizarAtributos() {
        $atributos = $this->atributos();
        $sanitizado = [];
        foreach($atributos as $key => $value ) {
            $sanitizado[$key] = self::$db->escape_string($value);
        }
        return $sanitizado;
    }


}

?>