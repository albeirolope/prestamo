<?php
require_once(__DIR__ . "/DataSource.php");
require_once(__DIR__ . "/../entidad/Profesor.php");

class ProfesorDAO {
    public function leerProfesores() {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM profesores");
        $profesores = array();
        foreach ($data_table as $row) {
            $profesor = new Profesor(
                $row["idprofesor"],
                $row["nombre"]
            );
            array_push($profesores, $profesor);
        }
        return $profesores;
    }

    public function buscarProfesorPorId($id) {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM profesores WHERE idprofesor = :id", array(':id' => $id));
        $profesor = null;
        if (count($data_table) == 1) {
            $profesor = new Profesor(
                $data_table[0]["idprofesor"],
                $data_table[0]["nombre"]
            );
        }
        return $profesor;
    }

    public function insertarProfesor(Profesor $profesor) {
        $data_source = new DataSource();
        $sql = "INSERT INTO profesores VALUES (:idprofesor, :nombre)";
        
        $resultado = $data_source->ejecutarActualizacion($sql, array(
            ':idprofesor' => $profesor->getIdProfesor(),
            ':nombre' => $profesor->getNombre()
        ));
        return $resultado;
    }

    public function modificarProfesor(Profesor $profesor) {
        $data_source = new DataSource();
        $sql = "UPDATE profesores SET nombre = :nombre WHERE idprofesor = :idprofesor";
        
        $resultado = $data_source->ejecutarActualizacion($sql, array(
            ':nombre' => $profesor->getNombre(),
            ':idprofesor' => $profesor->getIdProfesor()
        ));
        
        return $resultado;
    }

    public function borrarProfesor($id) {
        $data_source = new DataSource();
        $resultado = $data_source->ejecutarActualizacion("DELETE FROM profesores WHERE idprofesor = :id", array(':id' => $id));
        
        return $resultado;
    }
}
?>
