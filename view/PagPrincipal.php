<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>

<html>
    <!--  <?php
//require '../clases/seguridad.php';
//$segur = new seguridadUsuario();
//$segur->seguriUser();
//    if (isset($_GET['action']) && $_GET['action'] == 'add') {
//        echo '<div class="alertaN" ><div class="alert alert-success"><a class="close" data-dismiss="alert">×</a><strong> Se a añadido el material a su reserva.</strong></div></div>';
//    } else
//    if (isset($_GET['action']) && $_GET['action'] == 'removeProd') {
//        echo '<div class="alertaN" ><div class="alert alert-success"><a class="close" data-dismiss="alert">×</a><strong>Se a retirado el material de su reserva.</strong> </div></div>';
//    }
    ?>  -->

    <head>
        <meta http-equiv="Content-Type" content="text/html;  AddCharset UTF-8 .php">
        
        
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.js"></script>
<script type="text/javascript" src="zoomy.min.js"></script>
<script type="text/javascript">
$(function () {
    $('.zoom').zoomy();
});
</script>


        <link type="text/css" href="../bootstrap/css/bootstrap-responsive.css" rel="stylesheet" media="screen">
        <link type="text/css" href="../bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link type="text/css" href="../bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
        <link type="text/css" href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link type="text/css" href="../bootstrap/css/normalize.css" rel="stylesheet" media="screen">
        <link type="text/css" href="../bootstrap/css/CSSsabg.css" rel="stylesheet" media="screen">
        <link type="text/css" href="../bootstrap/css/cssAlert.css" rel="stylesheet" media="screen">

        <script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
        <script type="text/javascript" src="../bootstrap/js/modal.js"></script>
        <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../bootstrap/js/jquery.js"></script>
        <script type="text/javascript" src="../bootstrap/js/bootstrap-tab.js"></script>
        <script type="text/javascript" src="../bootstrap/js/bootstrap-dropdown.js"></script>
        <script src="../bootstrap/js/funciones.js" language="JavaScript"></script>
        <script src="../bootstrap/js/funcionDatosUsuario.js" language="JavaScript"></script>
        <script src="../bootstrap/js/funcionFicha.js" language="JavaScript"></script>
        <script src="../bootstrap/js/funcionBuscarMaterial.js" language="JavaScript"></script>
        <script src="../bootstrap/js/funcionCarro.js" language="JavaScript"></script>
        <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
        <script type="text/javascript" src="../bootstrap/js/cancelarReserva.js"></script>
        <script type="text/javascript" src="../bootstrap/js/alert.js"></script>
        <script type="text/javascript" src="../bootstrap/js/datosUser.js"></script>


        <?php
        if (isset($_GET['action']) && $_GET['action'] == 'add') {
            echo '<div class="alertaN" ><div class="alert alert-success"><a class="close" data-dismiss="alert">×</a><strong> Se a añadido el material a su reserva.</strong></div></div>';
        } else
        if (isset($_GET['action']) && $_GET['action'] == 'removeProd') {
            echo '<div class="alertaN" ><div class="alert alert-success"><a class="close" onLoad="setTimeout(window.close, 2000)"  data-dismiss="alert">×</a><strong>Se a retirado el material de su reserva.</strong> </div></div>';
        }
        ?>
        <title>SABGA</title>

    </head>
  

    <body id="bodyP">
  

        <div class="navbar navbar-inverse nav">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse" >
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>


                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class="divider-vertical"></li>
                            <li><a href="../Controller/PagPrincipalController.php"><i class="icon-home icon-white"></i> <strong>Inicio</strong></a></li>
                        </ul>
                        <div class="pull-right">
                            <ul class="nav pull-right ">

                                <?php
                                If (isset($loginn))
                                    echo $loginn;
                                else
                                    echo 'nada';
                                ?>

                                <li class="dropdown"><a  href="#" class="dropdown-toggle " data-toggle="dropdown"><strong>Reservas </strong><b class="caret"></b></a>
                                    <ul class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
                                        <form method="post" action="login" accept-charset="UTF-8">
                                            <table class="table table-condensed table-hover">
                                                <thead>

                                                </thead>
                                                <tbody>

                                                    <tr>

                                                        <td><strong><?php include '../Controller/carrito.php'; ?></strong></td>
                                                    </tr>


                                                </tbody>
                                            </table>


                                        </form>
                                    </ul>
                                </li>
                                <li class="dropdown" ><a  href="#" class="dropdown-toggle" data-toggle="dropdown"><strong>Ayuda</strong> <b class="caret"></b></a>
                                      <ul class="dropdown-menu" >
                                           <?php
                    include 'PagAyudaEnLinea.php';
                    ?>
                                          
                                      </ul> 
                                </li> 


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        
        
        <div >

            <div class="texto">
                <img src="../bootstrap/img/banner4.png" class="logo">
           </div>






            <div class="cont">

                <div class="buscar">
                    <h3>Búsqueda de Material</h3>
                    <center><h3>Bibliotecario</h3></center>
                </div>
                <div class="Busqueda">


                    <form  method="post" action="" name="formulario">

                        <input id="busque"  name="campoText" type="text" class="input-medium search-query" placeholder="Ingrese su búsqueda" >
                        <button type="button" onClick="buscarMate()" class="btn btn-inverse" >Buscar</button><br><br>

                        <br>


                        <table class="table table-condensed table-hover">
                            <thead>

                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="radio" checked="true" name="check" onclick="campo_chec.value = (this.checked) ? this.value : ''" value="todos"> </td>
                                    <td><strong>Todas las opciones</strong></td>

                                </tr>

                                <tr>
                                    <td><input type="radio" name="check" onclick="campo_chec.value = (this.checked) ? this.value : ''" value="autor"></td>
                                    <td><strong>Autor</strong></td>
                                </tr>
                                <tr>
                                    <td><input type="radio"  name="check" onclick="campo_chec.value = (this.checked) ? this.value : ''" value="titulo"></td>
                                    <td><strong>Título</strong></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="check" onclick="campo_chec.value = (this.checked) ? this.value : ''" value="materia" ></td>
                                    <td><strong>Materia</strong></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="check" onclick="campo_chec.value = (this.checked) ? this.value : ''" value="codigo"></td>
                                    <td><strong>Código (CDU)</strong></td>

                                </tr>

                            </tbody>
                        </table>
                        <input style="visibility: hidden" type="text" name="campo_chec" value="todos">
                    </form>




                </div>

            </div>




            <div class="contenidoF" id="contenidoF" accept-charset="UTF-8" >

                <div class="pagination pagination-centered">
                    <ul>
                        <?php
                        for ($i = 65; $i <= 90; $i++) {
                            $letra = chr($i);
                            echo ' <li ><a href="../Controller/PagPrincipalController.php?letra=' . $letra . '">' . $letra . '</a></li>';
                        }
                        ?>

                    </ul>
                </div>



                <?php
                if (isset($_GET['title'])) {
                    header('Content-Type: text/html; charset=UTF-8');
                    include_once'../Controller/PagFichaMaterialController.php';
                } else
                if (!(isset($_GET['title']))) {
                    ?>
                    <div  class="resulBarra">
                        <div class="plan">


                            <div class="plan-name-silver">
                                <center>
                                    <?php
                                    header('Content-Type: text/html; charset=UTF-8');

                                    echo '<h2>' . $let . ' </h2>';
                                    ?> 
                                </center>

                            </div>
                            <div class="tablaBarra">
                                <?php
                                require_once '../model/ModeloSabga.php';

                                echo '<br>';
                                $obj = new ModeloSabga();

                                $res = $obj->BarraDeletra($let);

                                foreach ($res as $re):
                                    $codigoL = $re['codigo_clasificacion'];
                                    ?>
                                    <form name="forFicha" method="post">
                                        <table aling="right" ><tr>
                                            <a  href="../Controller/PagPrincipalController.php?title=<?php echo $re['titulo'] ?>&clasificacion=<?php echo $re['codigo_clasificacion'] ?>"  
                                                onclick=""  title="Resultado"> <?php echo utf8_encode($re['titulo']) ?></a> 
                                            </tr></table>

                                        <?php
                                        echo '<br>';
                                    endforeach;
                                    ?>
                                    <!--<a href="#" onclick="javascript:document.form1.submit()" title="Abre el enlace">Enlace</a> -->

                                </form>

                            </div>

                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>

        </div>
        
 

    </body>

</html>


 