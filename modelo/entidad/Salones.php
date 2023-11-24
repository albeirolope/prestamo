<?php

class Salones {
    private $idSalon;
    private $nombre;
    private $estado;

    public function __construct($idSalon, $nombre, $estado) {
        $this->idSalon = $idSalon;
        $this->nombre = $nombre;
        $this->estado = $estado;
    }

    public function getIdSalon() {
        return $this->idSalon;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setIdSalon($idSalon) {
        $this->idSalon = $idSalon;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }


}
?>
