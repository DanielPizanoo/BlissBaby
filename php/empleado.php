<!DOCTYPE html>
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
                    <li class="menu__item"><a class="menu__link" href="../inicio.html">Inicio</a> </li>
                    <li class="menu__item"><a class="menu__link" href="../servicio.html">Servicios</a> </li>
                    <li class="menu__item"><a class="menu__link select" href="../php/empleado.php">Logueado</a> </li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="banner">
        <img src="../img/BlissBaby.png" alt="" class="logo">
        <img src="../img/nine.jpg" alt="" class="banner__img">
    </div>
    <main class="main">
        <div class="form">
            <form class="box" action="#" method="POST">
                <span>Subir tu foto:</span>
                <input class="inputbox" type="file" name="image_link" value="" size="25" maxlength="250" placeholder="" style="color: rgb(163, 163, 163); border-color: rgb(221, 221, 221);" required>
                <br>
                <!--Datos a extraer de la BD-->
                <h3 class="info__titulo">Elizabeth Sanchez Castellanos</h3>
                <!--Datos a GUARDAR en la BD-->
                <label for="fecha_nac">Fecha de nacimiento</label>
                <br>
                <input required type="date" id="fecha_nac" />
                <br>
                <input type="submit" id="guardar" name="enviar" value="Enviar" />
                <input type="button" value="Regresar" name="regresar" onclick="window.history.back()" />
            </form>

        </div>

    </main>

    <footer class="footer">
        <div class="social"></div>
        <p class="copy">&copy; Bliss Baby 2019 - Todos los derechos reservados</p>
    </footer>
    <script src="../js/inicio.js"></script>
</body>

</html>
