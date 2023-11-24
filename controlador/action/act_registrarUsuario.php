
<?php

session_start();

require_once(__DIR__ . "/../../modelo/entidad/Usuario.php");
require_once(__DIR__ . "/../mdb/mdbUsuario.php");

if (isset($_POST['Nombre_completo'], $_POST['Correo'], $_POST['Usuario'], $_POST['rol'], $_POST['contrasena'])) {
    $nombreCompleto = $_POST['Nombre_completo'];
    $correo = $_POST['Correo'];
    $usuario = $_POST['Usuario'];
    $rol = $_POST['rol'];
    $contrasena = $_POST['contrasena'];

    // Crear una instancia de la clase Usuario
    $usuario = new Usuario(null, $nombreCompleto, $correo, $usuario, $rol, $contrasena);

    // Llama a la función para insertar el nuevo usuario en la base de datos
    $resultado = insertarUsuario($usuario);

    if ($resultado) {
        // Redirige al usuario a la página de inicio de sesión con un mensaje de éxito.
        
        header("Location:../../vistas/index.php?msg=Registro exitoso");
    } else {
        // Redirige al usuario a la página de registro con un mensaje de error.
        header("Location: ../../vista/RegistroLogin?msg=Error en el registro");
    }
} else {
    // Si los datos del formulario no se enviaron correctamente, redirige al usuario a la página de registro con un mensaje de error.
    header("Location: ../vista/RegistroLogin.php?msg=Datos de registro incompletos");
}
?>
