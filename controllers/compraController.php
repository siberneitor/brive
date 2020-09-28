<?php

include '../models/modeloCompra.php';

class compra{
    public $opcion;
    public $modelo;
    public $codigo;
    public $numeroSucursal;
    public $cantidad;

    public function __construct(){
      $this->  modelo = new modeloCompra();
      $this->  opcion = $_POST['opcion'];
        $this->  codigo = $_POST['codigoBarras'];
}


public function comprar(){
    $this->  codigo = $_POST['codigoBarras'];
    $this->numeroSucursal = $_POST['numeroSucursal'];
    $this-> cantidad = $_POST['cantidad'];

    $this->modelo->hacerCompra($this->codigo,$this->numeroSucursal,$this->cantidad);

}

//public function listarExistencias(){
//
//   $this->modelo->mostrar();
//}
//
//
//public function comprobarCodigo(){
//        $this->  codigo = $_POST['codigoBarras'];
//        $this->  numeroSucursal = $_POST['numeroSucursal'];
//       return $this->modelo->existeCodigo($this->codigo,$this->numeroSucursal);
//    }

}

$compra= new compra();

$compra->comprar();
//
//        if($existencia->comprar()){
//           echo 'verdadero';
//            //$existencia->actualizarExistencia();
//        }else{
//           echo 'falso';
//            //$existencia->guardarExistencia();
//
//        }



?>