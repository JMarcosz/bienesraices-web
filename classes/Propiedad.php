<?php

namespace App;

class Propiedad
{

    protected static $db;     //Base de datos
    protected static $columnasDB = ['id', 'titulo', 'precio', 'imagen', 'descripcion', 'habitaciones', 'wc', 'estacionamiento', 'creado', 'vendedorId'];

    public $id;
    public $titulo;
    public $precio;
    public $imagen;
    public $descripcion;
    public $habitaciones;
    public $wc;
    public $estacionamiento;
    public $creado;
    public $vendedorId;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? '';
        $this->titulo = $args['titulo'] ?? '';
        $this->precio = $args['precio'] ?? '';
        $this->imagen = $args['imagen'] ?? 'imagen.jpg';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->habitaciones = $args['habitaciones'] ?? '';
        $this->wc = $args['wc'] ?? '';
        $this->estacionamiento = $args['estacionamiento'] ?? '';
        $this->creado = date('Y,m,d');
        $this->vendedorId = $args['vendedorId'] ?? '';
    }

    public static function setDB($database)
    {
        self::$db = $database;
    }

    public function guardar()
    {
        //Sanitizar atributos
        $atributos = $this->sanitizarAtributos();
        $columna = join(', ', array_keys($atributos));
        $fila = join("', '", array_values($atributos));


        $query = " INSERT INTO propiedades ($columna) values('$fila'); ";
        $resultado = self::$db->query($query);
    }

    public function atributos()
    {
        $atributos = [];
        foreach (self::$columnasDB as $columna) {
            if ($columna == 'id') continue;
            $atributos[$columna] = $this->$columna;
        }

        return $atributos;
    }

    public function sanitizarAtributos()
    {
        $atributos = $this->atributos();
        foreach ($atributos as $key => $value) {
            $atributos[$key] = self::$db->escape_string($value);
        }
        return ($atributos);
    }
}
