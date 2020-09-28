<?php

include '../models/modeloProducto.php';

class producto{
    public $opcion;
    public $modelo;
    public $codigo;
    public $nombre;
    public $precio;

    public function __construct(){
      $this->  modelo = new modeloProducto();
      $this->  opcion = $_POST['opcion'];
        $this->  codigo = $_POST['codigoBarras'];
}

    public function guardarProd(){


    $this->  codigo = $_POST['codigoBarras'];
$this->nombre = $_POST['nombreProd'];
 $this-> precio = $_POST['precioUnitario'];

       // $guardar = new modeloProducto();
        $this->modelo->insert($this->codigo,$this->nombre,$this->precio);

}

public function listarProductos(){

   $this->modelo->mostrar(72);
}

}

$producto= new producto();

switch ($producto->opcion){
    case 1:
        print_r( $algo = $producto->listarProductos());
       // echo 'opcion1';
        break;
    case 2:
        $producto->guardarProd();
        echo 'producto GUrdado';
        break;

        }

?>