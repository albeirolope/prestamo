<?php
session_start();
require_once (__DIR__.'/../modelo/entidad/Salones.php');
require_once (__DIR__.'/../controlador/mdb/mdbSalon.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Sitio</title>
    

    <script src="https://kit.fontawesome.com/a12187352c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/header_footer.css">
    <link rel="stylesheet" href="css/mostrarSalones.css">

</head>

<body>
    <?php
    require_once("./Templates/Header.php");
?>
<section class="container"><?php
            $aregloSalon = leerSalones();
            foreach ($aregloSalon as $salones => $salon):?><div class="card-container">
                <div class="item-a">
                    <div class="box">
                        <div class="slide-img">
                            <img src="./img/salon.jpeg" alt="" />
                            <div class="overlay">
                                <button type="button" class="buy-btn" onclick="mostrarModal('<?php echo $salon->getNombre()?>')"> Ver salon</button>
                            </div>
                        </div>
                        <div class="detail-box">
                            <div class="type">
                                <a><span><?php
                                    echo $salon->getNombre() ?></span></a>
                            </div>
                            <a class="price"><?php echo $salon->getEstado() ?></a>
                        </div>
                    </div>
                </div>
                <div class="item-a">
                    <div class="box">
                        <div class="slide-img">
                            <img src="./img/salon.jpeg" alt="" />
                            <div class="overlay">
                                <button type="button" class="buy-btn" onclick="mostrarModal('<?php echo $salon->getNombre()?>')"> Ver salon</button>
                            </div>
                        </div>
                        <div class="detail-box">
                            <div class="type">
                                <a><span><?php
                                    echo $salon->getNombre() ?></span></a>
                            </div>
                            <a class="price"><?php echo $salon->getEstado() ?></a>
                        </div>
                    </div>
                </div>
                <div class="item-a">
                    <div class="box">
                        <div class="slide-img">
                            <img src="./img/salon.jpeg" alt="" />
                            <div class="overlay">
                                <button type="button" class="buy-btn" onclick="mostrarModal('<?php echo $salon->getNombre()?>')"> Ver salon</button>
                            </div>
                        </div>
                        <div class="detail-box">
                            <div class="type">
                                <a><span><?php
                                    echo $salon->getNombre() ?></span></a>
                            </div>
                            <a class="price"><?php echo $salon->getEstado() ?></a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach;?>
    </div>
    <!-- Modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="cerrarModal()">&times;</span>
            <div id="modalContent">
                <!-- Contenido del modal se insertará aquí con JavaScript -->
            </div>
        </div>
    </div>

    <script >

function mostrarModal(nombre) {
    var modal = document.getElementById('myModal');
    var modalContent = document.getElementById('modalContent');
    
    // Limpia el contenido anterior del modal
    modalContent.innerHTML = '';

    // Crea elementos para mostrar la información
    var img = document.createElement('img');
    img.src = "./img/salon.jpeg";
    img.class="imagen";
    img.style="width: 50%";
    img.alt = 'Imagen del salón';
    modalContent.appendChild(img);

    var nombreElement = document.createElement('p');
    nombreElement.textContent = 'Nombre: ' + nombre;
    modalContent.appendChild(nombreElement);


    var botonReservar = document.createElement('button');
    botonReservar.textContent = 'Reservar';
    botonReservar.onclick=function() {
    reservar();
    };
    botonReservar.type="button";
   
    modalContent.appendChild(botonReservar);

    // Muestra el modal
    modal.style.display = 'block';
}
function reservar(){
    window.location.href="reservarSalon.php";
}

function cerrarModal() {
    var modal = document.getElementById('myModal');
    modal.style.display = 'none';
}

    </script>
    <style>
     .modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.7);
  }

.modal-content {
    background-color: #fefefe;
    margin: 10% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}


.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

    </style>
    </section><?php
    require_once("./Templates/Footer.php");?>
</body> 
</html>