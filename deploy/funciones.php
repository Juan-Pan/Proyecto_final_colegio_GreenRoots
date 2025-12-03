<?php

function cargarEnv() {
    $envFile = __DIR__ . '/.env';
    $config = array();
    
    if (file_exists($envFile)) {
        $lines = file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $line) {
            if (strpos(trim($line), '#') === 0) {
                continue;
            }
            
            if (strpos($line, '=') !== false) {
                list($key, $value) = explode('=', $line, 2);
                $config[trim($key)] = trim($value);
            }
        }
    }
    
    return $config;
}

function conexion()
{
	$config = cargarEnv();
	
	$host = isset($config['DB_HOST']) ? $config['DB_HOST'] : 'localhost';
	$usuario = isset($config['DB_USER']) ? $config['DB_USER'] : 'root';
	$clave = isset($config['DB_PASS']) ? $config['DB_PASS'] : '';
	$BaseDeDatos = isset($config['DB_NAME']) ? $config['DB_NAME'] : 'greenroo_roots';
	
	$idCone = mysqli_connect($host, $usuario, $clave, $BaseDeDatos) or die ("Error conectando al servidor $host con el nombre de usuario $usuario");		
	
	if (!$idCone)
	{
		die("Error conectando al servidor: " . mysqli_connect_error());
	}
	return $idCone;
}

?>
