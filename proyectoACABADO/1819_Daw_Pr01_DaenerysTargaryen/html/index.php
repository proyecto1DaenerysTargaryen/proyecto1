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
		<div class="background-login">
			<div class="col-sm-4" style="background-color: transparent;"></div>
				<div class="col-sm-4" style="background-color: transparent;">
					<div class="login">
							<form name="form1" action="login.php" method="POST" onsubmit="return validarfrom();">
								<div class=" form-login login-nom">
									Nombre:
									<input class="form-control" type="text" id="nick1" name="nick"><br>
									<label id="label" style="display: none"><b>FALTA EL USUARIO</b></label>
								</div>
								<div class="form-login login-pss">
									Contraseña:
									<input class="form-control" type="password" id="pasw" name="pss"><br>
									<label id="label1" style="display: none"><b>FALTA LA CONTRASEÑA</b></label>
								</div><br>
									<input class="btn btn-info btn-login" style="background-color: #221821; border: none;" value="Enviar" type="submit" name="ok">
							</form>
					</div>
				</div>
				<div class="col-sm-4" style="background-color: transparent;"></div>
	</body>
</html>
