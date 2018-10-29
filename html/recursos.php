<?php
  include "head.php";
  include "footer.php";
?>

      <div class="header-recurso">
        <div class="nombre-usu">
          <p>Bienvenido/a &nbsp;&nbsp; Kyrenia Muñoz |&nbsp; <a style="color: white;" href="index.php">Salir<a/></p>
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
      </div>

      <div class="consultas-recursos">
      <div class="col-sm-12">
          <?php
            $sql="SELECT * FROM tbl_recurso";
            //echo $sql;
            $qry_sql=mysqli_query($con, $sql);
            while($row=mysqli_fetch_array($qry_sql)){
          ?>
                <div class="col-sm-4" style="background-color: inherit; border:1px solid black;">
                  <?php
                    echo '<img height="200px" src="../BBDD/imagenes_recursos/'.$row['Imagen'].'">';
                    if($row['disponible']==0){
                    ?>
                  <div class="boton" style="position: absolute;">
                    <!-- <div class="col-sm-6">
                      <button>Incidencia1</button>
                    </div> -->
                    <div class="col-sm-6">
                      <button><?php echo '<a href="reservar.proc.php?id='.$row['id_recurso'].'&r=1">';?>Reservar</a></button><!-- enlace a reservar.proc.php pasando una campo "id=1" tmb un debe tener un campo para el numero de registro del recurso-->
                    </div>
                  </div>
                  <?php
                    }else{
                      ?>
                      <div class="boton" style="position: absolute;">
                        <div class="col-sm-6">
                          <button><?php echo '<a href="reservar.proc.php?id='.$row['id_recurso'].'&r=2">';?>Incidencia</a></button><!--  enlace a reservar.proc.php pasando una campo "id=3" tmb un debe tener un campo para el numero de registro del recurso -->
                        </div>
                        <div class="col-sm-6">
                          <button><?php echo '<a href="reservar.proc.php?id='.$row['id_recurso'].'&r=3">';?>Devolver</a></button><!-- enlace a reservar.proc.php pasando una campo "id=2" tmb un debe tener un campo para el numero de registro del recurso-->
                        </div>
                      </div>
                      <?php
                    }
                  ?>
                </div>
              <?php
            }
          ?>
      </div>
    </div>

    </div>

    <?php
      //include "footer.php";
    ?>
