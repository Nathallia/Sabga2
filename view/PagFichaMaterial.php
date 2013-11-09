<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
        <link type="text/css" href="../bootstrap/css/result.css" rel="stylesheet" media="screen">
   

    </head>
    <body>



        <div class="fichaM">


            <ul class="result-list ">



                <li class="result-list-li">
                <center>
                    <h1>Ficha del material</h1>
                </center>


                <div class="iconLIbro">

                    <?php
                    require '../clases/reserva.php';
                    $objRese = new reserva();
                    foreach ($fichD as $fic):
                        echo ' <span  title="' . utf8_encode($fic['tipo_material']) . '">';
                        if ($fic['tipo_material'] == 'Libro') {
                            echo '<img src="../bootstrap/img/book.png"> </span>';
                        } else
                        if ($fic['tipo_material'] == 'CD-ROM') {
                            echo '<img src="../bootstrap/img/cd.png"> </span>';
                        } else
                        if ($fic['tipo_material'] == 'Folleto') {
                            echo '<img src="../bootstrap/img/folleto.png"> </span>';
                        } else
                        if ($fic['tipo_material'] == 'Revista') {
                            echo '<img src="../bootstrap/img/revista.png"> </span>';
                        } else
                        if ($fic['tipo_material'] == 'Video') {
                            echo '<img src="../bootstrap/img/video.png"> </span>';
                        }
                        ?>
                        </span>
                        <p class="caption"><?php utf8_encode($fic['clase_material']) ?></p>

                    </div>



                    <div class="tablaFicha">


                        <center>
                            <?php
                            echo '<span class="fichTutulo" ><strong>' . utf8_encode($fic['titulo']) . '</strong></a></span><br><br> <br><br>';
                            echo '<table border="2" width="25%" cellspacing="2" cellpadding="2" >';

                            echo '<tbody>';
                            echo '<tr><td  NOWRAP>Codigo de clasificación: </td><td NOWRAP>' . utf8_encode($fic['codigo_clasificacion']) . '</td></tr>';
                            echo '<tr><td>Título: </td><td NOWRAP>' . utf8_encode($fic['titulo']) . '</td></tr>';
                            echo '<tr><td>Autor (es): </td><td NOWRAP>' . utf8_encode($fic['autores']) . '</td></tr>';
                            echo ' <tr> <td>Materia: </td> <td NOWRAP>' . utf8_encode($fic['materia']) . '</td> </tr>';
                            echo ' <tr> <td>Editorial: </td> <td NOWRAP>' . utf8_encode($fic['nombre_editorial']) . '</td> </tr>';
                            echo '    <td>Publicación: </td>';
                            echo '    <td NOWRAP>' . utf8_encode($fic['publicacion']) . '</td></tr>';
                            echo '    <td>Año de publicación: </td>';
                            echo '    <td NOWRAP>' . $fic['anio'] . '</td></tr>';
                            echo '<tr> <td NOWRAP>Tipo material:    </td>  <td NOWRAP>' . utf8_encode($fic['tipo_material']) . '</td> </tr>';
                            echo '<tr> <td NOWRAP>Clase material:    </td>  <td NOWRAP>' . utf8_encode($fic['clase_material']) . '</td> </tr>';
                            echo '</tbody>';
                            echo ' </table>';

                            $ejem = $objRese->ValidaDisponibilidad($fic['id_material']);
                            $opcion;

                            if ($fic['id_clase_material'] == 2) {
                                $opcion = 'Este material No se puede reservar';
                            } else
                            if ($ejem == null) {
                                $opcion = 'No hay ejemplares disponibles';
                            } else {
                                $opcion = '<a  class="btn btn-inverse" href="?id=' . $fic['id_material'] . '&action=add" onclick="alert("se agrego")">Agregar a Reservas</a> ';
                            }
                            echo '<br><br>';
                            echo $opcion;
                        endforeach;
                        ?>

                        <br><br>

                    </center>


                </div>

                </li>		
            </ul>

        </div>


    </body>
</html>
