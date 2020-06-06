$('.reg-prov').click(function() {
    idprov = $('#id_prov').val();
    nombre_prov = $('#nombre-prov').val();

    $.ajax({
        url: 'php/controllers/procesa-datos',
        data: 'accion=insert-prov&id-prov=' + idprov +
            '&nombre-prov=' + nombre_prov,
        type: 'GET',
        success: function(response) {
            alert('Se han insertado los proveedores correctamente');
        },
        error: function() {
            alert('Ha ocurrido un error al insertar los productos');
        }
    });
});

/* $('.edit').click(function() {
    idprov = $('#idprov').html();
    alert('Edit clickeado! ' + idprov);
}); */

$(".sol-table").on('click', '.edit', function() {
    // get the current row
    var currentRow = $(this).closest("tr");

    var id = currentRow.find("td:eq(0)").html(); // get current row 1st table cell TD value
    var nombre = currentRow.find("td:eq(1)").html(); // get current row 2nd table cell TD value

    $('.modal-container-top').css('display', 'block');
    $('.modal-container-top').html('<div id="modal-bk-superposition" class="modal-bk-superposition">' +
        '<div class="modal-container" style="width:350px; height: 150px;">' +
        '<span>Editar Nombre</span>' +
        '<input style="width: 100%" type="text" name="name-prov" id="' + id + '" value="' + nombre + '"> <br>' +
        '<input style="width: 100%; padding: 5px; margin-top:5px; margin-bottom:5px; cursor: pointer" type="submit" class="edit-prov" value="Actualizar nombre">' +
        '<div class="close-modal"><span id="close-modal">+</span></div>' +
        '</div>' +
        '</div><script src="js/proveedor.js"></script>');
});

$(".sol-table").on('click', '.delete', function() {
    // get the current row
    var currentRow = $(this).closest("tr");

    var id = currentRow.find("td:eq(0)").html(); // get current row 1st table cell TD value

    $.ajax({
        url: 'php/controllers/procesa-datos',
        data: 'accion=delete-prov' +
            '&id-prov=' + id,
        type: 'GET',
        success: function(response) {
            alert('Se han eliminado los proveedores correctamente');
        },
        error: function() {
            alert('Ha ocurrido un error al modificar los productos');
        }
    });
});

$('.close-modal').click(function() {
    $('.modal-container-top').css('display', 'none');
});

$('.edit-prov').click(function() {
    id = $('input').attr('id');
    nombre = $('input').val();
    $.ajax({
        url: 'php/controllers/procesa-datos',
        data: 'accion=edit-prov' +
            '&id-prov=' + id +
            '&nombre-prov=' + nombre,
        type: 'GET',
        success: function(response) {
            alert('Se han modificado los proveedores correctamente');
        },
        error: function() {
            alert('Ha ocurrido un error al modificar los productos');
        }
    });
});