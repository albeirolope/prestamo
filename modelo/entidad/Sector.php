<?php

class Sector {
    private $idSector;
    private $nombreSector;

    public function __construct($idSector, $nombreSector) {
        $this->idSector = $idSector;
        $this->nombreSector = $nombreSector;
    }

    public function getIdSector() {
        return $this->idSector;
    }

    public function setIdSector($idSector) {
        $this->idSector = $idSector;
    }

    public function getNombreSector() {
        return $this->nombreSector;
    }

    public function setNombreSector($nombreSector) {
        $this->nombreSector = $nombreSector;
    }
}
?>
