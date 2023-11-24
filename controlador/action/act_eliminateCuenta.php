<?php

    session_start();
    require_once (__DIR__. "/../mdb/mdbUsuario.php");

    $id = $_SESSION['ID_USUARIO'];

    $resultado = borrarUsuario($id);
    session_destroy();
    header('Location: ../../vistas/index.php');
?>
	
    