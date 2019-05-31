<?php
	
	include("conexion.php");

    $id =$_REQUEST['id_empleado'];

	$query = "DELETE FROM contrato WHERE id_empleado = '$id'";
	$resultado = $conexion->query($query);

	if ($resultado) {
		header("location: empleado.php");
        //echo "Si se ELIMINO";
	}
	else{
		echo "No se elimino";
	}
?>