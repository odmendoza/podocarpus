<?php

include($_SERVER['DOCUMENT_ROOT'] . '/podocarpus/config/config.php');
include($_SERVER['DOCUMENT_ROOT'] . '/podocarpus/dll/class_mysqli_7.php');

$miconexion = new clase_mysqli7;
$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);

?>