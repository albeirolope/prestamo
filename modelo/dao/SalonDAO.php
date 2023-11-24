<?php
require_once(__DIR__ . "/DataSource.php");
require_once(__DIR__ . "/../entidad/Salon.php");

class SalonDAO {

    public function leerSalones() {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM salones");
        $salones = array();
        foreach ($data_table as $row) {
            $salon = new Salon(
                $row["idSalon"],
                $row["nombre"],
                $row["estado"],
                $row["idSector"]
            );
            array_push($salones, $salon);
        }
        return $salones;   
    }

    public function buscarSalonPorId($id) {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM salones WHERE idsalon = :id", array(':id' => $id));
        $salon = null;
        if (count($data_table) == 1) {
            $salon = new Salon(
                $data_table[0]["idsalon"],
                $data_table[0]["nombre"],
                $data_table[0]["estado"],
                $data_table[0]["idsector"]
            );
        }
        return $salon;
    }

    public function insertarSalon(Salon $salon) {
        $data_source = new DataSource();
        $sql = "INSERT INTO salones VALUES (:idsalon, :nombre, :estado, :idsector)";
        
        $resultado = $data_source->ejecutarActualizacion($sql, array(
            ':idsalon' => $salon->getIdSalon(),
            ':nombre' => $salon->getNombre(),
            ':estado' => $salon->getEstado(),
            ':idsector' => $salon->getIdSector()
        ));
        return $resultado;
    }

    public function modificarSalon(Salon $salon) {
        $data_source = new DataSource();
        $sql = "UPDATE salones SET nombre = :nombre, estado = :estado, idsector = :idsector WHERE idsalon = :idsalon";
        
        $resultado = $data_source->ejecutarActualizacion($sql, array(
            ':nombre' => $salon->getNombre(),
            ':estado' => $salon->getEstado(),
            ':idsector' => $salon->getIdSector(),
            ':idsalon' => $salon->getIdSalon()
        ));
        
        return $resultado;
    }

    public function borrarSalon($id) {
        $data_source = new DataSource();
        $resultado = $data_source->ejecutarActualizacion("DELETE FROM salones WHERE idsalon = :id", array(':id' => $id));
        
        return $resultado;
    }
}

?>
