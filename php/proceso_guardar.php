<?php
	include("conexion.php");
    
    $f_nacimiento = $_POST['f_nacimiento'];
        
            
    $sexo = $_POST['sexo'];
    $tarifa = $_POST['tarifa'];
	$foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));

	$query = "INSERT INTO contrato(foto,f_nacimiento,sexo,tarifa) VALUES('$foto','$f_nacimiento','$sexo','$tarifa')";
	$resultado = $conexion->query($query);
    
    /*$sql = "SELECT AVG(YEAR(CURDATE())-YEAR(f_nacimiento) + if(date_format(CURDATE(),'%m-%d') > date_format(f_nacimiento,'%m-%d'), 0,-1 )) as promedio FROM contrato ";
                    $resultado2 = $conexion -> query($sql);

                    if ($row2 = $resultado2->fetch_assoc()) {
                        echo $row2['promedio'];
                    } else {
                        echo "0";
                    }*/
        


	if ($resultado && $resultado2) {
		header("location: mostrar.php");
        //echo "Si se inserto";
	}
	else{
		echo "No se inserto";
	}
?>