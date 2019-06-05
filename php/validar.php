<?php
    session_start();
    if(isset($_POST['submit'])) {
        $usuario = $_POST['user'];
        $pass = $_POST['pass'];
    }
        $con = mysqli_connect('localhost','root','','blissbaby') or die("No se ha podido conectar al servidor");

        $sql = mysqli_query($con, "SELECT email, pass, idempleado FROM empleado WHERE email = '$usuario' and pass = '$pass' ");
        $sql2 = mysqli_query($con, "SELECT email, pass FROM usuario WHERE email = '$usuario' and pass = '$pass' ");

        if($row['email']==$usuario && $row['pass']==$pass) {
            $_SESSION['usuario'] = $row['email'];
            $_SESSION['id_empleado'] = $row['idempleado'];
            header('location: empleado.php');
        } 
        elseif ($row2['email'] == $usuario && $row2['pass'] == $pass) {
            $_SESSION['email'] = $row2['email'];
            header('location: usuario.php');
        } 
        else {
            header('location: login.php');

}

?>
