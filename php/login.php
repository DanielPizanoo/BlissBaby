<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA">
        <title>BlissBaby</title>
        <link rel="stylesheet" href="../css/login.css">
        <link href = "https://file.myfontastic.com/t2QshyG9nHANCLZAGGRQTA/icons.css" rel = "stylesheet">
    </head>
    <body>
        <header class="header">
            <div class="contenedor">
                <span class="icon-menu" id="btn-menu"></span>
                <nav class="nav" id="nav">
                    <ul class="menu">
                        <li class="menu__item"><a class="menu__link" href="inicio.php">Inicio</a> </li>
                        <li class="menu__item"><a class="menu__link" href="servicio.php">Servicios</a> </li>
                        <li class="menu__item"><a class="menu__link select" href="./php/login.php">Iniciar Sesión</a> </li>
                    </ul>
                </nav>
            </div>
        </header>
        <div class="banner">
            <img src="../img/BlissBaby.png" alt="" class="logo">
            <img src="../img/nine.jpg" alt="" class="banner__img">
            <div class="contenedor">
                <form class="box" action="ValidarLogin.php" method="post">
                    <h1>Login</h1>
                    <input type="text" name="username" placeholder="Username" autocomplete="off" required>
                    <input type="password" name="password" placeholder="Password" autocomplete="off" required>
                    <br>
                    <input type="submit" name="submit" value="Login">
                    <input type="button" value="Regresar" name="regresar" onclick="window.history.back()"/>
                </form>
            </div>
        </div>
        <footer class="footer">
            <div class="social"></div>
            <p class="copy">&copy; Bliss Baby 2019 - Todos los derechos reservados</p>
        </footer>
        <script src="../js/inicio.js"></script>
    </body>
</html>