<?php
        session_start();
        require_once (__DIR__. "/../mdb/mdbUsuario.php");

	if(isset($_POST['correo'], $_POST['contrasena'])){

		$errMsg = '';
		//username and password sent from Form
		$correo = $_POST['correo'];
		$contrasena = $_POST['contrasena'];
                
                $usuario = autenticarUsuario($correo, $contrasena);
                echo $correo;
                
		if($usuario != null){ // Puede iniciar sesión
                        $_SESSION['ID_USUARIO'] = $usuario->getIdUsuario();
                        $_SESSION['NOMBRE_USUARIO'] = $usuario->getNombreCompleto(); 
                        $_SESSION['CORREO_USUARIO'] = $usuario->getCorreo();
                        $_SESSION['USUARIO'] = $usuario->getUsuario();
                        $_SESSION['ROL_USUARIO'] = $usuario->getRol();
                        $_SESSION['contrasena'] = $usuario->getContrasena();
                        header('Location: ../../vistas/index.php');
                        echo 'Conectado exitosamente a la Base de Datos';

		}else{ // No puede iniciar sesión
                        $errMsg .= 'Username and Password are not found';
                        header('Location: ../../RegistroLogin.php');
                        echo 'No se ha podido conectar a la Base de Datos';
		}               
	}
?>
