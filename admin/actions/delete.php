<?php
// Add this to protect an admin view
include($_SERVER['DOCUMENT_ROOT'] . '/podocarpus/dll/security.php');
?>

<?php

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
