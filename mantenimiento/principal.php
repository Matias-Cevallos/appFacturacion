
<?php
$codigo=$_POST["codigo"];
include("../clases/conexion.php");
include("../funciones/fun.php");
$con = new Mysql();
$tabla2="submenu";
$sql2="SELECT * FROM `submenu` WHERE `cod_estado`=1 and cod_submenu='$codigo';";
$smenu="";
//echo $sql2;
 $r2=$con->buscar3($tabla2,$sql2);
 if($r2){
  foreach ($r2 as $value){
     $smenu=$value['link'];
    //$smenu="'".$smenu."'";
    }
  }
  
//echo $smenu;

include($smenu);







?>