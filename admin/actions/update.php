<?php
// Add this to protect an admin view
include($_SERVER['DOCUMENT_ROOT'] . '/podocarpus/dll/security.php');
?>

<?php

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
