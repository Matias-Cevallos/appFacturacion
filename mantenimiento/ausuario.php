<?php
$codigo=$_POST["codigo"];
$usuario=$_POST["usuario"];
//echo $codigo;
include("../clases/conexion.php");
$con = new Mysql();
$tabla='usuario';
$condicion="cod_usuario=".$codigo;
$campos="usuario='$usuario'";

$r2=$con->actualizar($tabla, $campos, $condicion);
if($r2==0){
echo "Actualizado Correctamente";
}








?>