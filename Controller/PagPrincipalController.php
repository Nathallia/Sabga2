<?php


 require_once("../clases/class.php");
 $obj=new Trabajo();


 @session_start();
require '../clases/classLetras.php';
$let = 'A';
if (!(isset($_GET['letra']))) {
    $let = 'A';
} else {
    $obLet = new classLetras();

    $let = $obLet->hallarLetra($_GET['letra']);
}

$loginn = 'vacio';



if (!empty($_SESSION["usuarioactual"])) {
    $loginn = '<li class="dropdown "><a href="#" class="dropdown-toggle " data-toggle="dropdown"><strong>' . $_SESSION["usuarioactual"] . '</strong><b class="caret"></b></a>
                                    <ul class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">

                                    <div class="sesionClose">
                                       <table class="table table-condensed">
                                         <tr>
                                           <td>
                                           <button  class="btn btn-inverse"><a class="salirS " href="../Controller/salirSesion.php" title="Cerrar sesión">cerrar sesion</a></button>
                                           </td>
                                         </tr>
                                         <tr>
                                           <td>
                                        <form method="post" name="formuUsuario" class="login" > 
                                        <button name="login"  type="button" onClick="datosUsuarioLogin()" class="btn btn-inverse" >Ver perfil</button><br><br>
                                       
                                       <input  style="visibility: hidden" value="' . $_SESSION["documentoUser"] . '" id="documento" name="documento"><input style="visibility: hidden" type="text" value="' . $_SESSION["correoUser"] . '"  id="correo" name="correo">
                                       </form>
                                            </td>
                                         </tr>
                                       </table>
                                        </div>
                                    </ul>
                                </li>';
    
   include_once '../view/PagPrincipal.php';
} 
else {

    $loginn = '<li class="dropdown "><a href="#" class="dropdown-toggle " data-toggle="dropdown"> <strong>Acceder </strong><b class="caret"></b></a>
                                    <ul class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">

                                       <div id="loginDiv">
                                       <form method="post" name="formuUsuario" class="login" > 
                                       <input style="margin-bottom: 15px;"   type="text"  placeholder="Ingrese su documento" id="documento" name="documento"><br> 
                                       <input style="margin-bottom: 15px;"   type="text"  placeholder="Ingrese correo electrónico" id="correo" name="correo"><br>
                                       <button name="login"  type="button" onClick="datosUsuarioLogin()" class="btn btn-inverse" >Ingresar</button><br><br>
                                       </form>  </div>

                                    </ul>
                                </li>';

 include_once '../view/PagPrincipal.php';
}

 

//--------------reserva


?>