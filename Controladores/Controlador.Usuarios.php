<?php 

class Ctlr_Usuarios
{
	public function ingreso_usuario_Ctlr()
	{
		if (isset($_POST['ingLogUsuEmail']) && isset($_POST['ingLogUsuPwd'])) {
			
			$tabla = "usuarios";

			$item = "correo_usu";

			$valor = $_POST['ingLogUsuEmail'];

			$rta = Mod_Usuarios::ingreso_usuario_Mdl($tabla,$item,$valor);

			var_dump($rta);

		}
	}
}

 ?>