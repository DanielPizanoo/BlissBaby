<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widh=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA">
    <title>BlissBaby</title>
    <link rel="stylesheet" href="css/inicio.css">
    <link href="https://file.myfontastic.com/t2QshyG9nHANCLZAGGRQTA/icons.css" rel="stylesheet">
</head>

<body>
    <header class="header">
        <div class="contenedor">
            <span class="icon-menu" id="btn-menu"></span>
            <nav class="nav" id="nav">
                <ul class="menu">
                    <li class="menu__item"><a class="menu__link select" href="inicio.php">Inicio</a> </li>
                    <li class="menu__item"><a class="menu__link" href="servicio.php">Servicios</a> </li>
                    <li class="menu__item"><a class="menu__link" href="./php/login.php">Iniciar Sesión</a> </li>
                    <?php
                          if(isset($_SESSION['logeado']) && $_SESSION['logeado']) {
                        ?>
                    <li class="menu__item"><a class="menu__link" href="./php/usuario.php">Logueado</a> </li>
                    <?php
                          }
                        ?>
                </ul>
            </nav>
        </div>
    </header>
    <div class="banner">
        <img src="img/BlissBaby.png" alt="" class="logo">
        <img src="img/nine.jpg" alt="" class="banner__img">
        <div class="contenedor">
            <h2 class="banner__titulo">Niñer@s Bliss Baby</h2>
            <p class="banner__txt">Entrevista a tu Niñera desde la comodidad de tu hogar</p>
        </div>
    </div>
    <main class="main">
        <div class="banner">
            <section class="cursos">
                <!--<h2 class="section__titulo">Niñer@s</h2>-->
                <div class="cursos__columna">
                    <img src="img/azul.jpg" alt="" class="cursos__img">
                    <div class="contenedor">
                        <h3 class="banner2__titulo">Las mejores Niñeras para el cuidado de tu Hij@</h3>
                        <p class="banner2__txt">Porque sabemos que lo mas importante es la tranquilidad de tu familia,
                            trabajamos para garantizarte personal de total Confianza</p>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <footer class="footer">
        <div class="social"></div>
        <p class="copy">&copy; Bliss Baby 2019 - Todos los derechos reservados</p>
    </footer>
    <script src="js/inicio.js"></script>
</body>

</html>
