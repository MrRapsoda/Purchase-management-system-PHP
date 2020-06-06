$(document).ready(function() {
    $(".main-content").load("php/views/dashboard-main.php");
});

$("#back-home").click(function() {
    //console.log('Click');
    $(".main-content").load("php/views/dashboard-main.php");
    document.querySelector('.main-content').style.display = 'flex';
});

$("#solicitud-compra").click(function() {
    $("#solicitud-compra").addClass("active");
    $(".main-content").load("php/views/vSolicitudCompra.php");
    document.querySelector('.main-content').style.display = 'block';
});

$("#reg-entradas-salidas").click(function() {
    $("#reg-entradas-salidas").addClass("active");
    $(".main-content").load("php/views/vEntradas_salidas.php");
    document.querySelector('.main-content').style.display = 'Flex';
});

$("#reg-prov").click(function() {
    $("#reg-prov").addClass("active");
    $(".main-content").load("php/views/vInsertarProveedor.php");
    document.querySelector('.main-content').style.display = 'Flex';
});

$("#crear-solicitud").click(function() {
    $("#reg-entradas-salidas").addClass("active");
    $(".main-content").load("php/views/vCrearSolicitud.php");
    document.querySelector('.main-content').style.display = 'block';
});



/* $(".active").click(function() {
    var item_seleccionado = $(this.id);
    console.log(item_seleccionado);
});

function getId() {
    var id_seleccionado = $(".active").attr("id");
    if (id_seleccionado == null) {
        return "No hay id seleccionado";
    } else {
        return id_seleccionado;
    }
} */