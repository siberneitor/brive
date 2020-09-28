<?php

include '../models/modeloExistencia.php';

class existencias{
    public $opcion;
    public $modelo;
    public $codigo;
    public $numeroSucursal;
    public $cantidad;

    public function __construct(){
      $this->  modelo = new modeloExistencia();
      $this->  opcion = $_POST['opcion'];
        $this->  codigo = $_POST['codigoBarras'];
}

    public function guardarExistencia(){

    $this->  codigo = $_POST['codigoBarras'];
$this->numeroSucursal = $_POST['numeroSucursal'];
 $this-> cantidad = $_POST['cantidad'];

        $this->modelo->insert($this->codigo,$this->numeroSucursal,$this->cantidad);

}

public function actualizarExistencia(){
    $this->  codigo = $_POST['codigoBarras'];
    $this->numeroSucursal = $_POST['numeroSucursal'];
    $this-> cantidad = $_POST['cantidad'];

    $this->modelo->update($this->codigo,$this->numeroSucursal,$this->cantidad);

}

public function listarExistencias(){
$this->opcion =  $_POST['opcion'];
   $this->modelo->mostrar($this->opcion);
}


public function comprobarCodigo(){
        $this->  codigo = $_POST['codigoBarras'];
        $this->  numeroSucursal = $_POST['numeroSucursal'];
       return $this->modelo->existeCodigo($this->codigo,$this->numeroSucursal);
    }

}

$existencia= new existencias();



switch ($existencia->opcion){

    case 2:

        if($existencia->comprobarCodigo()){
           // echo 'verdadero';
            $existencia->actualizarExistencia();
        }else{
           // echo 'falso';
            $existencia->guardarExistencia();

        }
        break;
    default :
        print_r( $datos = $existencia->listarExistencias());
        break;

        }

?>