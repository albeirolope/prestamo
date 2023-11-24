<?php

class Horario {
    private $idHorario;
    private $idSalon;
    private $idProfesor;
    private $dia;
    private $horaInicio;
    private $horaFin;

    public function __construct($idHorario, $idSalon, $idProfesor, $dia, $horaInicio, $horaFin) {
        $this->idHorario = $idHorario;
        $this->idSalon = $idSalon;
        $this->idProfesor = $idProfesor;
        $this->dia = $dia;
        $this->horaInicio = $horaInicio;
        $this->horaFin = $horaFin;
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

    public function getIdProfesor() {
        return $this->idProfesor;
    }

    public function setIdProfesor($idProfesor) {
        $this->idProfesor = $idProfesor;
    }

    public function getDia() {
        return $this->dia;
    }

    public function setDia($dia) {
        $this->dia = $dia;
    }

    public function getHoraInicio() {
        return $this->horaInicio;
    }

    public function setHoraInicio($horaInicio) {
        $this->horaInicio = $horaInicio;
    }

    public function getHoraFin() {
        return $this->horaFin;
    }

    public function setHoraFin($horaFin) {
        $this->horaFin = $horaFin;
    }
}
?>

