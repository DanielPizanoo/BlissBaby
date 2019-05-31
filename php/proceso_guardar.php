<?php
	include("ValidarLogin.php");
    
    $f_nacimiento = $_POST['f_nacimiento'];
    /*function f_nacimiento($fecha){
    $fecha = str_replace("/","-",$fecha);
    $fecha = date('Y/m/d',strtotime($fecha));
    $hoy = date('Y/m/d');
    $edad = $hoy - $fecha;
    return $edad;
    }
    if (isset($_POST[fecha]))
    echo "Tiene ".f_nacimiento($_POST[fecha])." Años";*/
        
            
    $sexo = $_POST['sexo'];
    $tarifa = $_POST['tarifa'];
	$foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));

	$query = "INSERT INTO contrato(foto,f_nacimiento,sexo,tarifa) VALUES('$foto','$f_nacimiento','$sexo','$tarifa')";
	$resultado = $con->query($query);

	if ($resultado) {
		header("location: mostrar.php");
        //echo "Si se inserto";
	}
	else{
		echo "No se inserto";
	}
?>