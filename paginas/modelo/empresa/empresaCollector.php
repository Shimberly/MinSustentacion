<?php

include_once('empresa.php');
include_once("../collector.php");

class empresaCollector extends collector
{

function showEmpresas() {
    $rows = self::$db->getRows("SELECT * FROM empresa");        
   
    $arrayEmpresa= array();        
    foreach ($rows as $c){
      $aux = new empresa($c{'id_empresa'},$c{'razonSocial'},$c{'ruc'},$c{'direccion'},$c{'telefono'},$c{'id_ciudad'});
      array_push($arrayEmpresa, $aux);
    }
    return $arrayEmpresa;        
  }

    

  }
?>

