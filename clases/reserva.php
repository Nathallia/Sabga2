<?php

class reserva {

    public $inserto;

    public function InsertarReser($docUser, $Fecha, $estado, $idmaterial) {

        require '../model/conexionSabga.php';
        $conex = new conexionSabga();
        $link = $conex->conectarse();

        if ($rs = mysqli_query($link, "call InsertarReserva($docUser,'" . $Fecha . "',$estado,$idmaterial)")) {
            $this->inserto = 'inserto';
            mysqli_free_result($rs);
        } else {
            $this->inserto = 'No inserto';
        }
        mysqli_close($link);
    }
    
    public function ValidaDisponibilidad($material) {
        
        $link = mysqli_connect("localhost", "root", "", "sabgab");
        
        if ($rs = mysqli_query($link, "call EjemplarDiponible($material)")) {
            $posts = array();
            while ($row = mysqli_fetch_assoc($rs)) {
                $posts[] = $row;
            }
            mysqli_free_result($rs);
        }
        mysqli_close($link);
       return $posts;
    }
    
}
