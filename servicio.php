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
                    <li class="menu__item"><a class="menu__link" href="inicio.php">Inicio</a> </li>
                    <li class="menu__item"><a class="menu__link select" href="servicio.php">Servicios</a> </li>
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
    </div>
    <div class="buscar">
        <div class="contenido">
            <a href="./php/RegistrarEmpleado.php" class="boton">Busco trabajo <span class="center"></span></a>
        </div>
        <div class="contenido2">
            <a href="./php/RegistrarUsuario.php" class="boton">Busco asistente <span class="center"></span></a>
        </div>
    </div>
    <main class="main">
        <div class="contenedor">
            <!--<h2 class="section__titulo">Niñer@s</h2>-->
            <section class="info">
                <article class="info__columna">
                    <img src="img/elizabeth.jpg" alt="" class="info__img">
                    <h3 class="info__ titulo">Elizabeth</h3>
                    <p class="info__txt">44 años</p>
                    <p>$30 la hora por niño</p>
                </article>
                <article class="info__columna">
                    <img src="img/laura.jpg" alt="" class="info__img">
                    <h3 class="info__ titulo">Laura</h3>
                    <p class="info__txt">37 años</p>
                    <p>$30 la hora por niño</p>
                </article>
                <article class="info__columna">
                    <img src="img/vanesa.jpeg" alt="" class="info__img">
                    <h3 class="info__ titulo">Vanesa</h3>
                    <p class="info__txt">25 años</p>
                    <p>$30 la hora por niño</p>
                </article>
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
