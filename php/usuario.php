<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA">
    <title>BlissBaby</title>
    <link rel="stylesheet" href="../css/inicio.css">
    <link href="../css/solicitudes.css" rel="stylesheet" type="text/css">
    <link href="https://file.myfontastic.com/t2QshyG9nHANCLZAGGRQTA/icons.css" rel="stylesheet">
</head>

<body>
    <header class="header">
        <div class="contenedor">
            <span class="icon-menu" id="btn-menu"></span>
            <nav class="nav" id="nav">
                <ul class="menu">
                    <li class="menu__item"><a class="menu__link" href="../inicio.php">Inicio</a> </li>
                    <li class="menu__item"><a class="menu__link" href="../servicio.php">Servicios</a> </li>
                    <li class="menu__item"><a class="menu__link select" href="../php/usuario.php">Logueado</a> </li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="banner">
        <img src="../img/BlissBaby.png" alt="" class="logo">
        <img src="../img/nine.jpg" alt="" class="banner__img">
    
                <?php
					include("conexion.php");
    
                    function filtrado($datos)
                        {
                            $datos = trim($datos);
                            $datos = stripslashes($datos);
                            $datos = htmlspecialchars($datos);
                            return $datos;
                        }
    
					$query = "SELECT * FROM contrato";
					$resultado= $conexion->query($query);
    
					while ($row = $resultado->fetch_assoc()) {
                        
                        $resultado = mysqli_query($conexion, $query) or die(mysqli_error($conexion));

                    if (mysqli_num_rows($resultado) == 0) {
                        $mensaje = "<h1>No hay registros que coincidan con su escritorio de busqueda.</h1>";
                    }
				?>
        <div class="contenedor">
    <table align="center">
        <thead>
            <td>Imagen</td>
            <td>Nombre</td>
            <td>Edad</td>
            <td>Genero</td>
            <td>Tarifa</td>
            <td>Contratar</td>
        </thead>
        <tbody>

            <?php
            while ($fila = mysqli_fetch_array($resultado)) {
                $query2 = "SELECT * FROM empleado WHERE idempleado=". $fila['idempleado'];
                $persona= $conexion->query($query2);
                $persona = $persona->fetch_assoc();

            ?>
            <tr>
                <td><img src="data: image/jpg;base64,<?php echo base64_encode($fila['foto']); ?>"/></td>
                <td><?php echo filtrado($persona['nombre']); ?></td>
                <td><?php $bday = new DateTime($fila['f_nacimiento']); 
                    $today = new Datetime(date('m.d.y'));
                    $diff = $today->diff($bday);
                    echo filtrado($diff->format('%y')); ?></td>
                <td><?php echo filtrado($fila['sexo']); ?></td>
                <td><?php echo filtrado($fila['tarifa']); ?> </td>     
                <td><span class="icon-contratar" id="btn-contratar"></span></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>
                    
                    
                    <?php
					}
				    ?>
        </div>

    <footer class="footer">
        <div class="social"></div>
        <p class="copy">&copy; Bliss Baby 2019 - Todos los derechos reservados</p>
    </footer>
    <script src="../js/inicio.js"></script>
</body>

</html>
