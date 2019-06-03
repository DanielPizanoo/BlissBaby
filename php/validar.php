<?php
    session_start();
    if(isset($_POST['submit'])) {
        $usuario = $_POST['user'];
        $pass = $_POST['pass'];
    }
        $con = mysqli_connect('localhost','root','','blissbaby') or die("No se ha podido conectar al servidor");

        $sql = mysqli_query($con, "SELECT email, pass FROM empleado WHERE email = '$usuario' and pass = '$pass' ");
        $sql2 = mysqli_query($con, "SELECT email, pass FROM usuario WHERE email = '$usuario' and pass = '$pass' ");

        $row = mysqli_fetch_array($sql);
        $row2 = mysqli_fetch_array($sql2);


        if($row['email']==$usuario && $row['pass']==$pass) {
            $_SESSION['usuario'] = $row['email'];
            header('location: empleado.php');
        } 
        elseif ($row2['email'] == $usuario && $row2['pass'] == $pass) {
            $_SESSION['email'] = $row2['email'];
            header('Location: usuario.php');
        } 
        else {
            header('Location: login.php');

}

?>
