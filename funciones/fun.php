<?php

function empresa($codigo) {
  
   $con = new Mysql();
   $tabla2="empresa";
   $sql2="SELECT * FROM `empresa` WHERE cod_empresa=".$codigo;
   
    $r2=$con->buscar3($tabla2,$sql2);
    if($r2){
     foreach ($r2 as $value){
        $empresa=$value['empresa'];
       }
     }
    return $empresa;
}
function perfil($codigo) {
  
   $con = new Mysql();
   $tabla2="perfil";
   $sql2="SELECT * FROM `perfil` WHERE cod_perfil=".$codigo;
   
    $r2=$con->buscar3($tabla2,$sql2);
    if($r2){
     foreach ($r2 as $value){
        $perfil=$value['perfil'];
       }
     }
    return $perfil;
}

function insertar($tabla,$columna,$valor) {
   $val=0;
   $con = new Mysql();
   $sql2="INSERT INTO $tabla ($columna)VALUES($valor)";
   
   $r2=$con->buscar3($tabla,$sql2);
    if($r2){
     $val=1;
     }else
     {
     $val=0;
     }
    return $val;
}

function actualizar($tabla,$columna,$condicion) {
   $val=0;
   $con = new Mysql();
   $sql2="UPDATE $tabla SET $columna WHERE $condicion";
   
   $r2=$con->buscar3($tabla,$sql2);
    if($r2){
     $val=1;
     }else
     {
     $val=0;
     }
    return $val;
}

function eliminar($tabla,$condicion) {
   $val=0;
   $con = new Mysql();
   $sql2="DELETE $tabla WHERE $condicion";
   
   $r2=$con->buscar3($tabla,$sql2);
    if($r2){
     $val=1;
     }else
     {
     $val=0;
     }
    return $val;
}

?>