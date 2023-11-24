<header>
    <div class="contenido">
        <div class="titulo">
            <a href="./index.php"><p>Unimagdalena</p></a>
        </div> 
        
        <div class="redes-sociales">
            <a href="../index.php"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-youtube"></i></a>
        </div>
        <div class="mapa-sitio">
            <a href="#">Mapa del Sitio</a>
        </div>    
        <div class="selector-idioma">
            <a href="#">Idioma
                <i class="material-icons"></i></a>
            
        </div>    
        <div class="icono-perfil">
            <a href="#"><i class="fa-regular fa-user"></i></a>
        </div>
    </div>
    
    <div class="contenido2">
        <div class="logo">
            <div class="escudo">
                <a href="./index.php"><img src="./img/default.png" alt="Logo de la empresa"></a>
            </div>
            <div class="titulo2">
                <a href="./index.php">UNIVERSIDAD DEL
                    MAGDALENA
                </a>
            </div>
        </div>
        <nav>
            <ul class="menu">
                <li><a href="../controlador/action/act_mostrarSalones.php">Salones</a>
                    <ul class="submenu">
                        <li><a href="#">Bloque 2</a></li>
                        <li><a href="#">Bloque 3</a></li>
                        <li><a href="#">Bloque 4</a></li>
                        <li><a href="#">Ciénaga Grande</a></li>
                        <li><a href="#">Mar Caribe</a></li>
                        <li><a href="#">Sierra Nevada</a></li>
                        
                    </ul>
                </li>
                <li><a href="#">Horarios</a></li>
                <li><a href="#">Profesores</a></li>
                
            </ul>
        </nav>
        <div href="#" class="user">
            <ul class="menu">
                <li><?php if (isset($_SESSION['NOMBRE_USUARIO']))
                        echo '<a href="#">' . $_SESSION['NOMBRE_USUARIO'] . '<i class="fa-solid fa-angle-down"></i></a>';
                    ?>
                    <ul class="submenu">
                        <li><a href="./verPerfil.php"><i class="fa-regular fa-user"></i> Perfil</a></li>
                        <li><a href="../controlador/action/act_lagout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i> Cerrar sesión</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</header>