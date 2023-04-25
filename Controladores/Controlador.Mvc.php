<?php 

class Mvc_Ctlr
{
	public function llamado_a_la_plantilla_ctlr()
	{
		require_once("Vistas/Plantilla.php");
	}


	public function urls_Ctlr()
	{
		if (!isset($_GET['act'])) 
		{			
			$urls_Ctlr = "inicio" ;
		}
		else
		{
			if (isset($_GET['act'])) 
			{
				if (!empty($_GET['act'])) 
				{
					$urls_Ctlr = $_GET['act'];
				}
			}
		}

		$rta = Mvc_Mod::urls_mod($urls_Ctlr);

		#var_dump($rta);

		include $rta;
	}

	
}



?>