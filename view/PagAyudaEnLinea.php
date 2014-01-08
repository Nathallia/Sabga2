


<div style="padding: 20px; width: 500px; overflow-y: auto; height: 400px;">

    <form method="post" action="login" accept-charset="UTF-8">
        <center><strong> <h4> Ayuda en Línea </h4></strong></center>
        <hr>
        <strong>
            <ul >
                <li ><a href="#acceder" >Acceder</a></li>
                <li><a href="#perfil" >Ver Perfil</a></li>
                <li><a href="#busquedas" >Búsquedas</a></li>
                <li><a href="#busOpcional" >Búsqueda Opcional</a></li>
                <li><a href="#busAlfabetica" >Búsqueda alfabética</a></li>
                <li><a href="#ficha" >Ficha del material</a></li>
                <li><a href="#reserva" >Reserva</a></li>
                <li><a href="#ayuda" >Ayuda en Línea</a></li>
            </ul>
        </strong>
        <br><br>
        <table class="table table-condensed table-hover">
            <thead>

            </thead>
            <tbody>

                <tr>
            <p><strong>USUARIO WEB</strong><br>
                SABGA es una aplicación que puede ser ejecutada por los navegadores: Google Chrome, Mozilla Firefox, Opera y Safari; el único que no la soporta es Internet Explorer desde su versión inicial hasta la 10, ya que en este no funcionan, en su totalidad, las características de  la aplicación.<br>

                Para utilizar la aplicación se oprime el link o vínculo Biblioteca. Se ingresa la URL: http://localhost:8/V3Sabga/Controller/PagPrincipalController.php 
                Se visualiza la página principal de la aplicación. Dispone de herramientas de búsqueda, que le permitirán visualizar al usuario registrado, o no, el material bibliotecario disponible; solo los usuarios registrados pueden reservar material a través de SABGA.
            </p>
            </tr>

            <tr>
                <td>
                    <p>
                    <div id="acceder"><strong>Acceder</strong></div>
                    <br>Un usuario registrado puede iniciar sesión en la aplicación para reservar material, consultar sus reservas o visualizar sus datos. Ver imagen. Acceder. 
                    <br>
                    <img src="../bootstrap/img/manual/acceder.png" class="imgManual" />
                    <br>
                    <br>
                    <p>
                        •	Ingresar el documento de identidad.<br>
                        •	Ingresar el correo electrónico con el cual se registró en la biblioteca de la Institución.<br>
                        •	Hacer clic en el botón Ingresar.<br>

                        <br>
                        Nota: Si el usuario no se encuentra registrado, aparecerá un mensaje informándole que debe registrarse personalmente en la biblioteca de la Institución. Ver imagen. Error acceder.

                        <br>
                        <br>
                        <img src="../bootstrap/img/manual/error_acceso.png" class="imgManual" />
                    </p>


                </td>
            </tr>

            <tr>
                <td>
                    <p>
                    <div id="perfil"><strong>Ver perfil</strong></div>
                    <br>
                    Esta sección muestra dos pestañas que contienen la información sobre las reservas realizadas y la información personal del usuario registrado. Ver imagen. Ficha usuario.<br>
                    </p>

                    <br>
                    <img src="../bootstrap/img/manual/perfil.png" class="imgManual" />
                    <br><br>
                    •	Hacer clic en la pestaña Historial.<br>
                    •	Hacer clic en la pestaña Datos personales.
                    <br>
                </td>
            </tr>


            <tr>
                <td>

                    <div id="busquedas"><strong>Búsquedas</strong></div>
                    <br>
                    <p>
                        La aplicación cuenta con opciones para que el usuario pueda buscar y visualizar la información del material bibliotecario disponible. Ver Imagen. Página principal.
                        <br>


                    </p>
                </td>
            </tr>

            <tr>
                <td>

                    <div id="busOpcional"><strong>Búsqueda Opcional</strong></div>
                    <br>
                    <p>
                        El usuario puede ingresar información sobre el material a buscar, además puede elegir alguna de las opciones de búsqueda. Ver imagen. Búsqueda opcional.
                        <br>
                        <br>
                        <img src="../bootstrap/img/manual/busOpcional.png" class="imgManual" />

                        <br><br>
                        •	Ingresar el dato por el cual se desea realizar la búsqueda.<br>
                        •	Seleccionar una opción de búsqueda.<br>
                        •	Hacer clic en el botón Buscar para obtener resultados.<br>
                        •	La opción de búsqueda por defecto corresponde a Todas las opciones.<br>
                        <br>
                        Nota: si no existe ningún material bibliotecario que corresponda a la búsqueda realizada por el usuario, el sistema lo informará. Ver imagen. Error búsqueda.

                        <br>
                        <br>
                        <img src="../bootstrap/img/manual/errorBusqueda.png" class="imgManual" />

                        <br><br>

                    </p>
                </td>
            </tr>

            <tr>
                <td>

                    <div id="busAlfabetica"><strong>Búsqueda Alfabetica</strong></div>
                    <br>
                    <p>
                        Muestra una barra que contiene las letras del alfabeto, esta se encuentra en la página principal de la aplicación. Ver imagen. Página principal.<br>
                        <br>
                        <img src="../bootstrap/img/manual/busBarra.png" class="imgManual" />
                        <br><br>
                        •	Hacer clic en una letra de la barra. Automáticamente se visualiza una lista con el título del material que inicie con dicha letra.<br>
                        •	Hacer clic en el título para ver la ficha de material.<br>

                    </p>
                </td>
            </tr>

            <tr>
                <td>

                    <div id="ficha"><strong>Ficha del material</strong></div>
                    <br>
                    <p>
                        Contiene la información detallada sobre el material bibliotecario que el usuario elija o haya realizado la búsqueda. Ver imagen. Ficha material.<br>
                        <br>
                        <img src="../bootstrap/img/manual/ficha.png" class="imgManual" />
                        <br><br>
                        •	Hacer clic en el título del material.<br>
                    </p>
                </td>
            </tr>

            <tr>
                <td>

                    <div id="reserva"><strong>Reserva</strong></div>
                    <br>
                    <p>
                        Permite que el usuario pueda agregar, visualizar y reservar el material bibliotecario de carácter reservado. Ver imagen. Lista reserva.<br>
                        <br><br>
                        <img src="../bootstrap/img/manual/listaReserva.png" class="imgManual" />
                        <br><br>
                    <hr>
                        Nota: Para iniciar el proceso de reservas en la web el usuario debe realizar una búsqueda previa y hacer clic en el botón Reservar, que se encuentra en la parte inferior de cada resultado. Ver imagen. Búsqueda opcional.
                        <br>
                        •	Hacer clic en el botón Realizar Reservas.<br>
                        •	Hacer clic en el botón Reservas del menú de opciones.<br>
                        •	Hacer clic en el botón Realizar reserva.<br>
                        •	Para cancelar una reserva hacer clic en el icono Eliminar.
                        <br>
                        <br>
                    <hr>
                    Nota: si el usuario aún no ha iniciado sesión, la aplicación indicará que debe acceder al sistema. Ver imagen. Acceder reserva.
                    <br><br>
                    <img src="../bootstrap/img/manual/reservaAcceder.png" class="imgManual" />
                    <br><br>
                    •	Ingresar número de documento de identidad.<br>
                    •	Ingresar correo electrónico con el cual se registró en la biblioteca.<br>
                    •	Hacer clic en el botón Realizar Reservas.
                    <br><br>

                    </p>
                </td>
            </tr>

            <tr>
                <td>

                    <div id="ayuda"><strong>Ayuda en Línea</strong></div>
                    <br>
                    <p>
                        Contiene las instrucciones básicas para facilitar el uso de la aplicación web SABGA. Ver imagen. Ayuda en línea.<br>
                        <br>
                        <img src="../bootstrap/img/manual/ayuda.png" class="imgManual" />
                        <br><br>
                        •	Hacer clic en el botón Ayuda.<br>
                        •	Hacer clic en una de las opciones del índice.<br>

                    </p>
                </td>
            </tr>
            </tbody>
        </table>


    </form>
</div>
