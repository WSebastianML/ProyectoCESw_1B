<?php
use PHPUnit\Framework\TestCase;
use Accion;

class AccionTest extends TestCase
{
    protected static $db;

    public static function setUpBeforeClass(): void
    {
        $servername = "bftvwdn6sn96d7rgjrao-mysql.services.clever-cloud.com";
        $username = "udr7t9uhbnntzghj";
        $password = "u9iRfdszkxXrKghojKju";
        $dbname = "bftvwdn6sn96d7rgjrao";
        self::$db = new mysqli($servername, $username, $password, $dbname);
        Accion::setDB(self::$db);
    }

    public function testDadoAgregarUnaAccionEntonces()
    {
        $accion = new Accion(['nombre' => 'Prueba', 'fecha' => '2024-01-11', 'precio' => 10, 'cantidad' => 5]);
        $accion->crear();
        $this->assertNotNull(Accion::buscar("44"));

    }
    public function testDadoBuscarUnaAccionPorIDEntonces()
    {
        $accion = Accion::buscar("44");
        $this->assertNotNull($accion);

    }

    public function testDadoModificarUnaAccionEntonces()
    {
        $accion = new Accion(['nombre' => 'Prueba_act', 'fecha' => '2024-02-11', 'precio' => 30, 'cantidad' => 5]);
        $accion->setID("44");
        $accion->actualizar();
        $accionActualizada = Accion::buscar($accion->getId());
        $this->assertEquals('Prueba_act', $accionActualizada->getNombre());
        $this->assertEquals(30, $accionActualizada->getPrecio());
    }

    public function testDadoEliminarUnaAccionEntonces()
    {
        $accion = new Accion(['nombre' => 'Prueba', 'fecha' => '2024-01-11', 'precio' => 10, 'cantidad' => 5]);
        $accion->setID("44");
        $accion->eliminar();
        $accionEliminada = Accion::buscar("44");
        $this->assertNull($accionEliminada);

    }
    


    public function testDadoListarAccionesEntonces()
    {
        $acciones = Accion::listar();
        $this->assertNotEmpty($acciones);
    }

    public function testDadoCalcularTotalEntonces()
    {
        $accion = new Accion(['precio' => 10, 'cantidad' => 5]);
        $this->assertEquals(50, $accion->getCostoTotal());
    }
}