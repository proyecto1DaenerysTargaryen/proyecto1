<?php
  include "head.php";
  include "footer.php";
?>

      <div class="header-reserva">
        <div class="nombre-usu">
          <p>Bienvenido/a &nbsp;&nbsp; Kyrenia Muñoz |&nbsp; <a style="color: white;" href="index.php">Salir<a/></p>
        </div>
        <div class="titulo-header text-center">
            <p style="font-size:50px;"><strong>RESERVAS</strong></p>
            <p style="font-size:30px;">¿Qué tengo reservado?</p>
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
      <div class="col-sm-12" style="border: 2px solid black;">

                <div class="col-sm-4 tbl-imagen" style="background-color: inherit; border: 2px solid blue;">
                </div>

                <div class="col-sm-8 tbl-txt" style="background-color: inherit; border: 2px solid blue;">
                  <p class="txt-img-reserva">
                    <?php
                      echo $row['nombre_recurso'];
                    ?>
                  </p>
                </div>


      </div>
      </div>
    </div>
