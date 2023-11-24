
<?php
session_start();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Sitio</title>
    

    <script src="https://kit.fontawesome.com/a12187352c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/header_footer.css">
    <link rel="stylesheet" href="css/reservarSalon.css">

</head>

<body>
    <?php
        require_once("./Templates/Header.php");
    ?>
    <section>
    <div class="container">
        <h2>Reserva de Salón de Clases</h2>

        <form action="../controlador/action/act_reserva.php" method="post">
            <!-- Etiqueta y campo para el día -->
            <label for="dia">Día:</label>
            <input type="text" id="dia" name="dia" required>
            <br>


            <!-- Etiqueta y campo para el nombre del usuario -->
            <label for="idusuario">idusuario:</label>
            <input type="text" id="idusuario" name="idusuario" required>
            <br>

            <!-- Etiqueta y campo para el ID del horario -->
            <label for="idHorario">idHorario:</label>
            <input type="text" id="idHorario" name="idHorario" required>
            <br>

            <!-- Etiqueta y campo para el ID del salón -->
            <label for="idSalon">ID de Salón:</label>
            <input type="text" id="idSalon" name="idSalon" required>
            <br>

            <!-- Botón de envío del formulario -->
            <input type="submit" value="Reservar Salón">
        </form>
    </div>

    <script src="js/salon.js"></script>
    </section> 

    <?php
    require_once("./Templates/Footer.php")
    ?>
    
<body> 
</html>