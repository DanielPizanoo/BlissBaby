<?php
	include("conexion.php");
    
    $f_nacimiento = $_POST['f_nacimiento'];
        
            
    $sexo = $_POST['sexo'];
    $tarifa = $_POST['tarifa'];

	$foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
    
    $idempleado = $_SESSION['id_empleado'];
    //$idempleado = 1;

	$query = "INSERT INTO contrato(foto,f_nacimiento,sexo,tarifa,idempleado) VALUES('$foto','$f_nacimiento','$sexo','$tarifa','$idempleado')";
	$resultado = $conexion->query($query);
        
	if ($resultado) {
		header("location: mostrar.php");
        //echo "Si se inserto";
	}
	else{
		echo "No se inserto   ";
        /*foreach($_SESSION as $key => $value){
            echo '||'.$key.'==>'.$value;
        }*/
	}
?>