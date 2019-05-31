<?php
	
	include("conexion.php");

    $id =$_REQUEST['id_empleado'];

	//$f_nacimiento = $_POST['f_nacimiento'];
    $tarifa = $_POST['tarifa'];
	$foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));

	$query = "UPDATE contrato SET foto='$foto',tarifa='$tarifa' WHERE id_empleado = '$id'";
    //f_nacimiento='$f_nacimiento'
	$resultado = $conexion->query($query);

	if ($resultado) {
		header("location: mostrar.php");
        //echo "Si se modifico";
	}
	else{
		echo "No se modifico";
	}
?>