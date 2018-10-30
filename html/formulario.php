<?php
  include "head.php";
?>
<?php
	if(isset($_REQUEST['s'])){
		if($_REQUEST['s']==1){
			logout();
		}
	}
?>
		<div class="background-incidencias">
			<div class="col-sm-4" style="background-color: transparent;"></div>
				<div class="col-sm-4" style="background-color: transparent;">
					<div class="login">
							<form name="form2" action="reservar.proc.php" method="POST" onsubmit="return validarformulario();">
								<div class=" form-login login-nom">
									<legend>Explica brevemente el problema:</legend>
									<input type="text" id="text" name="text" style="width: 300px; height: 100px; margin-top: -5%; margin-left: 0%;"></br>
									<legend style="margin-top: 2%;" >Tipo de incidencia:</legend>
									<h4 style="float: left; margin-left: 27%; font-size: 18px;">Leve</h4>
									<input style="float: left; margin-top: 4%; margin-left: 1%;" type="radio" name="tipus" value="1">
									<h4 style="float: left;margin-left: 10%; font-size: 18px;">Grave</h4>
									<input style="float: left; margin-top: 4%; margin-left: 1%" type="radio" name="tipus" value="2">
									<input type="hidden" name="r" value="3">
									<label id="label2" style="display: none"><b>El texto esta vacio</b></label>
								</div>
									<input class="btn btn-info btn-login" style="float: left; background-color: #221821; border: none; margin-top: 5%; margin-left: 30%;" value="Crear incidencia" type="submit" name="ok">
							</form>
					</div>
				</div>
				<div class="col-sm-4" style="background-color: transparent;"></div>
	</body>
</html>