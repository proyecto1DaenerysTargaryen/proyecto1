<?php
  include "head.php";
?>

      <div class="header-incidencia">
        <div class="nombre-usu">
          <p><?php session_start(); echo sexo(get_perfil($_SESSION['id_usuario']));?>&nbsp;&nbsp;<?php  echo get_nom_perfil(get_perfil($_SESSION['id_usuario'])); ?> |&nbsp; <a style="color: white;" href="index.php?s=1">Salir</a></p>
        </div>
        <div class="titulo-header text-center">
            <p style="font-size:50px;"><strong>INCIDECIAS</strong></p>
            <p style="font-size:30px;">¿Algo no funciona?</p>
        </div>
      </div>

      <div class="btn-menu text-center">
        <div class="row">
            <div class="col-sm-4">
                <a class="btn-1" href="reservas.php">Reservas</a></div>
            <div class="col-sm-4">
                <a class="btn-2" href="recursos.php">Recursos</a></div>
            <div class="col-sm-4">
                <a class="btn-3 active" href="incidencias.php">Incidencias</a></div>
        </div>
      </div>

    <div class="sep">
      <div class="row">
          <div class="col-sm-6 sep-de"></div>
          <div class="col-sm-6 sep-iz"></div>
      </div>
    </div>

    <div class="cuerpo">
      <!-- <div class="filtro">
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
          </div>
          <div class="options2">
          </div>
          <div class="filtra">
              <input type="submit" name="enviar" value="Filtra" style="margin-left: 272px; border: 2px black solid; width: 80px; height: 25px; z-index: -1">
          </div>
        </form>
      </div> -->
      <div class="consultas-recursos">
          <?php
            $sql="SELECT * FROM tbl_recurso inner join tbl_reserva on tbl_recurso.id_recurso=tbl_reserva.id_recurso inner join tbl_incidencia on tbl_reserva.id_reserva=tbl_incidencia.id_reserva  where incidencia=0";
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
                        <div class="descripcion-incidencia">
                        <?php
                          echo "<strong>INCIDECIAS:</strong> ".$row['descripcion'];
                        ?>
                        </div>
                        <br>

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
