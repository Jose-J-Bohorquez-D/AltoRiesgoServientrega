<?php 

class Conexion_BD
{
	public static function conectar_bd()
	{	
		#$bd=new PDO("mysql:host=localhost;dbname=tempolimpo","root","");
		$bd=new PDO("mysql:host=localhost;dbname=tempolimpo","root","");
		return $bd;
	}
}



 ?>