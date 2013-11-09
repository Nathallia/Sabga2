           
 function resultado(){
    $('#contenidoF').load("Controller/PagresultadoController.php");
} 
 function usuario(){
    $('#contenidoF').load("../Controller/PagUsuarioController.php");
}
function ficha(){
    $('#contenidoF').load("Controller/PagFichaMaterialController.php");
    
}
function principal(){
    $('#contenidoF').load("Controller/PagPrincipalController.php");
}



        
        function objetoAjax(){
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
		try {
		   xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		} catch (E) {
			xmlhttp = false;
  		}
	}

	if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
		xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}

//-------------------------------------------------------------------------

 function validarCheckbox(opciones) {
    for (i = 0; checks = opciones[i]; i++) {
        if (checks.checked) {
            return true;
        }
    }
    return false;
}


//_________________________________________________________________________
function buscarM(){ //esta es la funcion que envia los datos de manea asincrona
	//div donde  mostrararemos  los datos de la consulta 
    divResultado = document.getElementById('contenidoF');

    //tomamos el valor enviado del formulario de envio
    campoText = document.formulario.campoText.value;
    campo_chec = document.formulario.campo_chec.value;
    //instanciamos el objetoAjax
    ajax = objetoAjax();

    if (campoText == "")
    {
        alert('Debe ingresar el valor de búsqueda343434');
    }
    else
    if(campo_chec=="")
    {
        
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
       
}

function datosUsuario(){ //esta es la funcion que envia los datos de manea asincrona
	//div donde  mostrararemos  los datos de la consulta 
	divResultado = document.getElementById('contenidoF');

	//tomamos el valor enviado del formulario de envio
	documento=document.formuUsuario.documento.value;
         
	//instanciamos el objetoAjax
	ajax=objetoAjax();
	//usamos el medoto POST
	//archivo que realizará la operacion
	ajax.open("POST", "../Controller/PagUsuarioController.php",true);
	//mostramos una imagen mientras cargamos el resultado de la consulta
	divResultado.innerHTML= '<img src="images/ajax.gif">';
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			//visualizamos el resultado correscpondiente
			divResultado.innerHTML = ajax.responseText
		}
	}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	//enviando los valoress
	ajax.send('documento='+documento);
       
}