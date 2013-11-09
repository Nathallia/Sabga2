function objetoAjax() {
    var xmlhttp = false;
    try {
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
        try {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (E) {
            xmlhttp = false;
        }
    }

    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
        xmlhttp = new XMLHttpRequest();
    }
    return xmlhttp;
}

function enviReserva() { //esta es la funcion que envia los datos de manea asincrona
    //div donde  mostrararemos  los datos de la consulta 
    divResultado = document.getElementById('contenidoF');

    //tomamos el valor enviado del formulario de envio
    correo = document.formuReser.correo.value;
    documento = document.formuReser.documento.value;
    //instanciamos el objetoAjax
    ajax = objetoAjax();
    //usamos el medoto POST
    //archivo que realizará la operacion
    ajax.open("POST", "errorBusqueda.php", true);
    //mostramos una imagen mientras cargamos el resultado de la consulta
    divResultado.innerHTML = '<p>Cargando.....</p>';
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
            //visualizamos el resultado correscpondiente
            divResultado.innerHTML = ajax.responseText
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    //enviando los valoress
    ajax.send('correo=' + correo + '&documento=' + documento);

}


