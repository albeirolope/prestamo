<?php

    require_once(__DIR__."/../../modelo/dao/SalonDAO.php");

    function buscarSalonPorId($idSalon){
        $dao = new SalonDAO();
        $salon = $dao->buscarSalonPorId($idSalon);
        return $salon;
    }
    function leerSalonesIdSector($idSector){
        
        $dao = new SalonDAO();
        $salones = $dao->leerSalonesIdSector($idSector);
        return $salones;
    }

    function leerSalonesAdministrador($id){
        $dao = new SalonDAO();
        $salones = $dao->leerSalonesAdministrador($id);
        return $salones;
    }
    function leerSalones(){
        $dao = new SalonDAO();
        $salones = $dao->leerSalones();
        return $salones;
    }

    function insertarSalon($salon){
        $dao = new SalonDAO();
        $resultado = $dao->insertarSalon($salon);
        return $resultado;
    }

    function modificarSalon($salon){
        $dao = new SalonDAO();
        $resultado = $dao->modificarSalon($salon);
        return $resultado;
    }

    function borrarSalon($idSalon){
        $dao = new SalonDAO();
        $resultado = $dao->borrarSalon($idSalon);
        return $resultado;
    }
?>