<?php

class ModeloSabga {
 public function BarraDeletra($letra) {
//        require '../model/conexionSabga.php';
//        $conex = new conexionSabga();
//        $link = $conex->conectarse();

$link = mysqli_connect("localhost", "root", "", "sabgab");

        if ($rs = mysqli_query($link, "call BarraABC('$letra')")) {
            $posts = array();
            while ($row = mysqli_fetch_assoc($rs)) {
                $posts[] = $row;
            }
            
            mysqli_free_result($rs);
        }
        mysqli_close($link);
        return $posts;
    }

    function DatosUsuario($docu, $cor) {
//        require '../model/conexionSabga.php';
//        $conex = new conexionSabga();
//        $link = $conex->conectarse();
$link = mysqli_connect("localhost", "root", "", "sabgab");
        if ($rs = mysqli_query($link, "call buscarusuario( $docu,'$cor')")) {
            $posts = array();
            while ($row = mysqli_fetch_assoc($rs)) {
                $posts[] = $row;
            }
            mysqli_free_result($rs);
        }
        mysqli_close($link);

        return $posts;
    }

    function ResultadoBusqueda($parame, $V) {
//        require '../model/conexionSabga.php';
//        $conex = new conexionSabga();
//        $link = $conex->conectarse();

$link = mysqli_connect("localhost", "root", "", "sabgab");
        if ($rs = mysqli_query($link, "call buscarMaterial ('" . $parame . "','" . $V . "')")) {
            $postsB = array();
            while ($row = mysqli_fetch_assoc($rs)) {
                $postsB[] = $row;
            }
            mysqli_free_result($rs);
        }

        mysqli_close($link);

        return $postsB;
    }

    function DatosFicha($title) {
//        require '../model/conexionSabga.php';
//        $conex = new conexionSabga();
//        $link = $conex->conectarse();
$link = mysqli_connect("localhost", "root", "", "sabgab");

        if ($rs = mysqli_query($link, "call fichaMaterial('" . $title . "')")) {
            $posts = array();
            while ($row = mysqli_fetch_assoc($rs)) {
                $posts[] = $row;
            }
            mysqli_free_result($rs);
        }
        mysqli_close($link);

        return $posts;
    }

    function Reserva($documento) {

//        $conexi = new conexionSabga();
//        $linkR = $conexi->conectarse();

$linkR = mysqli_connect("localhost", "root", "", "sabgab");

        if ($rese = mysqli_query($linkR, "call tablareserva('" . $documento . "')")) {
            $postsRe = array();
            while ($filas = mysqli_fetch_assoc($rese)) {
                $postsRe[] = $filas;
            }
            mysqli_free_result($rese);
        }
        mysqli_close($linkR);

        return $postsRe;
    }

}
