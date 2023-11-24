<?php

class Reserva {
    private $idReserva;
    private $dia;
    private $fechaYHora;
    private $idUsuario; // Cambiado a $idusuario
    private $idHorario; // Nuevo atributo
    private $idSalon;

    public function __construct($idReserva, $dia, $fechaYHora, $idUsuario, $idHorario, $idSalon) {
        $this->idReserva = $idReserva;
        $this->dia = $dia;
        $this->fechaYHora = $fechaYHora;
        $this->idUsuario = $idUsuario;
        $this->idHorario = $idHorario;
        $this->idSalon = $idSalon;
    }

    public function getIdReserva() {
        return $this->idReserva;
    }

    public function setIdReserva($idReserva) {
        $this->idReserva = $idReserva;
    }

    public function getDia() {
        return $this->dia;
    }

    public function setDia($dia) {
        $this->dia = $dia;
    }

    public function getFechaYHora() {
        return $this->fechaYHora;
    }

    public function setFechaYHora($fechaYHora) {
        $this->fechaYHora = $fechaYHora;
    }

    public function getIdUsuario() {
        return $this->idUsuario;
    }

    public function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    public function getIdHorario() {
        return $this->idHorario;
    }

    public function setIdHorario($idHorario) {
        $this->idHorario = $idHorario;
    }

    public function getIdSalon() {
        return $this->idSalon;
    }

    public function setIdSalon($idSalon) {
        $this->idSalon = $idSalon;
    }
}

?>

