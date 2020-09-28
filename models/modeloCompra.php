<?php
class modeloCompra{

    private $conn;


    private $database = 'brive';
    private $username = 'ubuntu';
    private $password = 'Mexico1.';


    public function __construct(){

        $this->conn = new PDO("mysql:host=localhost;dbname=$this->database", "$this->username", "$this->password");
    }


    public function hacerCompra($codigo,$numeroSucursal,$cantidad){

        $consulta =$this->conn->prepare('select cantidad from modelo_Existencia where codigo = ? AND numeroSucursal = ?');
        $consulta->bindParam(1, $codigo);
        $consulta->bindParam(2, $numeroSucursal);
        //$consulta->execute();
        $consulta->execute(array($codigo,$numeroSucursal));

        $user   = $consulta->fetch(PDO::FETCH_ASSOC);
        $existenciaActual = $user['cantidad'];

        $restarCantidad = $existenciaActual - $cantidad ;
     //  var_dump('$existenciaActual-> '.$existenciaActual.'/'.'$cantidad-> '.$cantidad.'/'.'$restarCantidad-> '.$restarCantidad);


        $consulta =$this->conn->prepare('update modelo_Existencia set codigo = ?,numeroSucursal= ?,cantidad = ? where codigo = ? AND numeroSucursal =?');
        $consulta->bindParam(1, $codigo);
        $consulta->bindParam(2, $numeroSucursal);
        $consulta->bindParam(3, $restarCantidad);
        $consulta->bindParam(4, $codigo);
        $consulta->bindParam(5, $numeroSucursal);

        $consulta->execute();
        $this->id = $this->conn->lastInsertId();

        $conexion = null;
    }

}
?>
