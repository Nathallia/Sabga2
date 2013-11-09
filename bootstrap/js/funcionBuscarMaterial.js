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

//-------------------------------------------------------------------------


//_________________________________________________________________________
function buscarMate() { //esta es la funcion que envia los datos 
    //div donde  mostrararemos  los datos de la consulta 
    divResultado = document.getElementById('contenidoF');

    //tomamos el valor enviado del formulario de envio
    campoText = document.formulario.campoText.value;
    campo_chec = document.formulario.campo_chec.value;
    //instanciamos el objetoAjax
    ajax = objetoAjax();


    expr = /^\s+$/;
    if (campoText == "")
    {
        alert('Debe ingresar el valor de búsqueda');
    }
    else
    if (expr.test(campoText)) {
        alert("El valor de busqueda no pude estar vacio");
        return false;
    }
    else
    if (campo_chec == "")
    {
        alert('Seleccione una opcion de busqueda');
    }
    else
    {
        ajax.open("POST", "../Controller/PagresultadoController.php", true);
        //mostramos una imagen mientras cargamos el resultado de la consulta
        divResultado.innerHTML = '<img src="images/ajax.gif">';
        ajax.onreadystatechange = function() {
            if (ajax.readyState == 4) {
                //visualizamos el resultado correscpondiente
                divResultado.innerHTML = ajax.responseText
            }
        }
        ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        //enviando los valoress
        ajax.send('campoText=' + campoText + '&campo_chec=' + campo_chec);
    }

    //usamos el medoto POST
    //archivo que realizará la operacion


}
