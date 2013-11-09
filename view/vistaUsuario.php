<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
 <?php
//require '../clases/seguridad.php';
//$segur = new seguridadUsuario();
//$segur->seguriUser();
require '../Controller/PagPrincipalController.php';
?>  

    <head>
        <meta http-equiv="Content-Type" content="text/html;  AddCharset UTF-8 .php">
        <link type="text/css" href="../bootstrap/css/bootstrap-responsive.css" rel="stylesheet" media="screen">
        <link type="text/css" href="../bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link type="text/css" href="../bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
        <link type="text/css" href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link type="text/css" href="../bootstrap/css/normalize.css" rel="stylesheet" media="screen">
        <link type="text/css" href="../bootstrap/css/CSSsabg.css" rel="stylesheet" media="screen">
        <script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
        <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../bootstrap/js/jquery.js"></script>
        <script type="text/javascript" src="../bootstrap/js/bootstrap-tab.js"></script>
        <script type="text/javascript" src="../bootstrap/js/bootstrap-dropdown.js"></script>
        <script src="../bootstrap/js/funciones.js" language="JavaScript"></script>
        <script src="../bootstrap/js/funcionDatosUsuario.js" language="JavaScript"></script>
        <script src="../bootstrap/js/funcionFicha.js" language="JavaScript"></script>
        <script src="../bootstrap/js/funcionBuscar.js" language="JavaScript"></script>
        <script src="../bootstrap/js/funcionCarro.js" language="JavaScript"></script>

        <title>Sabga Reserva.</title>

    </head>
    <body>

        <style>
            ul.nav li.dropdown:hover > ul.dropdown-menu {
                display: block;    
            }
        </style>

        <div class="navbar navbar-inverse nav">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>


                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class="divider-vertical"></li>
                            <li><a href="../Controller/PagPrincipalController.php"><i class="icon-home icon-white"></i> Inicio</a></li>
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
                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Ayuda <b class="caret"></b></a>

                                </li>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div >

            <div class="texto">
                <img src="../bootstrap/img/Logo Biblioteca.png" class="logo">

                <img  src="../bootstrap/img/IMAGEN_PAG.png" class="imagen">  



                <div class="text"> 
                    <h2>Institución Educativa Gilberto Alzate Avendaño</h2>
                    <h1 style="text-align: center">SABGA</h1>
                </div>

            </div>






            <div class="cont">

                <div class="buscar">
                    <h3>Búsqueda de Material</h3>
                    <center><h3>Bibliotecario</h3></center>
                </div>
                <div class="Busqueda">


                    <form  method="post" action="" name="formulario">

                        <input id="busque"  name="campoText" type="text" class="input-medium search-query" placeholder="Ingrese su búsqueda" >
                        <button type="button" onClick="buscarMa()" class="btn btn-inverse" >Buscar</button><br><br>

                        <br>


                        <table class="table table-condensed table-hover">
                            <thead>

                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="checkbox" onclick="campo_chec.value = (this.checked) ? this.value : ''" value="todos"> </td>
                                    <td><strong>Todas las opciones</strong></td>

                                </tr>

                                <tr>
                                    <td><input type="checkbox" name="check" onclick="campo_chec.value = (this.checked) ? this.value : ''" value="autor"></td>
                                    <td><strong>Autor</strong></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" onclick="campo_chec.value = (this.checked) ? this.value : ''" value="titulo"></td>
                                    <td><strong>Título</strong></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" onclick="campo_chec.value = (this.checked) ? this.value : ''" value="materia" ></td>
                                    <td><strong>Materia</strong></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" onclick="campo_chec.value = (this.checked) ? this.value : ''" value="codigo"></td>
                                    <td><strong>Código</strong></td>

                                </tr>

                            </tbody>
                        </table>
                        <input  style="visibility: hidden" type="text" name="campo_chec">
                    </form>




                </div>

            </div>




            <div class="contenidoF" id="contenidoF" accept-charset="UTF-8" >

                <?php
                                include '../Controller/PagUsuarioController.php';
                ?>
            </div>

        </div> 



    </body>
</html>
