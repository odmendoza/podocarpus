<?php

include($_SERVER['DOCUMENT_ROOT'] . '/podocarpus/config/config.php');
include($_SERVER['DOCUMENT_ROOT'] . '/podocarpus/dll/class_mysqli_7.php');

$miconexion = new clase_mysqli7;
$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);

$id = $_POST["id"];
$name = $_POST["name"];
$scientific_name = $_POST["scientific_name"];
$age = $_POST["age"];
$habitat = $_POST["habitat"];
$description = $_POST["description"];
$image = $_POST["image"];

// Update specie
$miconexion->consulta("select * from species where id = '$id' ");
$specieList = $miconexion->consulta_lista();

$sql = "UPDATE species SET name = '$name', scientific_name = '$scientific_name', age = '$age', habitat = '$habitat', description = '$description', image = '$image' WHERE id = '$id'";

if($specieList[0]){
    $result = $miconexion->consulta($sql);

    if ($result){
        $msg = 'Actualizado correctamente';
    } else {
        $msg = 'No se pudo actualizar';
    }
    echo "<script>var r = confirm($msg); if (r) { location.href = '../species.php' }</script>";
    header('Location: ../species.php');
}
?>
