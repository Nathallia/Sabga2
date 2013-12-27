<?php
require_once("../clases/class.php");
$obj = new Trabajo();
?>
<link href="../bootstrap/css/bootstrapotro.css" rel="stylesheet">
<script src="http://static.scripting.com/github/bootstrap2/js/jquery.js"></script>
<script src="http://static.scripting.com/github/bootstrap2/js/bootstrap-transition.js"></script>
<script src="http://static.scripting.com/github/bootstrap2/js/bootstrap-modal.js"></script>
<script src="../bootstrap/js/enviarLOgRes.js"></script>
<script src="../bootstrap/js/enviarDocGetR.js"></script>
<script src="../bootstrap/js/modal.js"></script>
<script type="text/javascript">

    function nameform() {
        if (document.getElementById('nameformdiv').style.display == 'none') {
            document.getElementById('nameformdiv').style.display = '';
        } else {
            document.getElementById('nameformdiv').style.display = 'none';
        }
    }

</script>
<div id="tabla">

    <?php $obj->carro(); ?>
    <?php
    if (!empty($_SESSION["carro"])) {
        ?>


        <table border="0">
            <tr>
                <th>Material reservado</th>
            </tr>
            <?php
            $id = '';
            $producto = '';
            $precio = '';
            foreach ($_SESSION["carro"] as $key => $valor) {
                $fi = $obj->getProductosPorId($key);
                foreach ($fi as $fila) {
                    $id = $fila["id_material"];
                    $producto = $fila["titulo"];
                    $precio = $fila["codigo_clasificacion"];
                }
                ?>

                <tr>
                    <td NOWRAP><?php echo $producto; ?></td>

                    <td>

                    <td><a href="?id=<?php echo $id ?>&action=removeProd" class="btn"><i class="icon-trash"></i> </a></td>
                    </td>


                </tr>


            <?php } ?>
            <tr>
                <td>
                    <?php
                    if ((!empty($_SESSION["usuarioactual"]))) {
                        foreach ($_SESSION['carro'] as $idM):

                        endforeach;

                        $mi_pasa_array = $_SESSION['carro'];
                        $compactada = serialize($mi_pasa_array);

                        $compactada = urlencode($compactada);
                        ?>

                        <a style="width: 100%" data-toggle="modal" href="#myModal"  class="btn btn-primary btn-inverse"  id="login"  href="ReservaC.php?doc=<?php echo $_SESSION["documentoUser"] ?>&material=<?php echo $compactada ?>" >
                            Realizar Reservas</a>



                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title">Reservas</h4>
                                    </div>
                                    <form method="post" name="formuUsuario" class="login" > 
                                        <div class="modal-body">
                                            <p>
                                                Ser realizara la reserva de:

                                            </p>
                                        </div>

                                        <div class="modal-footer">

                                            <?php
                                            
                                            foreach ($_SESSION["carro"] as $key => $valor) {

                                                $fi = $obj->getProductosPorId($key);
                                                foreach ($fi as $fila) {
                                                    $id = $fila["id_material"];
                                                    $producto = $fila["titulo"];
                                                    $precio = $fila["codigo_clasificacion"];
                                                }
                                             
                                                echo $producto;
                                                echo '<hr>';
                                            }
                                            ?> 

                                        </div>
                                        <div class="modal-footer">
                                            <a  class="btn btn-primary btn-inverse"  id="login"  href="ReservaC.php?doc=<?php echo $_SESSION["documentoUser"] ?>&material=<?php echo $compactada ?>" >
                                                Aceptar</a> 
                                        </div>

                                    </form> 
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                        <?php
                    } else {
                        $mi_pasa_array = $_SESSION['carro'];

                        $compactada = serialize($mi_pasa_array);

                        $compactada = urlencode($compactada);
                        foreach ($_SESSION["carro"] as $key => $valor) {
                            $fi = $obj->getProductosPorId($key);
                            foreach ($fi as $fila) {
                                $id = $fila["id_material"];
                                $producto = $fila["titulo"];
                                $precio = $fila["codigo_clasificacion"];
                            }
                        }
                        ?>
                        <input type="button" value="Realizar Reserva"  class="btn btn-inverse" id="nombre" onclick="nameform();" /><br>

                        <div id="nameformdiv" style="display:none;">
                            <h5>Debe iniciar sesión para realizar la reserva </h5>
                            <form method="post" name="formuUsuario" class="login" > 
                                <input style="margin-bottom: 15px;"   type="text"  placeholder="Ingrese su documento" id="documento" name="documento"><br> 
                                <input style="margin-bottom: 15px;"   type="text"  placeholder="Ingrese correo electrónico" id="correo" name="correo"><br>
                                <!--<button name="login"  type="button" onClick="datosUsuarioLogin()" class="btn btn-inverse" >Ingresar</button><br><br>-->
                                <input style="visibility: hidden"    type="text"  id="array" name="array" value="<?php echo $compactada ?>"><br>


                                <input name="bu" type="button" onclick="datosUsuarioLogin2(documento.value, correo.value);
                                                alert('Se Agrego <?php
                                foreach ($_SESSION["carro"] as $key => $valor) {
                                    $fi = $obj->getProductosPorId($key);
                                    foreach ($fi as $fila) {
                                        $id = $fila["id_material"];
                                        $producto = $fila["titulo"];
                                        $precio = $fila["codigo_clasificacion"];
                                    }

                                    echo $producto . ', ';
                                }
                                ?> a sus reservas');
                                                enviarDMrese(documento.value, array.value);"
                                       class="btn btn-inverse" value="Realizar Reservas"> 
                            </form> 
                        </div>

                        <?php
                    }
                    ?>

                </td>
            </tr>
        </table>
    </div>

    <?php
} else {
    echo 'Aun No ha agregado Material a su reserva';
}
?>
