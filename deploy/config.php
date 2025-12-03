<?php
/**
 * Archivo de configuración seguro para GreenRoots
 * Lee las credenciales desde el archivo .env
 */

function cargarConfig() {
    $config = array();
    
    // Intentar cargar desde archivo .env
    $envFile = __DIR__ . '/.env';
    
    if (file_exists($envFile)) {
        $lines = file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $line) {
            // Ignorar comentarios
            if (strpos(trim($line), '#') === 0) {
                continue;
            }
            
            // Parsear línea
            list($key, $value) = explode('=', $line, 2);
            $config[trim($key)] = trim($value);
        }
    } else {
        // Si no existe .env, usar valores por defecto (localhost)
        $config['DB_HOST'] = 'localhost';
        $config['DB_USER'] = 'root';
        $config['DB_PASS'] = '';
        $config['DB_NAME'] = 'greenroo_roots';
    }
    
    return $config;
}

// Cargar configuración
$config = cargarConfig();

// Definir constantes globales
define('DB_HOST', $config['DB_HOST']);
define('DB_USER', $config['DB_USER']);
define('DB_PASS', $config['DB_PASS']);
define('DB_NAME', $config['DB_NAME']);

?>
