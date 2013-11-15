<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
        <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../bootstrap/js/jquery.js"></script>
        <script type="text/javascript" src="../bootstrap/js/bootstrap-tab.js"></script>


        <title>SABGA</title>
    </head>
    <body>
        <hr>

    <center><h3>Ficha Del Usuario</h3></center> 



    <div class="modal-body">
        <div class="well">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#histo" data-toggle="tab">Historial</a></li>
                <li><a href="#dato" data-toggle="tab">Datos personales</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">


                <div class="tab-pane active in" id="histo">
                    <form class="form-horizontal" action='' method="POST" name="formCancel">
                        <p class="lead">Historial de reservas</p>


                        <div class="row">
                            <div class="span6">
                                <table>


                                    <tr><td>Nombre:</td> <td><input type="text" name="nombre" value="" disabled="disabled" placeholder="<?php echo $nombreUs ?>"/></td></tr>
                                    <tr><td>Documento:</td> <td> <input type="text" name="nombre" value="" disabled="disabled" placeholder="<?php echo $documUs ?>"/></td></tr>

                                </table><br>
                                <h5><?php echo $mensaje; ?></h5>

                                <table class="table table-condensed table-hover"  width="100%" cellpading="20" cellspacing="20">
                                    <thead>

                                        <tr>
                                            <th NOWRAP>Codigo Material</th>
                                            <th NOWRAP>Titulo Material</th>
                                            <th NOWRAP>Fecha Actual</th>
                                            <th NOWRAP>Fecha Reserva</th>
                                            <th NOWRAP>Estado Reserva</th>
                                            <th NOWRAP>Cancelar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($Dreserva as $reservasU): ?>
                                            <tr>

                                                <td NOWRAP><?php echo $reservasU['codigo_clasificacion'] ?></td>
                                                <td NOWRAP><?php echo utf8_encode($reservasU['titulo']) ?></td>
                                                <td NOWRAP><?php echo date("d-m-Y"); ?></td>
                                                <td NOWRAP><?php echo $reservasU['fecha_reserva'] ?></td>
                                                <td NOWRAP><?php
                                                    if ($reservasU['estado_reserva'] == 1) {
                                                        echo 'Vigente';
                                                    } else {
                                                        echo 'Cancelada';
                                                    }
                                                    ?></td>

                                                <td NOWRAP>
                                                    <?php
                                                    echo '<button class = "btn btn-navbar" type = "button"
                                                    onclick = "cancelacion('. ($reservasU['id_reserva']+0) .','. ($reservasU['id_ejemplar']+0) .','. $reservasU['documento_usuario'] .', 2323)">
                                                    Cancelar
                                                    </button>';
                                                            ?>
                                                    </td>
                                                    </tr>

                                                    <?php endforeach;
                                                ?>


                                    </tbody>
                                </table>




                            </div>

                        </div> 



                    </form>                
                </div>
                <div class="tab-pane fade" id="dato">
                    <form id="tab">


                        <br>
                        <p class="lead">Información personal</p>
                        <center>
                            <p>Recuerde que para modificar sus datos debe dirigirse a la biblioteca de la Institución.</p>
                            <div class="span6 ">


                                <table  >
                                    <?php
                                    foreach ($nuevo as $otraposts):
                                        if ($tipo == 'Estudiante') {
                                            ?>  
                                            <tr><td>Nombre:</td> <td NOWRAP><input type="text" name="nombre" value="" disabled="disabled" placeholder="<?php echo $nombreUs ?>"/></td></tr>
                                            <tr><td>Documento:</td> <td NOWRAP> <input type="text" name="nombre" value="" disabled="disabled" placeholder="<?php echo $documUs ?>"/></td></tr>
                                            <tr><td>Correo:</td> <td><input type="text" name="nombre" value="" disabled="disabled" placeholder="<?php echo $corr ?>"/></td></tr>
                                            <tr><td>Telefono: </td> <td><input type="text" name="nombre" value="" disabled="disabled" placeholder="<?php echo $tel ?>"/></td></tr>
                                            <tr><td>Direccion:</td> <td> <input type="text" name="nombre" value="" disabled="disabled" placeholder="<?php echo $direc ?>"/></td></tr>



                                        </table> 
                                    </div> 
                                    <div class="span6">
                                        <table>


                                            <tr><td>Grado: </td> <td><input type="text" name="nombre" value="" disabled="disabled" placeholder="<?php echo $grado ?>"/></td></tr>
                                            <tr><td>Curso: </td> <td><input type="text" name="nombre" value="" disabled="disabled" value="nombre" placeholder="<?php echo $curso ?>"/></td></tr>
                                            <tr><td>Jornada: </td> <td><input type="text" name="nombre" value="" disabled="disabled" placeholder="<?php echo utf8_encode($jor) ?>"/></td></tr>
                                            <tr><td>Tipo de  usuario: </td> <td><input type="text" name="nombre" value="" disabled="disabled" placeholder="<?php echo $tipo ?>"/></td></tr>
                                            <tr><td>Estado de usuario:</td> <td> <input type="text" name="nombre" value="" disabled="disabled" placeholder="<?php echo $estado ?>"/></td></tr>

                                            <tr>
                                        </table> 
                                        <?php
                                    } else {
                                        ?>
                                        <table>

                                            <tr><td>Nombre:</td> <td NOWRAP><input type="text" name="nombre" value="" disabled="disabled" placeholder="<?php echo $nombreUs ?>"/></td></tr>
                                            <tr><td>Documento:</td> <td> <input type="text" name="nombre" value="" disabled="disabled" placeholder="<?php echo $documUs ?>"/></td></tr>
                                            <tr><td>Correo:</td> <td><input type="text" name="nombre" value="" disabled="disabled" placeholder="<?php echo $corr ?>"/></td></tr>
                                            <tr><td>Telefono: </td> <td><input type="text" name="nombre" value="" disabled="disabled" placeholder="<?php echo $tel ?>"/></td></tr>
                                            <tr><td>Direccion:</td> <td> <input type="text" name="nombre" value="" disabled="disabled" placeholder="<?php echo $direc ?>"/></td></tr>



                                        </table> 
                                    </div> 
                                    <div class="span6">
                                        <table>
                                            <tr><td>Tipo de  usuario: </td> <td><input type="text" name="nombre" value="" disabled="disabled" placeholder="<?php echo $tipo ?>"/></td></tr>
                                            <tr><td>Estado de usuario:</td> <td> <input type="text" name="nombre" value="" disabled="disabled" placeholder="<?php echo $estado ?>"/></td></tr>

                                            <tr>
                                        </table> 
                                        <?php
                                    }
                                endforeach;
                                ?> 
                            </div>



                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

