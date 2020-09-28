<?php


class Conexion extends PDO
{
    private $tipo_de_base = 'mysql';
    private $host = 'localhost';
    private $nombre_de_base = 'brive';
    private $usuario = 'ubuntu';
    private $contrasena = 'Mexico1.';

    public function __construct()
    {
        //Sobreescribo el método constructor de la clase PDO.
        try {
            parent::__construct("{$this->tipo_de_base}:dbname={$this->nombre_de_base};host={$this->host};charset=utf8", $this->usuario, $this->contrasena);
        } catch (PDOException $e) {
            echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
            exit;
        }
    }
}

class gu
{
    public function guardar()
    {
        $conexion = new Conexion();
        $v1 = "45";
        $v2 = "producto45";
        $v3 = "450";
        $v4 = "4500";

            $consulta = $conexion->prepare('INSERT INTO productos (codigoBarras,nombreProd,cantidad,precio) VALUES(?,?,?,?)');
            $consulta->bindParam(1, $v1);
            $consulta->bindParam(2, $v2);
            $consulta->bindParam(3, $v3);
            $consulta->bindParam(4, $v4);
            $consulta->execute();
            $this->id = $conexion->lastInsertId();

        $conexion = null;
    }
}

$x= new gu();
$x->guardar();

?>
