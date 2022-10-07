<?php
$nombre=$_POST["nombre"];
$usuario=$_POST["usuario"];
$clave=$_POST["clave"];
$empresa=$_POST["empresa"];
$perfil=$_POST["perfil"];
//echo $nombre.' '.$usuario.' '.$clave.' '.$empresa.' '.$perfil;
if(empty($nombre)){echo '<div class="alert alert-info">Campo Vacio..</div>';return; }
if(empty($usuario)){echo '<div class="alert alert-info">Campo Vacio..</div>';return; }
if(empty($clave)){ echo '<div class="alert alert-info">Campo Vacio..</div>';return;}
if(empty($empresa)){ echo '<div class="alert alert-info">Campo Vacio..</div>';return;}
if(empty($perfil)){ echo '<div class="alert alert-info">Campo Vacio..</div>';return; }

include("../clases/conexion.php");
include("../funciones/fun.php");
$con = new Mysql();
//$tabla='usuario';
//$condicion="cod_usuario=".$codigo;
$cempresa=empresaCod($empresa);
$cperfil=perfilCod($perfil);

//echo $nempresa.' '.$cperfil;
//exit;
//$campos="usuario='$usuario',clave='$clave',cod_empresa='$nempresa',cod_perfil='$cperfil'";
$campos="nombre,usuario,clave,cod_empresa,cod_perfil,cod_estado";
$datos="'$nombre','$usuario','$clave','$cempresa','$cperfil','1'";
$tabla="usuario";

$r2=$con->insertar($tabla, $campos, $datos);
if($r2==1){
echo '<div class="alert alert-info">Insetado Correctamente..</div>';
include("../mantenimiento/usuario.php");
}








?>