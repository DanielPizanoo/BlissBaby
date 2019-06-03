<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA">
    <title>BlissBaby</title>
    <link rel="stylesheet" href="../css/login.css">
    <link href="https://file.myfontastic.com/t2QshyG9nHANCLZAGGRQTA/icons.css" rel="stylesheet">
</head>

<body>
    <img src="../img/BlissBaby.png" alt="" class="logo">
    <img src="../img/nine.jpg" alt="" class="banner__img">
    <form action="validar.php" method="POST" class="box">
        <h1>Login</h1>
        <input type="text" name="user" placeholder="Username" autocomplete="off" required>
        <input type="password" name="pass" placeholder="Password" autocomplete="off" required>
        <br>
        <input type="submit" id="submit" name="submit" value="Login">
        <input type="button" value="Regresar" name="regresar" onclick="window.history.back()" />

    </form>
    <footer class="footer">
        <div class="social"></div>
        <p class="copy">&copy; Bliss Baby 2019 - Todos los derechos reservados</p>
    </footer>
    <script src="../js/inicio.js"></script>

</body>

</html>
