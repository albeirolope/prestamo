<?php

require_once(__DIR__."/../../modelo/dao/SectoresDAO.php");

function buscarSectorPorId($idSector){
    $dao = new SectoresDAO();
    $sector = $dao->buscarSectorPorId($idSector);
    return $sector;
}

function leerSectores(){
    $dao = new SectoresDAO();
    $sectores = $dao->leerSectores();
    return $sectores;
}

function insertarSector($sector){
    $dao = new SectoresDAO();
    $resultado = $dao->insertarSector($sector);
    return $resultado;
}

function modificarSector($sector){
    $dao = new SectoresDAO();
    $resultado = $dao->modificarSector($sector);
    return $resultado;
}

function borrarSector($idSector){
    $dao = new SectoresDAO();
    $resultado = $dao->borrarSector($idSector);
    return $resultado;
}
?>
