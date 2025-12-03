<?php
// Incluir configuración segura
require_once 'config.php';

function conexion()
{
	$host = DB_HOST;
	$usuario = DB_USER;
	$clave = DB_PASS;
	$BaseDeDatos = DB_NAME;
	
	$idCone = mysqli_connect($host, $usuario, $clave, $BaseDeDatos) or die ("Error conectando al servidor $host con el nombre de usuario $usuario");		
	
	if (!$idCone)
	{
		die("Error conectando al servidor: " . mysqli_connect_error());
	}
	return $idCone;
}

?>
