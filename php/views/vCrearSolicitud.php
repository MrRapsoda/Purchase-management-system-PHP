<?php
require_once '../controllers/cProductos.php';
?>
<p>Crear nueva solicitud de compra</p>
<span>Productos: </span>
<select class="proveedor-select" name="proveedor" id="id-proveedor">
    <?php
    foreach ($datos_productos as $dato_prov) {
        echo "<option id=" . $dato_prov['IDPRODUCTO'] . ">" . $dato_prov['NOMBRE'] . "</option>";
    }
    ?>
</select>
<span>Cantidad: </span><input type="text" name="txt-cantidad" id="txt-cantidad">
<button id="bt-agregar-productos">Agregar producto</button>
<hr>
<div class="child-main-content" style="width: 100%; height:auto;">

</div>
<!-- <div class="product-detail-container">
         <div class="product-detail-card">
        <span>Nombre del producto</span>
        <span>Cantidad</span>
        <div class="delete" style="position: absolute; right: 0; transform: rotate(45deg); font-size: 2em; color: red; cursor: pointer;">
            <span>+</span>
        </div>
    </div>
</div> -->

<button id="finalizar" style="position: absolute; bottom: 0;">Finalizar</button>
<script src="js/crear-sol.js"></script>