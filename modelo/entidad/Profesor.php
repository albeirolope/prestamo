<?php

class Profesor {
    private $idProfesor;
    private $nombre;

    public function __construct($idProfesor, $nombre) {
        $this->idProfesor = $idProfesor;
        $this->nombre = $nombre;
    }

    public function getIdProfesor() {
        return $this->idProfesor;
    }

    public function setIdProfesor($idProfesor) {
        $this->idProfesor = $idProfesor;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
}
?>
