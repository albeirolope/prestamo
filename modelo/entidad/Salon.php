<?php

class Salon {
    private $idSalon;
    private $nombre;
    private $estado;
    private $idSector;

    public function __construct($idSalon, $nombre, $estado, $idSector) {
        $this->idSalon = $idSalon;
        $this->nombre = $nombre;
        $this->estado = $estado;
        $this->idSector = $idSector;
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

    public function getIdSector() {
        return $this->idSector;
    }
}
?>
