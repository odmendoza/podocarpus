<?php

session_start();
if($_POST['email'] && $_POST['password']){
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    include('../config/config.php');
    include('class_mysqli_7.php');

    $conexion = new clase_mysqli7;
    $conexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $conexion->consulta("SELECT * from users where email = '$email' and password = '$password'");
    $userList = $conexion->consulta_lista();
    if(@$userList[0]){
        $_SESSION['authenticated'] = true;
        $_SESSION['id'] = $userList[0];
        $_SESSION['name'] = $userList[1];
        $_SESSION['username'] = $userList[3];
        $_SESSION['role'] = $userList[5];
        if($_SESSION['role'] == 'admin'){
            echo "<script>location.href='../admin/index.php'</script>";
        }else{
            echo "<script>location.href='../index.php'</script>";
        }
    }else{
        echo '<script>alert("Datos incorrectos")</script>';
        echo "<script>location.href='../login.php'</script>";
    }

} else {
    echo '<script>alert("Ingrese email y contraseña")</script>';
    echo "<script>location.href='../login.php'</script>";
}
?>