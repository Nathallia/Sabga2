        <?php
        $link = mysql_connect("localhost", "root", "");
        mysql_select_db("sabgab", $link);

        /* El query valida si el usuario ingresado existe en la base de datos. Se utiliza la funciÃ³n 
          htmlentities para evitar inyecciones SQL. */
        $myusuario = mysql_query(" select correo from tbl_usuario
                                 where correo =  '" . $_POST["correo"] . "'", $link);
        $nmyusuario = mysql_num_rows($myusuario);

        //Si existe el usuario, validamos tambiÃ©n la contraseÃ±a ingresada y el estado del usuario...

        if ($nmyusuario != 0) {
            $sql = "call login('" . $_POST["correo"] . "'," . $_POST["documento"] . ")";
            $myclave = mysql_query($sql, $link);
            $nmyclave = mysql_num_rows($myclave);

            //Si el usuario y clave ingresado son correctos (y el usuario estÃ¡ activo en la BD), creamos la sesiÃ³n del mismo.
            if ($nmyclave != 0) {
                session_start();
                //Guardamos dos variables de sesiÃ³n que nos auxiliarÃ¡ para saber si se estÃ¡ o no "logueado" un usuario
                $_SESSION["autentica"] = "SIP";
                $_SESSION["usuarioactual"] = mysql_result($myclave, 0, 0);
                $_SESSION['documento_usuario']=mysql_result($myclave, 0, 2);
                ////nombre del usuario logueado.
                //Direccionamos a nuestra pÃ¡gina principal del sistema.
                require '../model/ModeloSabga.php';

                $claUs = new ModeloSabga();
                $nuevo = $claUs->DatosUsuario($_SESSION['documento_usuario'], $_SESSION["usuarioactual"]);


                header("Location: ../View/PagUsuario.php");
            } else {
                echo"el usuario mal documento";
            }
        } else {
            echo"no existe";
        }
        mysql_close($link);
      
        ?>




