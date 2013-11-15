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

//_________________________________________________________________________
function cancelacion(res,ejem,doc2,Usercorreo){ //esta es la funcion que envia los datos de manea asincrona
	//div donde  mostrararemos  los datos de la consulta 
	divResultado = document.getElementById('contenidoF');

	//tomamos el valor enviado del formulario de envio
	idReserva= res;
        idEjemplar=ejem;
        documento=doc2;
        correoU2=Usercorreo;
        
	//instanciamos el objetoAjax
	ajax=objetoAjax();
	//usamos el medoto POST
	//archivo que realizará la operacion
	ajax.open("POST", "../Controller/ReservaC.php",true);
	//mostramos una imagen mientras cargamos el resultado de la consulta
	divResultado.innerHTML= '<h6>Cargando.....</h6>';
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			//visualizamos el resultado correscpondiente
			divResultado.innerHTML = ajax.responseText
		}
	}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	//enviando los valoress
         ajax.send('Nreserva=' + idReserva + '&Nejemplar=' + idEjemplar + '&Ndoc=' + documento + '&Ncorreo=' + correoU2);
//	ajax.send('Nreserva='+ idReserva +'&Nejemplar='+ idEjemplar);
        
       
}


