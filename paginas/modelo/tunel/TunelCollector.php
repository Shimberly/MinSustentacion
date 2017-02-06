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
      $aux = new Tunel($c{'id_tunel'},$c{'extension'},$c{'numero_frente'},$c{'id_mina'});
      array_push($arrayTunel, $aux);
    }
    return $arrayTunel;        
  }
    
    function deleteTunel($id) {
        $rows = self::$db->deleteRow("DELETE FROM Tunel WHERE id_Tunel=$id",null);
    
    
    }
   
    function createTunel($extension,$num_frente,$id_mina) {
        $rows = self::$db->insertRow("INSERT INTO tunel (extension, num_frente,id_mina) VALUES ('$extension', '$num_frente','$id_mina')",null);
        
    }
    
     function updateTunel($id,$extension,$num_frente,$id_mina) {
        $rows = self::$db->insertRow("UPDATE tunel SET extension='$extension' , num_frente='$num_frente' ,id_mina= '$id_mina' WHERE id_Tunel='$id'" ,null);
        
    }
}
?>

