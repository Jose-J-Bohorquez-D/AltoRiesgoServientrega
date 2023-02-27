<?php 

class Mvc_Mod
{
	public static function urls_mod($urlMdl)
	{
		if ($urlMdl == "salir" ||
			$urlMdl == "roles" ||
			$urlMdl == "inicio" ||
			$urlMdl == "bodega" ||			
			$urlMdl == "impManif" ||
			$urlMdl == "permisos" ||
			$urlMdl == "usuarios" ||
			$urlMdl == "reasignacion") {

			$pagina = "Vistas/Paginas/".$urlMdl.".php";

			return $pagina;

		}
	}


}



 ?>