<?php
session_start();
	$conexion = new mysqli("localhost", "root", "", "blissbaby");

    

	if ($conexion) {
		//echo "Conexion exitosa";
        
	}
	else{
		echo "Conexion no exitosa";
	}
?>