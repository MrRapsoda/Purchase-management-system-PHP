$('#reg-prod').click(function() {
    idproducto = $('#id_producto').val();
    nombre_prod = $('#nombre-prod').val();
    cantidad = $('#cantidad-prod').val();
    unidad_medida = $('#unidad-medida').val();
    valorunit = $('#valorunitario').val();
    nombre_prov = $('#nombre-proveedor').val();

    $.ajax({
        url: 'php/controllers/procesa-datos',
        data: 'accion=insert-prods&id-producto=' + idproducto +
            '&nombre-prod=' + nombre_prod +
            '&cantidad-prod=' + cantidad +
            '&unidad-medida=' + unidad_medida +
            '&valorunitario=' + valorunit,
        type: 'GET',
        success: function(response) {
            alert('Se han insertado los productos correctamente');
        },
        error: function() {
            alert('Ha ocurrido un error al insertar los productos');
        }
    });
});



$(".sol-table").on('click', '.pdelete', function() {
    // get the current row
    var currentRow = $(this).closest("tr");

    var id = currentRow.find("td:eq(0)").html(); // get current row 1st table cell TD value
    alert(id);

    $.ajax({
        url: 'php/controllers/procesa-datos',
        data: 'accion=delete-prod' +
            '&id-prod=' + id,
        type: 'GET',
        success: function(response) {
            alert('Se han eliminado los proveedores correctamente');
        },
        error: function() {
            alert('Ha ocurrido un error al modificar los productos');
        }
    });
});