

<?php
$con = new Mysql();
$tabla2="usuario";
$sql2="SELECT * FROM `usuario` WHERE `cod_estado`=1;";
$cusuario="";
$usuario="";
$clave="";
//echo $sql2;
 $r2=$con->buscar3($tabla2,$sql2);
 
 

echo '
<div class="container">
  <!-- Content here -->


       


   <div id="accordion">
   <div class="card">
     <div class="card-header" id="headingOne">
       <h5 class="mb-0">
         <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
           LISTA DE USUARIOS
         </button>
       </h5>
     </div>
 
     <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
       <div class="card-body">
                    <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">Codigo</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Clave</th>
                        <th scope="col">Empresa</th>
                        <th scope="col">Perfil</th>
                        </tr>
                    </thead>
                    <tbody>
                      ';
                      if($r2){
                        foreach ($r2 as $value){
                           $cusuario=$value['cod_usuario'];
                           $usuario=$value['usuario'];
                           $clave=$value['clave'];
                           $codEmpresa=$value['cod_empresa'];
                           $codPerfil=$value['cod_perfil'];
                           $empresa=empresa($codEmpresa);
                           $perfil=perfil($codPerfil);

                          //$smenu="'".$smenu."'";
                          //echo $cusuario;
                          echo '<tr>';
                          echo '<th scope="row">'.$cusuario.'</th>';
                          echo '<td>'.$usuario.'</td>';
                          echo '<td>'.$clave.'</td>';
                          echo '<td>'.$empresa.'</td>';
                          echo '<td>'.$perfil.'</td>';
                          echo '<td><a title="Actualizar" href="#"><img src="./img/actualizar.png" alt="Actualizar" /></a></td>';
                          echo '<td><a title="Eliminar" href="#"><img src="./img/eliminar.png" alt="Eliminar" /></a></td>';
                         
                          echo '</tr>';  

                          }
                        }  
                         
                        
                    echo '    
                    </tbody>
                    </table>
       </div>
     </div>
   </div>
   <div class="card">
     <div class="card-header" id="headingTwo">
       <h5 class="mb-0">
         <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
           NUEVO CLIENTE
         </button>
       </h5>
     </div>
     <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
       <div class="card-body">
                        <form>
                        <div class="form-group">
                            <label for="usuario">Usuario:</label>
                            <input type="text" class="form-control" id="user" aria-describedby="emailHelp" placeholder="Ingrese Usuario">
                               
                        </div>
                        <div class="form-group">
                            <label for="pass">Contraseña</label>
                            <input type="password" class="form-control" id="pass" placeholder="Contraseña">
                        </div>
                        <div class="form-group">
                            <label for="nomb">Nombre</label>
                            <input type="text" class="form-control" id="nomb" placeholder="Nombre">
                        </div>
                        <div class="form-group">
                        <label for="per">Perfil:</label>
                                <select class="form-control" id="per" name="perfil">
                                    <option>Administrador</option>
                                    <option>Supervisor</option>
                                    <option>Usuario</option>
                                    <option>Otro</option>
                                </select>
                        </div>
                        <div class="form-group">
                        <label for="emp">Empresa:</label>
                        <select class="form-control" id="emp" name="empresa">
                        <option>Desinseg</option>
                        <option>Unnomotors</option>
                        <option>Iess</option>
                        <option>Otro</option>
                        </select>
                            </div>
                            <div class="form-check">
                            </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        
                    </form>
          
       </div>
     </div>
   </div>
  
   </div>
 </div>


</div>
';






?>