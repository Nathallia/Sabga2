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

function datoDetalle(detalle) { //esta es la funcion que envia los datos de manea asincrona
    //div donde  mostrararemos  los datos de la consulta 
    divResultado = document.getElementById('modal-body');

    //tomamos el valor enviado del formulario de envio
    deta = detalle;
    //instanciamos el objetoAjax
    ajax = objetoAjax();
    //usamos el medoto POST
    //archivo que realizará la operacion



        ajax.open("POST", "../Controller/PagDetalleController.php", true);
        //mostramos una imagen mientras cargamos el resultado de la consulta
        divResultado.innerHTML = '<div class="progress progress-striped"><div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"><span class="sr-only">Cargando...</span></div>';
        ajax.onreadystatechange = function() {
            if (ajax.readyState == 4) {
                //visualizamos el resultado correscpondiente
                divResultado.innerHTML = ajax.responseText
            }
        }
        ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        //enviando los valoress
        ajax.send('deta=' + deta);

    }
   