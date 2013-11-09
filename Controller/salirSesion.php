<?php


        session_start();
        unset($_SESSION["usuarioactual"]);

        session_destroy();
//Redireccionamos a index.php (al inicio de sesión)

        header("Location:./PagPrincipalController.php");
       
   
?>/

