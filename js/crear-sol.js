/* $('#bt-agregar-productos').click(function() {
    var selected_option = $('.proveedor-select option:selected').attr('id');
    $.ajax({
        url: 'php/controllers/procesa-datos.php',
        type: 'GET',
        data: 'accion=crear-sol',
        success: function(response) {
            alertify.success("Solicitud creada correctamente");
        },
        fail: function() {
            alertify.warning("Ocurrio un error");
        }

    });
}); */

$('#bt-agregar-productos').click(function() {
    var nombre = $('.proveedor-select option:selected').val();
    var cantidad = $('#txt-cantidad').val();
    $('.child-main-content').append('<div class="product-detail-container" style="margin-top:20px; margin-bottom:20px;"><div class="product-detail-card"><span style="width:60%">' + nombre + '</span>' + '<span style="width: 10%;">' + cantidad + '</span>' + '<div class="delete" style="position: absolute; right: 0; transform: rotate(45deg); font-size: 2em; color: red; cursor: pointer;"><span>+</span></div></div></div>');

});

$('#finalizar').click(function() {
    $.ajax({
        url: 'php/controllers/procesa-datos.php',
        type: 'GET',
        data: 'accion=crear-sol',
        success: function(response) {
            alert("Solicitud creada correctamente");
            $('.child-main-content').empty();
        },
        fail: function() {
            alertify.warning("Ocurrio un error");
        }

    });
});