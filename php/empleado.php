<html lang="es" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA">
    <title>BlissBaby</title>
    <link rel="stylesheet" href="../css/inicio.css">
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
            $query2 = "SELECT nombre, apellidos FROM empleado WHERE idempleado=". $_SESSION['id_empleado'];
            $persona= $conexion->query($query2);
            $persona = $persona->fetch_assoc();

            ?>
    <main class="main">
        <div class="form">
            <form class="box" action="proceso_guardar.php" method="POST" enctype="multipart/form-data">
                <span>Subir tu foto:</span>
                <input class="inputbox" type="file" name="foto" value="" required>
                <br>
                <!--Datos a extraer de la BD-->
                <h3 class="info__titulo"><?php echo $persona['nombre'].' '.$persona['apellidos']; ?></h3>
                <!--Datos a GUARDAR en la BD-->
                <label for="fecha_nac">Fecha de nacimiento</label>
                <br>
                <input required type="date" id="fecha_nac" name="f_nacimiento" />
                <br>
                <br>
                <select name="sexo" required>
                    <option>Femenino</option>
                    <option>Masculino</option>
                </select>
                <br>
                <p class="info__txt">TARIFA</p>
                <select name="tarifa" required>
                    <option>$30 la hora por niño</option>
                    <option>$40 la hora por niño</option>
                    <option>$50 la hora por niño</option>
                    <option>$100 el día completo un niño</option>
                    <option>$200 el día completo dos niño</option>
                </select>
                <input type="submit" id="guardar" name="enviar" value="Enviar" />
                <input type="button" value="Regresar" name="regresar" onclick="window.history.back()" />
            </form>
                <?php
            // }
    ?>
        </div>

    </main>

    <footer class="footer">
        <div class="social"></div>
        <p class="copy">&copy; Bliss Baby 2019 - Todos los derechos reservados</p>
    </footer>
    <script src="../js/inicio.js"></script>
</body>

</html>
