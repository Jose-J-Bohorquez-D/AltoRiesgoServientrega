<?php 

class Ctlr_Usuarios
{
	public function ingreso_usuario_Ctlr()
	{
		if (isset($_POST['ingLogUsuEmail']) && isset($_POST['ingLogUsuPwd'])) {
			
			$tabla = "usuarios";//nombre de la tabla en la base de datos

			$item = "correo_usu";//nombre la columna en la tabla de la base de datos

			$valor = $_POST['ingLogUsuEmail']; //valor a buscar en la columna de la base de datos

			$rta = Mod_Usuarios::ingreso_usuario_Mdl($tabla,$item,$valor);

			#var_dump($rta);
			#var_dump($rta["rol_usu"],$rta["estado_usu"]);

			if ($rta==null) {
				echo '<div class="alert alert-danger" role="alert"> Error, Usuario no existe </div>';
			}else{
				if ($rta["correo_usu"] == $_POST['ingLogUsuEmail'] && $rta["pwd_usu"] == $_POST['ingLogUsuPwd']) {
					echo '<div class="alert alert-success" role="alert"> Bienvenido al sistema </div>';
					$_SESSION['usu'] = "ok";
					echo '<script type="text/javascript"> window.location.href = "index.php?act=inicio";</script>';
				}else{
					echo '<div class="alert alert-danger" role="alert"> Error, Usuario o contraseña invalidos </div>';
				}
			}
		}
	}
}

?>