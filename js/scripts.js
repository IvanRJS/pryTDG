function validarNumeros(e) {
    var keynum = window.event ? window.event.keyCode : e.which;
    //keynum 46 -> delete ,  keynum 8-> backspace
    if ((keynum == 8) || (keynum == 46))
        return true;

    return /[0-9]+/.test(String.fromCharCode(keynum));
}

function validarLetras(e) {
    var keynum = window.event ? window.event.keyCode : e.which;
    //keynum 46 -> delete ,  keynum 8-> backspace
    if ((keynum == 8) || (keynum == 46))
        return false;

    return /[A-Za-z À-ÿ]+/.test(String.fromCharCode(keynum));
}

function validarFechas(btn) {
    //mostrar mensajes de validacion de inputs
    document.getElementById('form1').reportValidity();
    //tomar los valores de los input fecha
    var inicio = new Date(document.getElementById('txtFi').value);
    var fin = new Date(document.getElementById('txtFf').value);

    if (inicio < fin) {
        document.getElementById('btnHidden').value = btn.value;
        document.getElementById('form1').submit();
    } else {
        document.getElementById('txtFf').setCustomValidity("La fecha final debe ser posterior a la fecha de inicio.");
    }
}