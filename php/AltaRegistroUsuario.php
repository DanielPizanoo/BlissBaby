<?php    
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'blissbaby';
    
    $con = mysqli_connect('localhost', 'root', '', 'blissbaby');
    
    if($con) {
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $estado = $_POST['estado'];
        $municipio = $_POST['municipio'];
        $domicilio = $_POST['domicilio'];
        $cpostal = $_POST['postal'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];   
        
        $sql = "INSERT INTO usuario (idusuario, nombre, apellidos, estado, municipio,"
        . "domicilio, cpostal, telefono, email, pass) VALUES ('','$nombre',"
        . "'$apellidos','$estado','$municipio','$domicilio','$cpostal','$telefono',"
        . "'$email','$pass')";
        
        $resultado = mysqli_query($con, $sql);
        
        if($resultado) {
            header('location: login.php');
        } else {
            header('location: ./inicio.html');
        }
    }


    
