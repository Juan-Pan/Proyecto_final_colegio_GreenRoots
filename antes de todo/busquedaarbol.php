<?php

// Funciones escritas en PHP
require ("funciones.php");

// Conexión a la Base de Datos
$idCone = conexion();	

$tronco = $_POST['tronco'];
$hoja = $_POST['hoja'];
$fruto = $_POST['fruto'];
$origen = $_POST['origen'];
$sitio = $_POST['sitio'];


    //echo $tronco ." ". $hoja . " ". $fruto ." ". $origen ." ". $sitio;


    $consulta_sql = "SELECT arbol.nombre, arbol.link, arbol.id_hoja, arbol.id_tronco, arbol.fruto, arbol.origen, arbol.sitio FROM arbol
    WHERE arbol.id_tronco = '$tronco' AND arbol.id_hoja = '$hoja' AND arbol.fruto = '$fruto'
    AND arbol.origen = '$origen' AND arbol.sitio = '$sitio'";


    $registro = mysqli_query($idCone,$consulta_sql);
    $registros = mysqli_num_rows($registro);

    
    if($registros > 0){

        while($fila = mysqli_fetch_array($registro))																		
        {	
           
            $array = $fila[1];
        }
									
    }else{
        $array = "error";

       

       
    }
    echo $array;

?>
