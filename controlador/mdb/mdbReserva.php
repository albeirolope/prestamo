<?php

function insertarReserva(Reserva $reserva)
{
    require_once(__DIR__ . "/../../modelo/dao/reservasDAO.php");
    $dao = new ReservasDAO();
    $resultado = $dao->insertarReserva($reserva);
    return $resultado;
}

function leerReservas()
{
    require_once(__DIR__ . "/../../modelo/dao/reservasDAO.php");
    $dao = new ReservasDAO();
    $reservas = $dao->leerReservas();
    return $reservas;
}

function obtenerReservaPorId($idReserva)
{
    require_once(__DIR__ . "/../../modelo/dao/reservasDAO.php");
    $dao = new ReservasDAO();
    $reserva = $dao->obtenerReservaPorId($idReserva);
    return $reserva;
}

function actualizarReserva($reserva)
{
    require_once(__DIR__ . "/../../modelo/dao/reservasDAO.php");
    $dao = new ReservasDAO();
    $resultado = $dao->actualizarReserva($reserva);
    return $resultado;
}

function borrarReserva($idReserva)
{
    require_once(__DIR__ . "/../../modelo/dao/reservasDAO.php");
    $dao = new ReservasDAO();
    $resultado = $dao->borrarReserva($idReserva);
    return $resultado;
}
?>
