<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ValidaResultado
 *
 * @author Proyecto363418
 */
class TiempoReserva {
    
    
    public function opcionBotonR($ClaseMaterial,$material) {
       require '../clases/reserva.php';
        $objRese=new reserva();
        $ejem=$objRese->ValidaDisponibilidad($material);
        $opcion;
        
                if($ClaseMaterial==2)
                       {
                           $opcion= 'Este material No se puede reservar';
                       }
                       else
                           if($ejem=='No')
                           {
                              $opcion='No hay ejemplares disponibles'; 
                           }
                       else
                       {
                           $opcion='<a  class="btn btn-inverse" href="?id='.$Re['id_material'].'&action=add" >Agregar a Reservas</a> <hr>';
                         
                       }
    }
}
