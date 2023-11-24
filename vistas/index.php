
<?php
session_start();
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Sitio</title>
    <script src="https://kit.fontawesome.com/a12187352c.js" ></script>
    <link rel="stylesheet" href="css/header_footer.css">
    <link rel="stylesheet" href="css/prestamo.css">


</head>
<body>
    <?php
    require_once("./Templates/Header.php");
    ?>
    <div class="container">
            <h1>¡Hacer Reserva!</h1>
            <a href="./reservarSalon.php" class="reserva-btn">Hacer Reserva</a>
        </div>

    
    </section> 

    <?php
    require_once("./Templates/Footer.php");
    ?>
</body>
</html>
