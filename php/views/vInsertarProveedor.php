<?php
require_once '../controllers/cProveedor.php';
$newId = $lastId[0] + 1;
?>
<div class="crear-sol-card" style="width: 35%; margin-right: 20px;">
    <div class="card-top">
        <span>Registrar Proveedor</span>
    </div>
    <div class="content-crear-sol">
        <!--         <div class="master-flex-container" style="display: flex"> -->
        <div class="insert-product">
            <input style="width: 100%" type="text" name="id-prov" id="id_prov" placeholder="" value="<?php echo $newId ?>"> <br>
            <input style="width: 100%" type="text" name="nombre-prov" id="nombre-prov" placeholder="Ingrese el nombre del proveedor"><br>

            <input style="width: 100%" type="hidden" name="accion" value="insert-prov">
            <input style="width: 100%; padding: 5px" type="submit" class="reg-prov" value="Registrar Proveedor">
        </div>
        <!--             <div class="table-products">
                <p>Productos registrados</p>
            </div> -->

        <!--         </div> -->
    </div>


</div>

<div class="crear-sol-card" style="width: 65%">
    <div class="card-top" style="background: linear-gradient(90deg, rgba(67, 189, 186, 1) 0%, rgba(84, 119, 214, 1) 100%)">
        <span>Lista de proveedores</span>
    </div>

    <div class="table-sol-info">
        <table class="sol-table">
            <tr>
                <td>ID Proveedor</td>
                <td>Nombre</td>
                <td>+</td>
                <td>-</td>
            </tr>
            <!--PHP Code HERE-->

            <?php
            foreach ($datosProveedor as $dato) {
                echo "<tr>";
                echo "<td id='idprov'>" . $dato['IDPROVEEDOR'] . "</td>";
                echo "<td id='nombreprov'>" . $dato['NOMBREPROVEEDOR'] . "</td>";
                echo "<td class='edit'><img style='width:12px; height:12px; cursor:pointer;' src='Imagenes/edit.png'></td>";
                echo "<td class='delete'><img style='width:12px; height:12px; cursor:pointer;' src='Imagenes/delete.png'></td>";
                echo "</tr>";
            } ?>
        </table>
    </div>


</div>
<script src="js/proveedor.js"></script>