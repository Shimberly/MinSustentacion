<?php

include_once('Persona.php');
include_once("../collector.php");

class PersonaCollector extends collector
{
  
  function showPersonas() {
    $rows = self::$db->getRows("SELECT * FROM persona");        
    ##echo "linea 1";
    $arrayPersona= array();        
    foreach ($rows as $c){
      $aux = new Persona($c{'id_persona'},$c{'nombre'},$c{'apellido'},$c{'email'},$c{'usuario'},$c{'clave'},$c{'ruc'},$c{'id_empresa'},$c{'id_licencia'},$c{'fecha_nacimiento'});
      array_push($arrayPersona, $aux);
    }
    return $arrayPersona;        
  }
    
    function deletePersona($id) {
        $rows = self::$db->deleteRow("DELETE FROM Persona WHERE id_persona=$id",null);
    
    
    }
   
    function createPersona($nombre,$apellido,$email,$usuario,$clave,$ruc,$id_empresa,$id_licencia,$fecha_nacimiento) {
        $rows = self::$db->insertRow("INSERT INTO Persona (nombre,apellido,email,usuario,clave,ruc,id_empresa,id_licencia,fecha_nacimiento) VALUES ('$nombre', '$apellido','$email','$usuario','$clave','$ruc','$id_empresa','$id_licencia','$fecha_nacimiento')",null);
        
    }
    
     function updatePersona($nombre,$apellido,$email,$usuario,$clave,$ruc,$id_empresa,$id_licencia,$fecha_nacimiento) {
        $rows = self::$db->insertRow("INSERT INTO Persona (nombre,apellido,email,usuario,clave,ruc,id_empresa,id_licencia,fecha_nacimiento) VALUES ('$nombre', '$apellido','$email','$usuario','$clave','$ruc','$id_empresa','$id_licencia','$fecha_nacimiento')",null);
        
    }
}
?>
