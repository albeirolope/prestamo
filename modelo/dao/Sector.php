<?php
require_once(__DIR__ . "/DataSource.php");
require_once(__DIR__ . "/../entidad/Sector.php");

class SectorDAO {
    public function leerSectores() {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM sectores");
        $sectores = array();
        foreach ($data_table as $row) {
            $sector = new Sector(
                $row["idsector"],
                $row["Nombresector"]
            );
            array_push($sectores, $sector);
        }
        return $sectores;
    }

    public function buscarSectorPorId($id) {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM sectores WHERE idsector = :id", array(':id' => $id));
        $sector = null;
        if (count($data_table) == 1) {
            $sector = new Sector(
                $data_table[0]["idsector"],
                $data_table[0]["Nombresector"]
            );
        }
        return $sector;
    }

    public function insertarSector(Sector $sector) {
        $data_source = new DataSource();
        $sql = "INSERT INTO sectores VALUES (:idsector, :Nombresector)";
        
        $resultado = $data_source->ejecutarActualizacion($sql, array(
            ':idsector' => $sector->getIdSector(),
            ':Nombresector' => $sector->getNombreSector()
        ));
        return $resultado;
    }

    public function modificarSector(Sector $sector) {
        $data_source = new DataSource();
        $sql = "UPDATE sectores SET Nombresector = :Nombresector WHERE idsector = :idsector";
        
        $resultado = $data_source->ejecutarActualizacion($sql, array(
            ':Nombresector' => $sector->getNombreSector(),
            ':idsector' => $sector->getIdSector()
        ));
        
        return $resultado;
    }

    public function borrarSector($id) {
        $data_source = new DataSource();
        $resultado = $data_source->ejecutarActualizacion("DELETE FROM sectores WHERE idsector = :id", array(':id' => $id));
        
        return $resultado;
    }
}
?>
