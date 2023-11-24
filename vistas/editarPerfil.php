<?php
session_start();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Pefil</title> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/'-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a12187352c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/header_footer.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/styleEditarPerfil.css">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    
    <script src="https://kit.fontawesome.com/a12187352c.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    require_once("./Templates/Header.php");
    ?>
    <div class="editar-perfil">
    <h2>Editar Perfil</h2>
    <form action="../controlador/action/act_editarPerfil.php" method="post">
        <div class="form-group">
            <label for="NOMBRE_USUARIO">Nombre Completo:</label>
            <input type="text" class="form-control" name="NOMBRE_USUARIO" value="<?php echo $_SESSION['NOMBRE_USUARIO']; ?>">
        </div>
        <div class="form-group">
            <label for="CORREO_USUARIO">Correo:</label>
            <input type="email" class="form-control" name="CORREO_USUARIO" value="<?php echo $_SESSION['CORREO_USUARIO']; ?>">
        </div>
        <div class="form-group">
            <label for="USUARIO">Nombre de Usuario:</label>
            <input type="text" class="form-control" name="USUARIO" value="<?php echo $_SESSION['USUARIO']; ?>">
        </div>
        <div class="form-group">
            <label for="ROL_USUARIO">Rol:</label>
            <input type="text" class="form-control" name="ROL_USUARIO" value="<?php echo $_SESSION['ROL_USUARIO']; ?>">
        </div>
        <div class="form-group">
            <label for="contrasena">Contraseña:</label>
            <input type="password" class="form-control" name="contrasena" value="<?php echo $_SESSION['contrasena']; ?>">
        </div>
        <input type="hidden" name="idUsuario">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>

    <?php
    require_once("./Templates/Footer.php");
    ?>

<body> 
</html>