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
?>