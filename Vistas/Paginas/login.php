<!-- Sign In Start -->
<div class="container-fluid login-page">
	<div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
		<div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
			<div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
				<div class="d-flex align-items-center justify-content-center mb-3">
					<a href="index.html" class="">
						<h3 class="text-primary">
							<!--<i class="fa fa-hashtag me-2"></i>-->
							ALTO RIESGO
						</h3>
					</a><br>
				</div>
				<h4>Ingresa tus credenciales</h4>
				<div class="form-floating mb-3">
					<form method="post">
					<input name="ingLogUsuEmail" type="email" class="form-control" id="floatingInput" placeholder="nombre@example.com">
					<label for="floatingInput">Correo/Cedula/Telefono</label>
				</div>
				<div class="form-floating mb-4">
					<input name="ingLogUsuPwd" type="password" class="form-control" id="floatingPassword" placeholder="pepitoPerez*">
					<label for="floatingPassword">Contraseña</label>
				</div>
				<button type="submit" class="btn btn-primary py-3 w-100 mb-4">Ingresar</button>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- Sign In End -->

<div class="text-center">
	<?php $login =new Ctlr_Usuarios; $login->ingreso_usuario_Ctlr(); ?>
</div>