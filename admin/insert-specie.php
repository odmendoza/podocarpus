<?php

//include($_SERVER['DOCUMENT_ROOT'].'/podocarpus/core/connection.php');
$miconexion = new clase_mysqli7;
$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);

$name = $_POST["name"];
$scientific_name = $_POST["scientific_name"];
$age = $_POST["age"];
$habitat = $_POST["habitat"];
$description = $_POST["description"];
$image = $_POST["image"];

// Insert specie
$miconexion->consulta("INSERT INTO species(name, scientific_name, age, habitat, description, image) VALUES ('$name','$scientific_name','$age','$habitat','$description','$image')");

header('Location: http://localhost/podocarpus/admin/species.php');

?>
