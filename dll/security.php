<?php

session_start();
if($_SESSION['authenticated']
    && $_SESSION['id']
    && $_SESSION['name']
    && $_SESSION['username']
    && $_SESSION['role']){

    include($_SERVER['DOCUMENT_ROOT'] . '/podocarpus/dll/connection.php');

} else{
    echo "<script>location.href='../login.php'</script>";
}

?>