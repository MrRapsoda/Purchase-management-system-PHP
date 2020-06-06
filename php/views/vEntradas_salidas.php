<?php
require_once '../connection/dbconnection.php';
require_once '../models/mProducto.php';

$producto = new producto();
$all_data = $producto->getAllProductData();
//var_dump($all_data);
?>
<script src="js/productos.js"></script>
<div class="crear-sol-card" style="width: 25%; margin-right: 20px;">
    <div class="card-top">
        <span>Registrar producto</span>
    </div>
    <div class="content-crear-sol">

        <div class="insert-product">
            <input style="width: 100%" type="text" name="id-producto" id="id_producto" placeholder="Ingrese el codigo del producto"> <br>
            <input style="width: 100%" type="text" name="nombre-prod" id="nombre-prod" placeholder="Ingrese el nombre del producto"><br>
            <input style="width: 100%" type="number" name="cantidad-prod" id="cantidad-prod" placeholder="Ingrese la cantidad del producto"><br>
            <input style="width: 100%" type="text" name="unidad-medida" id="unidad-medida" placeholder="Ingrese la unidad de medida"><br>
            <input style="width: 100%" type="number" name="valorunitario" id="valorunitario" placeholder="Ingrese el valor unitario"><br>
            <input style="width: 100%" type="text" name="nombre-proveedor" id="nombre-proveedor" placeholder="Ingrese el nombre del proveedor"><br>
            <input style="width: 100%" type="hidden" name="accion" value="insert-prods">
            <input style="width: 100%; padding: 5px" type="submit" id="reg-prod" value="Registrar Productos">
        </div>

    </div>


</div>
<div class="crear-sol-card" style="width: 75%">
    <div class="card-top" style="background: linear-gradient(90deg, rgba(67, 189, 186, 1) 0%, rgba(84, 119, 214, 1) 100%)">
        <span>Lista de productos</span>
    </div>

    <div class="table-sol-info">
        <table class="sol-table">
            <tr>
                <td>ID Prop</td>
                <td>Nombre</td>
                <td>Cantidad</td>
                <td>Unidad de medida</td>
                <td>Valor unitario</td>
                <td>ID Prov</td>
                <td>+</td>
                <td>-</td>

            </tr>
            <!--PHP Code HERE-->

            <?php
            foreach ($all_data as $dato) {
                echo "<tr>";
                echo "<td>" . $dato['IDPRODUCTO'] . "</td>";
                echo "<td>" . $dato['NOMBREPRODUCTO'] . "</td>";
                echo "<td>" . $dato['CANTIDAD'] . "</td>";
                echo "<td>" . $dato['UNIDADMEDIDA'] . "</td>";
                echo "<td>" . $dato['VALORUNITARIO'] . "</td>";
                echo "<td>" . $dato['IDPROVEEDOR'] . "</td>";
                echo "<td class='pedit'><img style='width:12px; height:12px; cursor:pointer;' src='Imagenes/edit.png'></td>";
                echo "<td class='pdelete' ><img style='width:12px; height:12px; cursor:pointer;' src='Imagenes/delete.png'></td>";
                echo "</tr>";
            } ?>
        </table>
    </div>
    <script src="js/productos.js"></script>

</div>