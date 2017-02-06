<?php

include_once('Mina.php');
include_once("../collector.php");

class MinaCollector extends collector
{
  
  function showMinas() {
    $rows = self::$db->getRows("SELECT * FROM mina");        
    ##echo "linea 1";
    $arrayMina= array();        
    foreach ($rows as $c){
      $aux = new Mina($c{'id_mina'},$c{'nombre'},$c{'id_empresa'},$c{'ubicacion'});
      array_push($arrayMina, $aux);
    }
    return $arrayMina;        
  }
    
    function deleteMina($id) {
        $rows = self::$db->deleteRow("DELETE FROM Mina WHERE id_mina=$id",null);
    
    
    }
   
    function createMina($nombre,$id_empresa,$ubicacion) {
        $rows = self::$db->insertRow("INSERT INTO Mina (nombre, id_empresa,ubicacion) VALUES ('$nombre', '$id_empresa','$ubicacion')",null);
        
    }
    
     function updateMina($nombre,$id_empresa,$ubicacion) {
        $rows = self::$db->insertRow("INSERT INTO Mina (nombre, id_empresa,ubicacion) VALUES ('$nombre', '$id_empresa','$ubicacion')",null);
        
    }
}
?>

