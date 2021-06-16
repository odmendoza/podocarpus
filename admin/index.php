<?php

session_start();
if($_SESSION['authenticated']
    && $_SESSION['id']
    && $_SESSION['name']
    && $_SESSION['username']
    && $_SESSION['role']){

    include($_SERVER['DOCUMENT_ROOT'] . '/podocarpus/config/config.php');
    include($_SERVER['DOCUMENT_ROOT'] . '/podocarpus/dll/class_mysqli_7.php');

    $miconexion = new clase_mysqli7;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);

} else{
    echo "<script>location.href='../login.php'</script>";
}

?>

<?php
include('shared/header.php');
?>



<?php
include('shared/footer.php');
?>