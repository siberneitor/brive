<?php
class modeloProducto{
    private $Modelo;
    private $conn;


    private $database = 'brive';
    private $username = 'ubuntu';
    private $password = 'Mexico1.';


    public function __construct(){

        $this->conn = new PDO("mysql:host=localhost;dbname=$this->database", "$this->username", "$this->password");
    }
    public function insert($campo1, $campo2,$campo3){


        $consulta =$this->conn->prepare('INSERT INTO modelo_producto (codigo,nombre,precio) VALUES(?,?,?)');
        $consulta->bindParam(1, $campo1);
        $consulta->bindParam(2, $campo2);
        $consulta->bindParam(3, $campo3);

        $consulta->execute();
        $this->id = $this->conn->lastInsertId();

        $conexion = null;
    }

    public function mostrar($id){
        $consulta =$this->conn->prepare('select *from modelo_producto');
        $consulta->execute();
         $red = $consulta->fetchAll(PDO::FETCH_ASSOC);
       return print json_encode($red, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX

    }

}
?>
