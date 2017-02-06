<?php

include_once('mineral.php');
include_once("../collector.php");

class mineralcollector extends collector
{
  
  function showmineral() {
    $rows = self::$db->getRows("SELECT * FROM mineral");        
    ##echo "linea 1";
    $arraymineral= array();        
    foreach ($rows as $c){
      $aux = new mineral($c{'id_mineral'},$c{'nombre'},$c{'descripcion'});
      array_push($arraymineral, $aux);
    }
    return $arraymineral;        
  }
    
    function deletemineral($id) {
        $rows = self::$db->deleteRow("DELETE FROM mineral WHERE id_mineral=$id",null);
    
    
    }
   
    function createmineral($nombre,$apellido) {
        $rows = self::$db->insertRow("INSERT INTO mineral (nombre, descripcion) VALUES ('$nombre', '$apellido')",null);
        
    }
}
?>