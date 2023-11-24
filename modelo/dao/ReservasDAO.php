<?php
require_once(__DIR__ . "/DataSource.php");
require_once(__DIR__ . "/../entidad/Reservas.php");
class ReservasDAO {
    
    public function leerReservas() {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM reservas");
        $reservas = array();
        foreach ($data_table as $row) {
            $reserva = new Reservas(
                $row["idReserva"],
                $row["dia"],
                $row["fechaYHora"],
                $row["idUsuario"], // Cambiado de "usuario" a "idUsuario"
                $row["idHorario"], // Cambiado de "idUsuario" a "idHorario"
                $row["idSalon"]
            );
            array_push($reservas, $reserva);
        }
        return $reservas;
    }

    public function buscarReservaPorId($id) {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM reservas WHERE idReserva = :id", array(':id' => $id));
        $reserva = null;
        if (count($data_table) == 1) {
            $reserva = new Reserva(
                $data_table[0]["idReserva"],
                $data_table[0]["dia"],
                $data_table[0]["fechaYHora"],
                $data_table[0]["idUsuario"], // Cambiado de "usuario" a "idUsuario"
                $data_table[0]["idHorario"], // Cambiado de "idUsuario" a "idHorario"
                $data_table[0]["idSalon"]
            );
        }
        return $reserva;
    }

    public function insertarReserva(Reserva $reserva) {
        $data_source = new DataSource();
        $sql = "INSERT INTO reservas VALUES (:idReserva, :dia, :fechaYHora, :idUsuario, :idHorario, :idSalon)";
        
        $resultado = $data_source->ejecutarActualizacion($sql, array(
            ':idReserva' => $reserva->getIdReserva(),
            ':idSalon' => $reserva->getIdSalon(),
            ':dia' => $reserva->getDia(),
            ':fechaYHora' => $reserva->getFechaYHora(),
            ':idUsuario' => $reserva->getIdUsuario(), // Cambiado de "usuario" a "idUsuario"
            ':idHorario' => $reserva->getIdHorario() // Cambiado de "idUsuario" a "idHorario"
        ));
        return $resultado;
    }

    public function modificarReserva(Reserva $reserva) {
        $data_source = new DataSource();
        $sql = "UPDATE reservas SET idSalon = :idSalon, dia = :dia, fechaYHora = :fechaYHora, idUsuario = :idUsuario, idHorario = :idHorario WHERE idReserva = :idReserva";
        
        $resultado = $data_source->ejecutarActualizacion($sql, array(
            ':idSalon' => $reserva->getIdSalon(),
            ':dia' => $reserva->getDia(),
            ':fechaYHora' => $reserva->getFechaYHora(),
            ':idUsuario' => $reserva->getIdUsuario(), // Cambiado de "usuario" a "idUsuario"
            ':idHorario' => $reserva->getIdHorario(), // Cambiado de "idUsuario" a "idHorario"
            ':idReserva' => $reserva->getIdReserva()
        ));
        
        return $resultado;
    }

    public function borrarReserva($id) {
        $data_source = new DataSource();
        $resultado = $data_source->ejecutarActualizacion("DELETE FROM reservas WHERE idReserva = :id", array(':id' => $id));
        
        return $resultado;
    }
}
?>