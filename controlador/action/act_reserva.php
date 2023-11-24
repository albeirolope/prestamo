<?php

require_once(__DIR__ . "/../../modelo/entidad/Reservas.php");
require_once(__DIR__ . "/../mdb/mdbReserva.php");

if (
    isset(
        $_POST['dia'],
        $_POST['idusuario'],
        $_POST['idHorario'],
        $_POST['idSalon']
    )
) {
    $dia = $_POST['dia'];
    $idusuario = $_POST['idusuario'];
    $idHorario = $_POST['idHorario'];
    $idSalon = $_POST['idSalon'];
    $fechaYHora =  date('Y-m-d\TH:i');
     //readonly>

    // Crear una instancia de la clase Reserva
    $reserva = new Reserva(null, $dia, $fechaYHora, $idusuario, $idHorario, $idSalon);

    // Llama a la función para insertar la nueva reserva en la base de datos
    $resultado = insertarReserva($reserva);

    if ($resultado) {
        // Redirige al usuario a la página de confirmación con un mensaje de éxito.
        header("Location:../../vistas/reservarSalon.php?msg=Reserva exitosa");
    } else {
        // Redirige al usuario a la página de reserva con un mensaje de error.
        header("Location: ../../vistas/index.php?msg=Error en la reserva");
    }
} else {
    // Si los datos del formulario no se enviaron correctamente, redirige al usuario a la página de reserva con un mensaje de error.
    header("Location: ../../vistas/reservarSalon.php?msg=Datos de reserva incompletos");
}
?>
