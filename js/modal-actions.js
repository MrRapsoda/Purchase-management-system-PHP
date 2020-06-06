$('.close-modal').click(function() {
    $('.modal-container-top').css("display", "none");
    $('.modal-container').empty();
    event.preventDefault();
});

$('.bt-enviar-detalle').click(function() {
    var product_name = $(this).attr('id');
    console.log(product_name);
});