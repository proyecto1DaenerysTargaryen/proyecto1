<?php
  include "head.php";
?>

		<div class="background-login">

			<div class="col-sm-4"></div>
				<div class="col-sm-4" style="background-color: transparent;">
					<div class="login">
							<form action="login.php" method="get">
								<div class=" form-login login-nom">
									Nombre:
									<input class="form-control" type="text" name="nick"><br>
								</div>
								<div class="form-login login-pss">
									Contraseña:
									<input class="form-control" type="text" name="pss"><br>
								</div><br>
									<input class="btn btn-info btn-login" style="background-color: #221821; border: none;" value="Enviar" type="submit" name="ok">
							</form>
					</div>
				</div>
				<div class="col-sm-4"></div>

	</body>
</html>
