<?php
$codigo=$_POST["codigo"];
$usuario=$_POST["usuario"];
$clave=$_POST["clave"];
$empresa=$_POST["empresa"];
$perfil=$_POST["perfil"];
//echo $codigo;
include("../clases/conexion.php");
include("../funciones/fun.php");
$con = new Mysql();
$tabla='usuario';
$condicion="cod_usuario=".$codigo;
$nempresa=empresaCod($empresa);
$cperfil=perfilCod($perfil);
$campos="usuario='$usuario',clave='$clave',cod_empresa='$nempresa',cod_perfil='$cperfil'";


$r2=$con->actualizar($tabla, $campos, $condicion);
if($r2==1){
echo '<div class="alert alert-info">Actualizado Correctamente..</div>';
include("../mantenimiento/usuario.php");
}








?>