<?php
    session_start();
    require_once (__DIR__.'/../mdb/mdbSalon.php'); 
    require_once (__DIR__.'/../mdb/mdbSector.php');

    if($_SESSION['ROL_USUARIO'] == "Administrador"){

        
        $_SESSION['SALONES'] = leerSalones();
        header('Location: ../../vistas/mostrarSalones.php');

    }else{
        
        $_SESSION['SALONES'] = leerSalones();
        header('Location: ../../vistas/mostrarSalones.php');
    }

    header('Location: ../../vistas/mostrarSalones.php');
?>