<?php
  include "head.php";
?>

      <div class="header-reserva">
        <div class="nombre-usu">
          <p><?php session_start(); echo sexo(get_perfil($_SESSION['id_usuario']));?>&nbsp;&nbsp;<?php  echo get_nom_perfil(get_perfil($_SESSION['id_usuario'])); ?> |&nbsp; <a style="color: white;" href="index.php?s=1">Salir</a></p>
        </div>
        <div class="titulo-header text-center">
            <p style="font-size:50px;"><strong>RESERVAS</strong></p>
            <p style="font-size:30px;">¿Qué tengo reservado?</p>
        </div>
      </div>

      <div class="btn-menu text-center">
        <div class="row">
            <div class="col-sm-4">
                <a class="btn-1 active" href="reservas.php">Reservas</a></div>
            <div class="col-sm-4">
                <a class="btn-2" href="recursos.php">Recursos</a></div>
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
      <div class="filtro">
        <form action="reservas.php" method="post">
            <p class="letrafiltro">Búsqueda<div class="tipo">Tipo:</div></p>
            <div class="options2">
              <select name="tiporecurso">
                  <option value="0" selected="selected">--Seleccionar--</option>
                  <option value="1">Sala</option>
                  <option value="2">Dispositivo</option>
              </select>
            </div>
            <p class="letrafiltro"><div class="estado">Usuario: </div></p>
            <div class="options2">
              <?php
                $sqlusu="SELECT * from tbl_usuario";
                $qry_sqlusu=mysqli_query($con,$sqlusu);

               ?>
              <select name="nombre">
                  <option value="0" selected>--Seleccionar--</option>
                  <?php while($row=mysqli_fetch_array($qry_sqlusu)){
                  echo "<option value='".$row['id_usuario']."'>".$row['nombre']."</option>";
                }
                ?>
              </select>
            </div>
            <div class="options2">
            </div>
          <div class="filtra">
              <input type="submit" name="enviar" value="Filtra" style=" float: left; margin-top: -10%; margin-left: 272px; border: 2px black solid; width: 80px; height: 22px; z-index: -1">
          </div>
        </form>

      </div>
      <div class="consultas-recursos">
          <?php
             if(isset($_REQUEST['enviar'])){

            $tiporecurso=$_REQUEST['tiporecurso'];
            if($tiporecurso==0){
              $where="";
            }else{
              $where="tbl_recurso.id_tipus_recurso=$tiporecurso &&";
            }
            $nombre=$_REQUEST['nombre'];
            if($nombre==0){
              $where1="";
            }else{
              $where2="tbl_reserva.id_usuario=$nombre &&";
            }
             $sql="SELECT * FROM tbl_recurso inner join tbl_reserva on tbl_recurso.id_recurso=tbl_reserva.id_recurso where $where1 $where  tbl_recurso.disponible=1";
             //echo $sql;
          }else{
            $sql="SELECT * FROM tbl_recurso inner join tbl_reserva on tbl_recurso.id_recurso=tbl_reserva.id_recurso where disponible=1";
            
          }


            $qry_sql=mysqli_query($con, $sql);
            while($row=mysqli_fetch_array($qry_sql)){
          ?>
            <div class="col-sm-12">

                      <div class="col-sm-4 tbl-imagen-reserva" style="background-color: inherit;">
                        <?php
                          echo '<img height="195px;" style="border: 2px solid #221821;" src="../BBDD/imagenes_recursos/'.$row['Imagen'].'">';

                          ?>
                      </div>
                      <div class="col-sm-8 tbl-txt" style="background-color: #d2d2d2;">
                        <div class="nom-recurso">
                        <?php
                          echo $row['nombre_recurso'];
                        ?>
                        </div>
                        <div class="desc-recurso">
                        <?php
                          echo $row['Descripcion'];
                        ?>
                        </div>
                        <br>
                        <div class="fecha-recurso">
                        <?php
                          echo "<strong>Fecha reserva:</strong> ".$row['f_inici'];
                          echo " | ";
                          echo "<strong>Fecha devolución:</strong> ".$row['f_devol'];
                          echo " --- ";
                          echo "<strong>Hora reserva:</strong> ".$row['h_ini'];
                          echo " | ";
                          echo "<strong>Hora devolución:</strong> ".$row['h_devol'];
                        ?>
                        </div>
                      </div>
                <p class="separacion">_____________________________________________________________________</p>

            </div>
        <?php
          }
        ?>
      </div>
    </div>
    <?php
      //include "footer.php";
    ?>
