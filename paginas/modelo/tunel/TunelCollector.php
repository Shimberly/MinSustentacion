<?php

include_once('Tunel.php');
include_once("../collector.php");

class TunelCollector extends collector
{
  
  function showTunels() {
    $rows = self::$db->getRows("SELECT * FROM tunel");        
    ##echo "linea 1";
    $arrayTunel= array();        
    foreach ($rows as $c){
      $aux = new Tunel($c{'id_tunel'},$c{'extension'},$c{'numero_frente'},$c{'id_mina'},$c{'nombre'});
      array_push($arrayTunel, $aux);
    }
    return $arrayTunel;        
  }
    
    function deleteTunel($id) {
         $rows = self::$db->deleteRow("DELETE FROM detalle_reporte WHERE id_tunel=$id",null);
    
        $rows = self::$db->deleteRow("DELETE FROM tunel WHERE id_tunel=$id",null);
    
    
    }
   
    function createTunel($extension,$num_frente,$id_mina,$nombre) {
        $rows = self::$db->insertRow("INSERT INTO tunel (extension, numero_frente,id_mina,nombre) VALUES ('$extension', '$num_frente','$id_mina',$nombre)",null);
        
    }
    
     function updateTunel($id,$extension,$num_frente,$id_mina,$nombre) {
        $rows = self::$db->insertRow("UPDATE tunel SET extension='$extension' , numero_frente='$num_frente' ,id_mina= '$id_mina',nombre= '$nombre' WHERE id_Tunel='$id'" ,null);
        
    }
}
?>

