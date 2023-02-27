<?php 

class Mvc_Ctlr
{
	public function llamado_a_la_plantilla_ctlr()
	{
		require_once("Vistas/Plantilla.php");
	}


	public function urls_Ctlr()
	{
		if (isset($_GET['act'])){

			if (!empty($_GET['act'])){

				$contenidoUrlCtlr=$_GET['act'];

				$rta=Mvc_Mod::urls_mod($contenidoUrlCtlr);

				#var_dump($rta);

				include $rta;

			}
		}else{

			require_once("Vistas/Paginas/inicio.php");
			
		}
	}

	
}



?>