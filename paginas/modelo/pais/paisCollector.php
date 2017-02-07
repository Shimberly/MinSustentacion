<?php

include_once('pais.php');
include_once("../collector.php");

class paisCollector extends collector
{

function showPaises() {
    $rows = self::$db->getRows("SELECT * FROM pais");        
   
    $arrayPais= array();        
    foreach ($rows as $c){
      $aux = new pais($c{'id_pais'},$c{'nombre'});
      array_push($arrayPais, $aux);
    }
    return $arrayPais;        
  }

    

  }
?>

