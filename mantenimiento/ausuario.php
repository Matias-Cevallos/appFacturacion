<?php
$codigo=$_POST["codigo"];
echo $codigo;
include("../clases/conexion.php");
$tabla='usuario';
$condicion="cod_usuario=".$codigo;
$campos="usuario='NUEVO'";
actualizar($tabla, $campos, $condicion);









?>