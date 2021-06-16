<?php

include($_SERVER['DOCUMENT_ROOT'] . '/podocarpus/config/config.php');
include($_SERVER['DOCUMENT_ROOT'] . '/podocarpus/dll/class_mysqli_7.php');

$miconexion = new clase_mysqli7;
$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);

$id = $_GET["id"];

// Delete specie
$miconexion->consulta("select * from species where id = '$id' ");
$specieList = $miconexion->consulta_lista();

if($specieList[0]){
    $result = $miconexion->consulta("delete from species where id = '$id' ");
    if ($result){
        echo "<script>confirm('Eliminado correctamente');;</script>";
    } else {
        echo "<script>confirm('No se pudo eliminar');</script>";
    }
}

header('Location: ../species.php');

?>
