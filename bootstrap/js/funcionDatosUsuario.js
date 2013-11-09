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

function datosUsuarioLogin() { //esta es la funcion que envia los datos de manea asincrona
    //div donde  mostrararemos  los datos de la consulta 
    divResultado = document.getElementById('contenidoF');

    //tomamos el valor enviado del formulario de envio
    correo = document.formuUsuario.correo.value;
    documento = document.formuUsuario.documento.value;
    //instanciamos el objetoAjax
    ajax = objetoAjax();
    //usamos el medoto POST
    //archivo que realizará la operacion



    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

  var a = documento.indexOf('.');
    var b = documento.indexOf(',');
    
    if (correo == "" && documento == "")
    {
        alert('Debe ingresar todos los campos');
    }
    else
      
    if (isNaN(documento) || documento.length > 12 || a != -1 || b != -1) {
        alert("El campo documento debe tener sólo números con un maximo de 12.");

    }
    else
    if (documento == "")
    {
        alert('Debe ingresar el documento');
    }

    else
    if (correo == "")
    {
        alert('Debe ingresar el correo electronico');
    }
    else

    if (!expr.test(correo))
    {
        alert("Error: La dirección de correo " + correo + " es incorrecta.");
    }
    else
    {
        ajax.open("POST", "PagUsuarioController.php", true);
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

        var inputs = document.formuUsuario.getElementsByTagName("input");
        for (var i = 0; i < inputs.length; i++) {
            inputs[i].value = "";

        }
    }

}