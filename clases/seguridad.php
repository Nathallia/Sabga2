<?php
//Reanudamos la sesión
class seguridadUsuario
{
public function seguriUser()
{
session_start();

//Validamos si existe realmente una sesión activa o no
if($_SESSION["usuarioactual"] == null){
//Si no hay sesión activa, lo direccionamos al index.php (inicio de sesión)
header("Location: ../Controller/PagPrincipalController.php");


exit();
}
}
}
?>

