<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>

        <?php
        if (isset($_POST['documento']) && isset($_POST['correo'])) {

            $doc = $_POST['documento'];
            $corr = $_POST['correo'];
//            echo 'documento->'.$doc . '....correo->' . $corr;
        } else {
            echo '';
        }

        require_once '../model/ModeloSabga.php';
        $claUs = new ModeloSabga();
        if(!empty($_SESSION['usuarioactual']))
        {
            $nuevo = $claUs->DatosUsuario($_SESSION["documentoUser"],$_SESSION["correoUser"]);
            $Dreserva = $claUs->Reserva($_SESSION["documentoUser"]);
        }
        else
        {
            $nuevo = $claUs->DatosUsuario($doc,$corr);
            $Dreserva = $claUs->Reserva($doc);
        }
        
        
        if ($Dreserva != null) {
            $mensaje = '';
        } else {
            $mensaje = 'Aun no tiene historial de reservas';
        }
        if ($nuevo != null) {
            @session_start();
            //Guardamos dos variables de sesiÃ³n que nos auxiliarÃ¡ para saber si se estÃ¡ o no "logueado" un usuario
            $_SESSION["autentica"] = "SIP";
            foreach ($nuevo as $d):
                $_SESSION["usuarioactual"] = $d['nombre'];
                $_SESSION["documentoUser"] = $d['documento_usuario'];
                $_SESSION["correoUser"] = $d['correo'];

                if ($d['tipo_usuario'] == 'Estudiante') {
                    $nombreUs = $d['nombre'];
                    $documUs = $d['documento_usuario'];
                    $corr = $d['correo'];
                    $tel = $d['telefono'];
                    $direc = $d['direccion'];
                    $grado = $d['grado'];
                    $curso = $d['curso'];
                    $jor = $d['jornada'];
                    $tipo = $d['tipo_usuario'];
                    $estado = $d['estado_usuario'];
                } else {
                    $nombreUs = $d['nombre'];
                    $documUs = $d['documento_usuario'];
                    $corr = $d['correo'];
                    $tel = $d['telefono'];
                    $direc = $d['direccion'];
                    $grado = 'no';
                    $curso = 'no';
                    $jor = 'no';
                    $tipo = $d['tipo_usuario'];
                    $estado = $d['estado_usuario'];
                }

            endforeach;


            include '../view/PagUsuario.php';
        } else {

            include '../view/paginaError.php';
        }
        ?>
    </body>
</html>
