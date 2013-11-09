<?php


  if (isset($_GET['clasificacion'])) {
      echo '';
    
        } else {
            echo ' vacios';
        }

        require_once '../model/ModeloSabga.php';
        $ti = '';
        
        $ti = $_REQUEST['clasificacion'];
        $moFich=new ModeloSabga();
        
        $fichD = $moFich->DatosFicha($ti);
        
        include '../view/PagFichaMaterial.php';
         
?>
