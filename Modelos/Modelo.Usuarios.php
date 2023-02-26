<?php 
require_once("Conexion.Modelo.php");

class Mod_Usuarios
{

	static public function ingreso_usuario_Mdl($tabla,$item,$valor)
	{
		$stmt=Conexion_BD::conectar_bd()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
		$stmt->bindParam(":".$item,$valor);
		$stmt->execute();
		return $stmt->fetch();	
	}

}

 ?>