<?php
require_once '../connection/dbconnection.php';
require_once '../controllers/cEmpleado.php';
?>
<div class="user-card">
    <div class="card-top">
        <i id="setting-icon" class="material-icons">
            settings
        </i>
        <div class="profile-photo">
        </div>
    </div>
    <?php foreach ($datos as $dato) { ?>
        <h4><?php echo $dato[0]; ?></h4>
        <h6><?php echo $dato[1]; ?></h6>
        <div class="personal-info">
            <p>Dep: <?php echo $dato[2]; ?></p>
            <p>E-mail: <?php echo $dato[3]; ?></p>
            <p>Telefono: <?php echo $dato[4];
                        } ?></p>
            <div class="bt-cerrar-sesion">
                <a href="php/controllers/cSession.php">
                    <span>Cerrar Sesion</span>
                </a>
            </div>
        </div>
</div>
<div class="inventary-status">
    <div class="card-top">
        <i id="launch-icon" class="material-icons">
            launch
        </i>
        <span>Inventario</span>
    </div>
    <div class="data-container">
        <div class="data-in">
            <span>Entradas</span>
            <h1>00</h1>

        </div>
        <div class="data-out">
            <span>Salidas</span>
            <h1>00</h1>
        </div>
    </div>
</div>
<div class="sc-status">
    <div class="card-top">
        <i id="launch-icon" class="material-icons sc-launch-view">
            launch
        </i>
        <span>Status Solicitudes de Compra</span>

    </div>
    <div class="data-container">
        <div class="data-in">
            <span>Aprobadas</span>
            <h1>00</h1>

        </div>

        <div class="data-mid">
            <span>Procesadas</span>
            <h1>00</h1>

        </div>

        <div class="data-out">
            <span>Sin aprobar</span>
            <h1>00</h1>
        </div>
    </div>
</div>