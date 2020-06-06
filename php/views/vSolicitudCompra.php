<?php
require_once '../connection/dbconnection.php';
require_once '../controllers/cSolicitudCompra.php';
require_once '../controllers/cProveedor.php';
?>

<p class="breadcrumb-active">Solicitudes de compra</p>
<div class="info-sol-tag">
    <div class="sol-card">
        <div class="card-top">
            <span>Solicitudes de Compra</span>
        </div>
        <div class="table-sol-info">
            <table class="sol-table">
                <tr>
                    <td>Consecutivo</td>
                    <td>Responsable</td>
                    <td>Departamento</td>
                    <td>Fecha</td>
                    <td>STATUS</td>
                    <td>+</td>
                </tr>
                <!--PHP Code HERE-->

                <?php
                foreach ($datosSolicitud as $dato) {
                    echo "<tr>";
                    echo "<td>" . $dato['CONSECUTIVO'] . "</td>";
                    echo "<td>" . $dato['NOMBRE_EMPLEADO'] . "</td>";
                    echo "<td>" . $dato['NOMBRE_DEP'] . "</td>";
                    echo "<td>" . $dato['FECHA'] . "</td>";
                    echo "<td id='estado-solicitud'>" . $dato['SC_ESTADO'] . "</td>";
                    echo "<td></td>";
                    echo "</tr>";
                } ?>
            </table>
        </div>
    </div>

    <!--     <div class="crear-sol-card">
        <div class="card-top">
            <span>Crear solicitud de compra</span>
        </div>
        <div class="content-crear-sol">
            <p>Seleccione un proveedor:</p>
            <select class="proveedor-select" name="proveedor" id="id-proveedor">
                <?php
                foreach ($datosProveedor as $dato_prov) {
                    echo "<option value=" . $dato_prov[0] . ">" . $dato_prov[1] . "</option>";
                }
                ?>
            </select>
            <form action="cSolicitudCompra" method="POST">
                <input type="hidden" name="crear-sol" value="crear-sol">
                <div class="bt-agregar-detalle">
                    Agregar Productos
                </div>
            </form>
            <hr>
            <div id="table-products" class="crear-sol-table-prods">
                <?php

                ?>
            </div>

        </div> -->


</div>
</div>
<script src="js/solicitudes-compra.js"></script>