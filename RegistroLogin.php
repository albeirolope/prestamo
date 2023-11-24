<?php

session_start();
if(isset($_SESSION ['Usuario'])){
    header("Location = Bienvenida.php");
}

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>

body {
    background-image: url('vistas/img/entrada_principal.jpg'); 
    background-size: cover;
    background-position: center;
    height: 100vh;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
}
.container {
    border-top-left-radius: 10px; /* Radio en la esquina superior izquierda */
    border-top-right-radius: 10px; /* Radio en la esquina superior derecha */
    overflow: hidden;
    background-color: #162673;
    justify-content: center;
    align-items: center;
    width: 360px;
}

.card {
    max-width: 400px;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.card-title {
    color: #fff;
    text-align: center;
    margin-bottom: 20px;
    font-size: 24px;
}
#login-card {
    border: 1px solid #ccc;
    background-color: #fff; /* Fondo blanco para la card-body */
}

#login-card .card-title {
    background-color: #007bff; /* Fondo azul para el título "Iniciar Sesión" */
    color: #fff; /* Texto blanco */
    padding: 10px; /* Espaciado interno para el título */
}

.form-group {
    margin-bottom: 15px;
}

.form-control {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    box-sizing: border-box;
}

.form-check {
    display: flex;
    align-items: center;
}

.form-check-label {
    margin-left: 10px;
}

.btn-primary {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    margin-top: 15px;
}
    </style>

    <title>Login</title>
</head>
<body>
    <div class="container">
        <h2 class="card-title">Iniciar Sesión</h2>
        <div class="card" id="login-card">
            <div class="card-body">
                <p>Debes constar con inscripción en el diccionario activo institucional. Si no la posees
                    debes comunicarte con el grupo TIC'S
                </p>
                <form action="controlador/action/act_login.php" method= "POST" class=formulario__login>
                    <div class="form-group">
                        <input type="text" class="form-control" name="correo" placeholder="Correo Electronico">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="contrasena" placeholder="Contraseña">
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="user-type" value="administrador" id="admin-radio">
                        <label for="admin-radio" class="form-check-label">Administrador</label>
                    
                        <input type="radio" class="form-check-input" name="user-type" value="docente" id="teacher-radio">
                        <label for="teacher-radio" class="form-check-label">Docente</label>
                    
                        <input type="radio" class="form-check-input" name="user-type" value="usuario" id="user-radio">
                        <label for="user-radio" class="form-check-label">Usuario</label>
                    </div>
                    <div class="form-group">
                    <button class="btn-primary">Iniciar Sesión</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

            </div>
    <script src="vistas/js/script_RegitroLogin.js"></script>
</body>
</html>