<?php

include_once('produccion.php');
include_once("../collector.php");

class produccioncollector extends collector
{
  
  function showproduccion() {
    $rows = self::$db->getRows("SELECT * FROM produccion");        
    ##echo "linea 1";
    $arrayproduccion= array();        
    foreach ($rows as $c){
      $aux = new produccion($c{'id_produccion'},$c{'fecha'},$c{'id_empresa'});
      array_push($arrayproduccion, $aux);
    }
    return $arrayproduccion;        
  }
    
    function deleteproduccion($id) {
        $rows = self::$db->deleteRow("DELETE FROM produccion WHERE id_produccion=$id",null);
    
    
    }
   
    function createproduccion($fecha,$id_empresa) {
        $rows = self::$db->insertRow("INSERT INTO produccion (fecha, id_empresa) VALUES ('$fecha', '$id_empresa')",null);
        
    }
    function updateproduccion($id_produccion,$fecha,$id_empresa) {
        $rows = self::$db->insertRow("UPDATE produccion SET fecha='$fecha' , id_empresa='$id_empresa' WHERE id_produccion='$id_produccion'" ,null);
        
    }
}
?>