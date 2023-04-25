<?php 
class Mvc_Mod
{
	public static function urls_mod($urlMdl)
	{
		if ($urlMdl == "salir" ||
			$urlMdl == "login" ||
			$urlMdl == "roles" ||
			$urlMdl == "inicio" ||
			$urlMdl == "bodega" ||			
			$urlMdl == "impManif" ||
			$urlMdl == "registro" ||
			$urlMdl == "nosotros" ||
			$urlMdl == "permisos" ||
			$urlMdl == "servicios" ||
			$urlMdl == "contacto" ||
			$urlMdl == "usuarios" ||
			$urlMdl == "reasignacion") {
			$pagina = "Vistas/Paginas/".$urlMdl.".php";
			return $pagina;
		}
		else{
			$pagina="Vistas/Paginas/404.php" ;
		}
		return $pagina;
	}
} ?>