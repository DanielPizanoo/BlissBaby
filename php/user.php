<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA">
    <title>BlissBaby</title>
    <link rel="stylesheet" href="../css/ini.css">
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
                    <li class="menu__item"><a class="menu__link select" href="../php/empleado.php">Logueado</a> </li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="banner">
        <img src="../img/BlissBaby.png" alt="" class="logo">
        <img src="../img/nine.jpg" alt="" class="banner__img">
    </div>
                <?php
					include("conexion.php");
    
					$query = "SELECT * FROM contrato WHERE idempleado=".$_SESSION['id_empleado'];
					$resultado= $conexion->query($query);
    
					while ($row = $resultado->fetch_assoc()) {
                        $query2 = "SELECT * FROM empleado WHERE idempleado=". $row['idempleado'];
                        $persona= $conexion->query($query2);
                        $persona = $persona->fetch_assoc();
				?>
        <div class="contenedor">
            <!--<h2 class="section__titulo">Niñer@s</h2>-->
            <section class="info1">
                <article class="info__columna">
                    <img src="data: image/jpg;base64,<?php echo base64_encode($row['foto']); ?>"/>
                    <!--Datos a extraer nombre de la BD-->
                    <h3 class="info__titulo"><?php 
                        echo $persona['nombre']. ' '. $persona['apellidos'];?></h3>
                    <!--Datos a extraer fechaNac de la BD y convertir a edad-->
                    <p class="info__txt"><?php 
                    $bday = new DateTime($row['f_nacimiento']); 
                    $today = new Datetime(date('m.d.y'));
                    $diff = $today->diff($bday);
                    echo($diff->format('%y años'));
                    //printf("\n");
                    //    echo $diff;
                        ?></p>
                    
                    
                    <p class="info__txt">GENERO:  <?php echo $row['sexo']; ?></p>
                    <p class="info__txt">TARIFA:  <?php echo $row['tarifa']; ?></p>
                    <p class="info__txt">Numero de contacto:  <?php echo $persona['telefono']; ?></p>
                    <p class="info__txt">Correo:  <?php echo $persona['email']; ?></p>
                    <input type="button" value="Regresar" name="regresar" onclick="window.history.back()" />
                <?php
					}
				?>
                </article>
            </section>
        </div>

    <footer class="footer">
        <div class="social"></div>
        <p class="copy">&copy; Bliss Baby 2019 - Todos los derechos reservados</p>
    </footer>
    <script src="../js/inicio.js"></script>
</body>

</html>
