<?php
  include "head.php";
  //include "footer.php";
?>

      <div class="header-recurso">
        <div class="nombre-usu">
          <p><?php session_start(); echo sexo(get_perfil($_SESSION['id_usuario']));?>&nbsp;&nbsp;<?php  echo get_nom_perfil(get_perfil($_SESSION['id_usuario'])); ?> |&nbsp; <a style="color: white;" href="index.php?s=1">Salir</a></p>
        </div>
        <div class="titulo-header text-center">
            <p style="font-size:50px;"><strong>RECURSOS</strong></p>
            <p style="font-size:30px;">¿Qué recurso quieres reservar?</p>
        </div>
      </div>

      <div class="btn-menu text-center">
        <div class="row">
            <div class="col-sm-4">
                <a class="btn-1" href="reservas.php">Reservas</a></div>
            <div class="col-sm-4">
                <a class="btn-2 active" href="recursos.php">Recursos</a></div>
            <div class="col-sm-4">
                <a class="btn-3" href="incidencias.php">Incidencias</a></div>
        </div>
      </div>

    <div class="sep">
      <div class="row">
          <div class="col-sm-6 sep-de"></div>
          <div class="col-sm-6 sep-iz"></div>
      </div>
    </div>

    <div class="cuerpo">
<!--       <div class="filtro">
        <form action="script.php" method="post">
            <p class="letrafiltro">Búsqueda<div class="tipo">Tipo:</div></p>
            <div class="options2">
              <select name="programa">
                  <option value="0" selected="selected">--Seleccionar--</option>
                  <option value="1">Sala</option>
                  <option value="2">Dispositivo</option>
              </select>
            </div>
            <p class="letrafiltro"><div class="estado">Estado: </div></p>
            <div class="options2">
              <select name="programa">
                  <option value="Selecionar" selected="selected">--Seleccionar--</option>
                  <option value="Sala">Disponible</option>
                  <option value="Dispositivo">Reservado</option>
                </select>
            </div>
            <div class="options2">
            </div>
          <div class="filtra">
              <input type="submit" name="enviar" value="Filtra" style="margin-left: 272px; border: 2px black solid; width: 80px; height: 25px; z-index: -1">
          </div>
        </form>
      </div> -->

      <div class="consultas-recursos">
        <div class="col-sm-12">
            <?php
             $idusu=$_SESSION['id_usuario'];
             //echo $idusu;
              $sql="SELECT * FROM tbl_recurso";
              //echo $sql;
              $qry_sql=mysqli_query($con, $sql);
              while($row=mysqli_fetch_array($qry_sql)){
                if($row['disponible']==1){
                  ?>
                  <div class="col-sm-4 btn-imagen" style="background-color: inherit;">
                    <div class="transparencia">
                    <p class="txt-img">
                      <?php
                        echo $row['nombre_recurso'];
                      ?>
                    </p>
                  </div>
                  <?php
                  echo '<img height="290px" src="../BBDD/imagenes_recursos/'.$row['Imagen'].'">';
                      $sql1="SELECT * from tbl_reserva inner join tbl_usuario on tbl_reserva.id_usuario=tbl_usuario.id_usuario where id_recurso=".$row['id_recurso']."&& f_devol='0000-00-00' && h_devol='00:00:00'";
                      //echo $sql1;
                      $qry_sql1=mysqli_query($con, $sql1);
                      while($row1=mysqli_fetch_array($qry_sql1)){
                        if($idusu==$row1['id_usuario']){
                          if($row1['incidencia']==1){
                            if($row1['id_tipus_usuario']==1){
                               ?>
                          <div class="boton" style="position: absolute;">
                            <div class="col-sm-6 btn-reserva">
                              <?php echo '<input class="btn btn-info" style="background-color: #D2D2D2; border:none;color:#221821;"  value="Resolver Incidencia" type="button" onclick=\'window.location.href="reservar.proc.php?id='.$row['id_recurso'].'&r=4"\'>';?><!-- enlace a reservar.proc.php pasando una campo "id=1" tmb un debe tener un campo para el numero de registro del recurso-->
                            </div>
                          </div>
                               <?php 
                            }else{
                              ?>
                              <div class="boton" style="position: absolute;">
                            <div class="col-sm-6 btn-reserva">
                              <?php echo '<input class="btn btn-info" style="background-color: #D2D2D2; border:none;color:#221821;" disabled value="Incidencia Creada" type="button" onclick=\'window.location.href="reservar.proc.php?id='.$row['id_recurso'].'&r=3"\'>';?><!-- enlace a reservar.proc.php pasando una campo "id=1" tmb un debe tener un campo para el numero de registro del recurso-->
                            </div>
                          </div>
                            <?php
                            }
                            ?>
                           <?php 
                          }else{
                          ?>
                            <div class="boton" style="position: absolute;">
                            <div class="col-sm-6 btn-reserva">
                              <?php echo '<input class="btn btn-danger" style="background-color: #FF6666; border:none;color:#221821;" value="Incidencia" type="button" onclick=\'window.location.href="formulario.php?id='.$row1['id_recurso'].'&idR='.$row1['id_reserva'].'"\'>';?><!-- enlace a reservar.proc.php pasando una campo "id=1" tmb un debe tener un campo para el numero de registro del recurso-->
                            </div>
                            <div class="col-sm-6 btn-reserva">
                              <?php echo '<input class="btn btn-success" style="background-color: #D2D2D2; border:none;color:#221821;" value="Devolver" type="button" onclick=\'window.location.href="reservar.proc.php?id='.$row['id_recurso'].'&r=2"\'>';?><!-- enlace a reservar.proc.php pasando una campo "id=1" tmb un debe tener un campo para el numero de registro del recurso-->
                            </div>
                          </div>
                     <?php
                   } 
                        }else{
                          if($row1['id_tipus_usuario']==1){
                          if($row1['incidencia']==1){
                             ?>
                            <div class="boton" style="position: absolute;">
                            <div class="col-sm-6 btn-reserva">
                              <?php echo '<input class="btn btn-info" style="background-color: #D2D2D2; border:none;color:#221821;" disabled value="Incidencia Creada" type="button" onclick=\'window.location.href="reservar.proc.php?id='.$row['id_recurso'].'&r=3"\'>';?><!-- enlace a reservar.proc.php pasando una campo "id=1" tmb un debe tener un campo para el numero de registro del recurso-->
                            </div>
                          </div>
                          <?php
                        }else{
                            ?>
                            <div class="boton" style="position: absolute;">
                            <div class="col-sm-6 btn-reserva">
                              <?php echo '<input class="btn btn-info" style="background-color: #D2D2D2; border:none;color:#221821;" disabled value="Ya reservado" type="button" onclick=\'window.location.href="reservar.proc.php?id='.$row['id_recurso'].'&r=3"\'>';?><!-- enlace a reservar.proc.php pasando una campo "id=1" tmb un debe tener un campo para el numero de registro del recurso-->
                            </div>
                          </div>
                          <?php
                          }
                          }else{
                            
                          
                          if($row1['incidencia']==1){
                             ?>
                            <div class="boton" style="position: absolute;">
                            <div class="col-sm-6 btn-reserva">
                              <?php echo '<input class="btn btn-info" style="background-color: #D2D2D2; border:none;color:#221821;"  dissabled value="Resolver Incidencia" type="button" onclick=\'window.location.href="reservar.proc.php?id='.$row['id_recurso'].'&r=4"\'>';?><!-- enlace a reservar.proc.php pasando una campo "id=1" tmb un debe tener un campo para el numero de registro del recurso-->
                            </div>
                          </div>
                          <?php
                        }else{
                            ?>
                            <div class="boton" style="position: absolute;">
                            <div class="col-sm-6 btn-reserva">
                              <?php echo '<input class="btn btn-info" style="background-color: #D2D2D2; border:none;color:#221821;" disabled value="Ya reservado" type="button" onclick=\'window.location.href="reservar.proc.php?id='.$row['id_recurso'].'&r=3"\'>';?><!-- enlace a reservar.proc.php pasando una campo "id=1" tmb un debe tener un campo para el numero de registro del recurso-->
                            </div>
                          </div>
                          <?php
                          }
}
                         
                        }

                      }
                  ?></div><?php
                
                }else{
                  ?>
                  <div class="col-sm-4 btn-imagen" style="background-color: inherit;">
                     <div class="transparencia">
                    <p class="txt-img">
                      <?php
                        echo $row['nombre_recurso'];
                      ?>
                    </p>
                  </div>
                  <?php
                  echo '<img height="290px" src="../BBDD/imagenes_recursos/'.$row['Imagen'].'">';
                      if($row['disponible']==0){
                      ?>
                    <div class="boton" style="position: absolute;">
                      <div class="col-sm-6 btn-reserva">
                        <?php echo '<input class="btn btn-success" style="background-color: #9fdf9f; border:none;color:#221821;" value="Reservar" type="button" onclick=\'window.location.href="reservar.proc.php?id='.$row['id_recurso'].'&r=1"\'>';?><!-- enlace a reservar.proc.php pasando una campo "id=1" tmb un debe tener un campo para el numero de registro del recurso-->
                      </div>
                    </div>
                    <?php
                      }
                  ?>
                </div>
                  <?php
                }
              
              }
            ?>
        </div>
      </div>
    </div>
    <?php
      include "footer.php";
    ?>
