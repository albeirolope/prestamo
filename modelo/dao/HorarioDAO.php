<?php
require_once(__DIR__ . "/DataSource.php");
require_once(__DIR__ . "/../entidad/Horario.php");

class HorarioDAO {
    public function leerHorarios() {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM horarios");
        $horarios = array();
        foreach ($data_table as $row) {
            $horario = new Horario(
                $row["idHorario"],
                $row["idSalon"],
                $row["idProfesor"],
                $row["dia"],
                $row["horaInicio"],
                $row["horaFin"]
            );
            array_push($horarios, $horario);
        }
        return $horarios;
    }

    public function buscarHorarioPorId($id) {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM horarios WHERE idHorario = :id", array(':id' => $id));
        $horario = null;
        if (count($data_table) == 1) {
            $horario = new Horario(
                $data_table[0]["idHorario"],
                $data_table[0]["idSalon"],
                $data_table[0]["idProfesor"],
                $data_table[0]["dia"],
                $data_table[0]["horaInicio"],
                $data_table[0]["horaFin"]
            );
        }
        return $horario;
    }

    public function insertarHorario(Horario $horario) {
        $data_source = new DataSource();
        $sql = "INSERT INTO horarios VALUES (:idHorario, :idSalon, :idProfesor, :dia, :horaInicio, :horaFin)";
        
        $resultado = $data_source->ejecutarActualizacion($sql, array(
            ':idHorario' => $horario->getIdHorario(),
            ':idSalon' => $horario->getIdSalon(),
            ':idProfesor' => $horario->getIdProfesor(),
            ':dia' => $horario->getDia(),
            ':horaInicio' => $horario->getHoraInicio(),
            ':horaFin' => $horario->getHoraFin()
        ));
        return $resultado;
    }

    public function modificarHorario(Horario $horario) {
        $data_source = new DataSource();
        $sql = "UPDATE horarios SET idSalon = :idSalon, idProfesor = :idProfesor, dia = :dia, horaInicio = :horaInicio, horaFin = :horaFin WHERE idHorario = :idHorario";
        
        $resultado = $data_source->ejecutarActualizacion($sql, array(
            ':idSalon' => $horario->getIdSalon(),
            ':idProfesor' => $horario->getIdProfesor(),
            ':dia' => $horario->getDia(),
            ':horaInicio' => $horario->getHoraInicio(),
            ':horaFin' => $horario->getHoraFin(),
            ':idHorario' => $horario->getIdHorario()
        ));
        
        return $resultado;
    }

    public function borrarHorario($id) {
        $data_source = new DataSource();
        $resultado = $data_source->ejecutarActualizacion("DELETE FROM horarios WHERE idHorario = :id", array(':id' => $id));
        
        return $resultado;
    }
}
?>
