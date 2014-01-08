<?php

class cancelar {

    public function cancelar_reserva($idRes, $idEjem) {
        $link = mysqli_connect("localhost", "root", "", "sabgab");

        $mySQlcancelar = "call cancelarreserva($idRes,$idEjem)";
        if (mysqli_query($link, $mySQlcancelar)) {
            echo '';
        } else {
            echo '-->No se calcelo';
        }
        mysqli_close($link);
    }

}

@session_start();

if (isset($_GET['material']) && isset($_GET['doc'])) {

    $a = stripslashes($_GET['material']);

    $mi_array = unserialize($a);

    $documentoUser = $_GET['doc'];

    $fechaR = date("Y-m-d");
    require '../model/conexionSabga.php';
    $conex = new conexionSabga();
    $link = $conex->conectarse();

    $cant = 0;
    foreach ($mi_array AS $clave => $valor):
        $cant = $cant + 1;
    endforeach;

    $mySQlant = "  call cantidadEnDetalle($documentoUser,@total)";
    $total = "select @total;";

    if (mysqli_query($link, $mySQlant)) {

        $cantDeta = 0;
        if ($rs = mysqli_query($link, $total)) {

            while ($row = mysqli_fetch_assoc($rs)) {
//                echo $row['@nat'];
                $cantDeta = $row['@total'];
                if ($cantDeta + $cant <= 3) {

                    $mySQl = "call InsertarReserva($documentoUser,'" . $fechaR . "',1,@nat,@cant)";
                    $mensa = "SELECT @nat;";

                    if (mysqli_query($link, $mySQl)) {


                        if ($rs = mysqli_query($link, $mensa)) {
                            while ($row = mysqli_fetch_assoc($rs)) {
//                echo $row['@nat'];
                                echo '<div class="alertaN" ><div class="alert alert-success"><a class="close" data-dismiss="alert">x</a><strong> ' . $row['@nat'] . '</strong></div></div>';
                            }
                        }

                        foreach ($mi_array AS $clave => $valor):
                            mysqli_query($link, "call DetalleReserva($clave,$documentoUser,'" . $fechaR . "')");
                        endforeach;
                         unset($_SESSION["carro"]);
                    } else {
                        echo '-->No agrego detalle gt';
                    }
                } else {
                    echo '<div class="alertaN" ><div class="alert alert-success"><a class="close" data-dismiss="alert">x</a><strong>No se pudo realizar su reserva, solo se permite tener menos de 3 reservas vigentes</strong></div></div>';
                }
            }
            mysqli_free_result($rs);
        }
    } else {
        echo '-->No reserva gt';
    }
    mysqli_close($link);





   
    include './PagPrincipalController.php';
//include_once './PagUsuarioController.php?doc='.$_SESSION["documentoUser"].' &corre='.$_SESSION["correoUser"].'';
} else if (isset($_POST['material']) && isset($_POST['doc'])) {

// echo $_POST['doc'],$_POST['material'];

    $a = stripslashes($_POST['material']);

    $mi_array = unserialize($_POST['material']);

    $documentoUser = $_POST['doc'];


    $fechaR = date("Y-m-d");
    require '../model/conexionSabga.php';
    $conex = new conexionSabga();
    $link = $conex->conectarse();

    $cant = 0;
    foreach ($mi_array AS $clave => $valor):
        $cant = $cant + 1;
    endforeach;

    $mySQlant = "  call cantidadEnDetalle($documentoUser,@total)";
    $total = "select @total;";

    if (mysqli_query($link, $mySQlant)) {

        $cantDeta = 0;
        if ($rs = mysqli_query($link, $total)) {

            while ($row = mysqli_fetch_assoc($rs)) {
//                echo $row['@nat'];
                $cantDeta = $row['@total'];
                if ($cantDeta + $cant <= 3) {

                    $mySQl = "call InsertarReserva($documentoUser,'" . $fechaR . "',1,@nat,@cant)";
                    $mensa = "SELECT @nat;";

                    if (mysqli_query($link, $mySQl)) {


                        if ($rs = mysqli_query($link, $mensa)) {
                            while ($row = mysqli_fetch_assoc($rs)) {
//                echo $row['@nat'];
                                echo '<div class="alertaN" ><div class="alert alert-success"><a class="close" data-dismiss="alert">x</a><strong> ' . $row['@nat'] . '</strong></div></div>';
                            }
                        }

                        foreach ($mi_array AS $clave => $valor):
                            mysqli_query($link, "call DetalleReserva($clave,$documentoUser,'" . $fechaR . "')");

                            unset($_SESSION["carro"]);
                        endforeach;
                    } else {
                        echo '<div class="alertaN" ><div class="alert alert-success"><a class="close" data-dismiss="alert">x</a><strong>No se realizo la Reserva, documento o correo incorrectos</strong></div></div>';
                    }
                } else {
                    echo '<div class="alertaN" ><div class="alert alert-success"><a class="close" data-dismiss="alert">x</a><strong>No se pudo realizar su reserva, solo se permite tener menos de 3 reservas vigentes</strong></div></div>';
                }
            }
            mysqli_free_result($rs);
        }
    } else {
        echo '-->No se reservo ps';
    }
    mysqli_close($link);





    include './PagPrincipalController.php';
} else {
    echo '';
}


if (isset($_POST['Nreserva']) && isset($_POST['Nejemplar']) && isset($_POST['Ndoc'])) {

    $newCan = new cancelar();
    $cancelar = $newCan->cancelar_reserva($_POST['Nreserva'], $_POST['Nejemplar']);
    echo '<div class="alertaN" ><div class="alert alert-success"><a class="close" data-dismiss="alert">x</a><strong> a cancelado la reserva.</strong></div></div>';


    include './PagUsuarioController.php';
} else {
    echo '';
}





