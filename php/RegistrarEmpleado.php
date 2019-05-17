<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA">
        <title>BlissBaby</title>
        <link rel="stylesheet" href="../css/registrar.css">
        <link href = "https://file.myfontastic.com/t2QshyG9nHANCLZAGGRQTA/icons.css" rel = "stylesheet">
    </head>
    <body>
        <header class="header">
            <div class="contenedor">
                <span class="icon-menu" id="btn-menu"></span>
                <nav class="nav" id="nav">
                    <ul class="menu">
                        <li class="menu__item"><a class="menu__link" href="inicio.html">Inicio</a> </li>
                        <li class="menu__item"><a class="menu__link" href="servicio.html">Servicios</a> </li>
                        <li class="menu__item"><a class="menu__link select" href="./php/login.php">Iniciar Sesión</a> </li>
                    </ul>
                </nav>
            </div>
        </header>
        <div class="banner">
            <img src="../img/BlissBaby.png" alt="" class="logo">
            <img src="../img/nine.jpg" alt="" class="banner__img">
            <div class="contenedor">
                <div class="marg">
                    <form action="AltaRegistroEmpleado.php" method="POST">
                        <div class="box">
                            <label id="nombre">Nombre</label>
                            <input type="text" id="nombre" name="nombre" placeholder="Ingresa nombre" autocomplete="off" required>
                            <br>

                            <label id="apellidos">Apellidos</label>
                            <input type="text" id="apellidos2" name="apellidos" placeholder="Ingresa apellidos" autocomplete="off" required>
                            <br>

                            <label id="estado">Estado</label>
                            <input type="text" id="estado" name="estado" placeholder="Ingresa tu Estado" autocomplete="off" required>
                            <br>

                            <label id="municipio">Municipio</label>
                            <input type="text" id="municipio" name="municipio" placeholder="Ingresa tu Municipio" autocomplete="off" required>
                            <br>

                            <label id="domicilio">Domicilio</label>
                            <input type="text" id="domicilio" name="domicilio" placeholder="Ingresa domicilio" autocomplete="off" required>
                            <br>

                            <label id="postal">Codigo Postal</label>
                            <input type="number" id="postal" name="postal" placeholder="Ingresa Codigo Postal" autocomplete="off" required>
                            <br>

                            <label>Telefono</label>
                            <input type="text" id="telefono" name="telefono" placeholder="Ingresa telefono privado" autocomplete="off" required>
                            <br>

                            <label id="email">Email</label>
                            <input type="text" id="email" name="email" placeholder="Ingresa email" autocomplete="off" required>
                            <br>

                            <label id="pass">Password</label>
                            <input type="password" id="pass" name="pass" placeholder="Ingresa contraseña" autocomplete="off" required>
                            <br>

                            <br>
                            <input type="submit" id="guardar" name="enviar" value="Guardar" />
                            <input type="button" value="Regresar" name="regresar" onclick="window.history.back()"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="social"></div>
            <p class="copy">&copy; Bliss Baby 2019 - Todos los derechos reservados</p>
        </footer>
        <script src="../js/inicio.js"></script>
    </body>
</html>
