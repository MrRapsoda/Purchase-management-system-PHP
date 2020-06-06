<?php
require 'valida-acceso.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/solicitud-compra.css">
    <link rel="stylesheet" href="css/.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/solicitudes-compra.js"></script>
    <script src="js/productos.js"></script>
    <script src="js/crear-sol.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/alertifyjs/alertify.min.js"></script>
    <script src="js/alertifyjs/alertify.js"></script>
<script src="js/alertifyjs/css/alertify.css"></script>
<script src="js/alertifyjs/css/alertify.rtl.css"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Bienvenido | Educando S.A</title>
</head>

<body>

    <div class="wrapper">
        <div class="dashLeft">
            <div id="back-home" class="frmHead">
                Educando S.A
            </div>
            <button class="dropdown-bt">Compras
                <i id="ddicon" class="material-icons">
                    keyboard_arrow_down
                </i>
            </button>
            <div class="dropdown-container">
                <a href="#" id="solicitud-compra">Solicitudes de compra</a>
                <a href="#" id="crear-solicitud">Crear nueva solicitud</a>
            </div>
            <!-- <button class="dropdown-bt">Almacen
                <i id="ddicon" class="material-icons">
                    keyboard_arrow_down
                </i>
            </button>
            <div class="dropdown-container">
                <a href="#">Link 1</a>
            </div> -->
            <button class="dropdown-bt">Inventario
                <i id="ddicon" class="material-icons">
                    keyboard_arrow_down
                </i>
            </button>
            <div class="dropdown-container">
                <a href="#" id="reg-entradas-salidas">Mantenimiento Productos</a>
                <a href="#" id="reg-prov">Mantenimiento Proveedores</a>
            </div>

            <div class="foot">
                <i class="material-icons">
                    copyright
                </i>
                <span>JBlanco</span>
            </div>
        </div>
        <div class="wrapper-content">
            <!--Modal Agregar Productos-->
            <div class="modal-container-top">

            </div>
            
            <div class="head">
                <span id="toggle_button" class="material-icons">
                    menu
                </span>
                <div class="head-bt-log-out">
                    <a href="php/controllers/cSession.php">
                        <span>Cerrar Sesion</span>
                    </a>
                </div>
            </div>

            <div id="main_data_container" class="main-content">

            </div>
        </div>
    </div>
    <script src="js/dashboard.js"></script>
    <!--<script src="js/solicitudes-compra.js"></script>-->
    <script src="js/load-content.js"></script>
    <script src="js/productos.js"></script>
</body>

</html>