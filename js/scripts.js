function consultarDatos(btn) {
    quitarRequired();
    document.getElementById('txtFf').setCustomValidity("");
    if (document.getElementById('form1').reportValidity()) {
        document.getElementById('btnHidden').value = btn.value;
        document.getElementById('form1').submit();
    }
}

function consultarDatos2(btn) {
    quitarRequired();
    if (document.getElementById('form1').reportValidity()) {
        document.getElementById('btnHidden').value = btn.value;
        document.getElementById('form1').submit();
    }
}

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
    agregarRequired();
    //tomar los valores de los input fecha
    var inicio = new Date(document.getElementById('txtFi').value);
    var fin = new Date(document.getElementById('txtFf').value);

    if (inicio < fin) {
        document.getElementById('btnHidden').value = btn.value;
        document.getElementById('form1').submit();
    } else {
        document.getElementById('txtFf').setCustomValidity("La fecha final debe ser posterior a la fecha de inicio.");
    }
    //mostrar mensajes de validacion de inputs
    document.getElementById('form1').reportValidity();
}

window.onload = function() {
    //leer la url de la pagina actual
    var page = window.location.pathname;
    //recorrer cada link de la barra de navegacion
    [...document.getElementsByClassName("nav-link")].forEach(function(link) {
        if ((page.includes("vista"))) {
            link.href = link.href.replace("vista/", "");
        }
    });

}



function quitarRequired() {
    [...document.getElementById("form1").elements].forEach(function(element) {
        if (element.id != "txtId") {
            console.log(element.id);
            element.required = false;
        } else {
            element.required = true;
        }
    });

}

function agregarRequired() {
    [...document.getElementById("form1").elements].forEach(function(element) {
        if (element.id != "txtId") {
            console.log(element.id);
            element.required = true;
        } else {
            element.required = false;
        }
    });
}

function validar() {
    document.getElementById('form1').reportValidity();
}