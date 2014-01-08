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
        if( isset($_POST['deta']))
        {
           
            
               require_once '../model/ModeloSabga.php';



                    $moFich = new ModeloSabga();

                    $fichD = $moFich->DatosFicha($_POST['deta']);

                    foreach ($fichD as $fic):
                        ?>

                        <table class="table table-condensed table-hover">
                            <tr>
                                <td NOWRAP>Título: </td>
                                <td NOWRAP> <?php echo utf8_encode($fic['titulo']); ?> </td>
                            </tr> 
                            <tr>
                                <td NOWRAP>Código de clasificación: </td>
                                <td NOWRAP> <?php echo utf8_encode($fic['codigo_clasificacion']); ?></td>
                            </tr> 
                            <tr>
                                <td NOWRAP>Autor(es): </td>
                                <td NOWRAP> <?php echo utf8_encode($fic['autores']); ?></td>
                            </tr>
                            <tr>
                                <td NOWRAP>Materia: </td>
                                <td NOWRAP> <?php echo utf8_encode($fic['materia']); ?></td>
                            </tr>
                            <tr>
                                <td NOWRAP>Publicación: </td>
                                <td NOWRAP> <?php echo utf8_encode($fic['publicacion']); ?></td>
                            </tr>
                            <tr>
                                <td NOWRAP>editorial: </td>
                                <td NOWRAP> <?php echo utf8_encode($fic['titulo']); ?></td>
                            </tr>
                            <tr>
                                <td NOWRAP>Tipo de material: </td>
                                <td NOWRAP> <?php echo utf8_encode($fic['nombre_editorial']); ?></td>
                            </tr>
                            <tr>
                                <td NOWRAP>Clase de material: </td>
                                <td NOWRAP> <?php echo utf8_encode($fic['clase_material']); ?></td>
                            </tr>
                            <tr>
                                <td NOWRAP> </td><td NOWRAP> </td>
                            </tr>
                        </table>
                        <?php
                    endforeach;
        }
        else
        {
            echo 'mierda tampoco funciono';
        }
      
                 
                    ?>
    </body>
</html>
