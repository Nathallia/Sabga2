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
        if (isset($_POST['campoText']) && isset($_POST['campo_chec'])) {

            echo '';
        } else {
            echo 'llegaron vacios';
        }

        

        require_once '../model/ModeloSabga.php';
        $busRE=new ModeloSabga();
        $resultadoFinal = $busRE->ResultadoBusqueda($_POST['campo_chec'],$_POST['campoText']);
        

        if ($resultadoFinal != null) {
            
           include_once '../view/pagResultado.php';
        } else {
            include '../view/errorBusqueda.php';
        }

        //require '../buscar.php';
        ?>
    </body>
</html>
