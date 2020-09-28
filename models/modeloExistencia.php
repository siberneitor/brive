<?php
class modeloExistencia{

    private $conn;


    private $database = 'brive';
    private $username = 'ubuntu';
    private $password = 'Mexico1.';


    public function __construct(){

        $this->conn = new PDO("mysql:host=localhost;dbname=$this->database", "$this->username", "$this->password");
    }
    public function insert($campo1, $campo2,$campo3){
try {

    $consulta = $this->conn->prepare('INSERT INTO modelo_Existencia (codigo,numeroSucursal,cantidad) VALUES(?,?,?)');
    $consulta->bindParam(1, $campo1);
    $consulta->bindParam(2, $campo2);
    $consulta->bindParam(3, $campo3);

    $consulta->execute();
    $this->id = $this->conn->lastInsertId();
}catch(exception $e){
    var_dump($e);
}

        $conexion = null;
    }

    public function update($campo1,$campo2,$campo3){

        $consulta =$this->conn->prepare('select cantidad from modelo_Existencia where codigo = ? AND numeroSucursal = ?');
        $consulta->bindParam(1, $campo1);
        $consulta->bindParam(2, $campo2);
        //$consulta->execute();
        $consulta->execute(array($campo1,$campo2));

        $user   = $consulta->fetch(PDO::FETCH_ASSOC);
        $existenciaActual = $user['cantidad'];
        var_dump($existenciaActual);
        $nuevaExistencia = $existenciaActual + $campo3;
        //var_dump($nuevaExistencia);


        $consulta =$this->conn->prepare('update modelo_Existencia set codigo = ?,numeroSucursal= ?,cantidad = ? where codigo = ? AND numeroSucursal =?');
        $consulta->bindParam(1, $campo1);
        $consulta->bindParam(2, $campo2);
        $consulta->bindParam(3, $nuevaExistencia);
        $consulta->bindParam(4, $campo1);
        $consulta->bindParam(5, $campo2);

        $consulta->execute();
        $this->id = $this->conn->lastInsertId();

        $conexion = null;
    }


    public function mostrar($opcion){
         //   var_dump('$opcion: '.$opcion);

        if($opcion ==3){

            $sucursal = 1;
            $consulta =$this->conn->prepare('select *from modelo_Existencia where numeroSucursal = ?');
            $consulta->bindParam(1,$sucursal);
        }else if($opcion ==4){
            $sucursal = 2;
            $consulta =$this->conn->prepare('select *from modelo_Existencia where numeroSucursal = ?');
            $consulta->bindParam(1,  $sucursal);
        }
        else {
            $consulta = $this->conn->prepare('select *from modelo_Existencia');
            //$consulta->bindParam(1, $campo1);
        }
        $consulta->execute();
        //$consulta->execute(array($id));
         $red = $consulta->fetchAll(PDO::FETCH_ASSOC);
        //$this->id = $this->conn->lastInsertId();


       return print json_encode($red, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX

    }
    public function existeCodigo($id,$noSucursal){

        $consulta =$this->conn->prepare('select *from modelo_Existencia where codigo = ? AND numeroSucursal = ?');
        $consulta->bindParam(1, $id);
        $consulta->bindParam(2, $noSucursal);
        $consulta->execute(array($id,$noSucursal));
        return  $consulta->rowCount();

    }

}
?>
