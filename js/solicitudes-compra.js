$('.bt-agregar-detalle').click(function() {
    createSolicitude();
    getProductosByProv();
});

//Crea una nueva solicitud de compra
function createSolicitude() {
    confirmacion_crear = true;
    $.ajax({
        data: confirmacion_crear,
        url: 'php/controllers/cSolicitudCompra.php',
        type: 'GET',
        success: function(response) {
            console.log(response);
        }
    });
}


//Obtiene el array con los productos
function getProductosByProv() {
    var selected_option = $('.proveedor-select option:selected').val();
    $('.modal-container').empty();
    $.ajax({
        data: "&id=" + selected_option,
        url: 'php/controllers/cProductos.php',
        type: 'GET',
        success: function(response) {
            nombres = strRegexProds(response);
            $('.modal-container-top').css("display", "block");
            $('.modal-container-top').html(modal_data_container);
            for (i = 0; i < nombres.length; i++) {
                $('.modal-container').append(div_products_amount(nombres[i], i));
            }
        },
        error: function(response) {
            alert("Ha ocurrido un error" + response);
        }
    });
}

//Separa el response que da AJAX(getProductosByProv()) para poder presentar solo los nombres en el modal
function strRegexProds(response) {
    corchete_rgx = /]/g;
    final_caracter_rgx = /[({""[})]/g;
    resultado_parcial = response.replace(final_caracter_rgx, "");
    resultado_final = resultado_parcial.replace(corchete_rgx, "");
    nombres_productos = resultado_final.replace(/NOMBRE:/g, "");
    string_data = nombres_productos.split(',');
    return string_data;
}

//Variables con elementos DOM//
//Modela el modal para agregar productos al detalle
var modal_data_container = '<div id="modal-bk-superposition" class="modal-bk-superposition">' +
    '<div class="modal-container">' +
    '<div class="close-modal"><span id="close-modal"></span>+</div> </div>' +
    '<div id="modal-data-container" class="modal-data-container"></div>' +
    '</div>';

//Modela cada div que contiene cada producto
var div_products_amount = function(nombre, id) {
    var div_data = '<div class="div-data-show"><span class="product-name" id="' + nombre + '">' + nombre + '</span>' +
        '<div class="cantidad-productos"><input id="cantidad-productos" type="text"></div>' +
        '<div class="bt-enviar-detalle" id="' + nombre + '" ' + 'value=' + id + '><p>Agregar Detalle</p><span id="plus-one" class="material-icons">plus_one</span></div>' +
        '</div><script src="js/modal-actions.js"></script>';
    return div_data;
};