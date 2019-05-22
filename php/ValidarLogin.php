<?php

    if(isset($_POST['login'])) {
        $usuario = $_POST['username'];
        $pass = $_POST['password'];
    }
    
    $con = mysqli_connect('localhost','root','','blissbaby') or die("No se ha podido conectar al servidor");
    
    $sql = mysqli_query($con, "SELECT email, pass FROM empleado WHERE nombre = '$nombre' and pass = '$pass' ");
    $sql2 = mysqli_query($con, "SELECT email, pass FROM usuario WHERE email = '$email' and pass = '$pass' ");
    
    $row = mysqli_fetch_array($sql);
    $row2 = mysqli_fetch_array($sql2);
    
    if($row['nombre']== $usuario && $row['pass']== $pass) {
        header('Location: empleado.php');

    } elseif ($row2['email']== $usuario && $row2['pass']== $pass) {
        header('Location: usuario.php');

    } else {
        header('Location: login.php');
        exit();
}