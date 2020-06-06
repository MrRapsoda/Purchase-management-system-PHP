$('#bt-login').on('submit', function() {

    if ($('#id-txtUsername').text().length === 0 || $('#id-txtPass').text() === 0) {
        alert('El campo es requerido');
        break;
    } else {
        window.location = "cSignUp.php";
    }
});