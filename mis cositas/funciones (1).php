<?php		
	function conexion()
	{
		$host = "localhost";
		$usuario = "greenroo_usuario";
		$clave = "D=jNQ1-94zrwcd4";
		$BaseDeDatos = "greenroo_roots";
		$idCone = mysqli_connect ($host, $usuario, $clave, $BaseDeDatos) or die ("Error conectando al servidor $host con el nombre de usuario $usuario");		
		
		if (!$idCone)
		{
			die("Error conectando al servidor: " . mysqli_connect_error());
		}
		return $idCone;
	}
		

?>