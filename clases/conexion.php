<?php

class Mysql
{
    private $host   ="localhost";
    private $usuario="root";
    private $clave  ="jayi100177";
    private $db     ="desinseg";
    public $conexion;
    public function __construct(){
        $this->conexion = new mysqli($this->host, $this->usuario, $this->clave,$this->db) or die(mysql_error());
        $this->conexion->set_charset("utf8");
    }
    public function insertar($tabla,$campos,$datos){
       $sql="INSERT INTO $tabla ($campos)VALUES($datos)";
     //echo $sql;
     // exit;
        $resultado =    $this->conexion->query($sql) or die($this->conexion->error);
        if($resultado)
            return true;
        return false;
         mysqli_close($this->conexion);
    }
     //BORRAR
    public function borrar($tabla, $condicion){
      $sql="DELETE FROM $tabla WHERE $condicion";
     // echo $sql;
        $resultado  =   $this->conexion->query($sql) or die($this->conexion->error);
        if($resultado)
            return true;
        return false;
         mysqli_close($this->conexion);
    }
    //ACTUALIZAR
    public function actualizar($tabla, $campos, $condicion){
      $sql="UPDATE $tabla SET $campos WHERE $condicion";
      //echo $sql;
      //exit;
        $resultado  =   $this->conexion->query($sql) or die($this->conexion->error);
        if($resultado)
            return true;
        return false;
         mysqli_close($this->conexion);
    }
    //BUSCAR
    public function buscar($tabla, $condicion){
      $sql="SELECT * FROM $tabla WHERE $condicion";
     // echo $sql."<br>";
     //exit;
        $resultado = $this->conexion->query($sql) or die($this->conexion->error);
        if($resultado)
            return $resultado->fetch_all(MYSQLI_ASSOC);
        return false;
        mysqli_close($this->conexion);
    }

     //BUSCAR  2
    public function buscar2($tabla,$consulta,$condicion){
      $sql="SELECT $consulta FROM $tabla WHERE $condicion";
      //echo $sql;
        $resultado = $this->conexion->query($sql) or die($this->conexion->error);
        if($resultado)
            return $resultado->fetch_all(MYSQLI_ASSOC);
        return false;
        mysqli_close($this->conexion);
    }

      //BUSCAR  3
    public function buscar3($tabla,$sql){
     //$sql="SELECT $consulta FROM $tabla WHERE $condicion";
     //echo $sql;
     //exit;
        $resultado = $this->conexion->query($sql) or die($this->conexion->error);
        if($resultado)
            return $resultado->fetch_all(MYSQLI_ASSOC);
        return false;
        mysqli_close($this->conexion);
    }



}

?>