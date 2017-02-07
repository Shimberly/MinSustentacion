<?php

class Pais
{
private $idPais;
    private $nombre;



  function __construct($idpais, $nombre) {
    $this->id_pais = $idpais;
       $this->nombre = $nombre;
     
   
     }



function setNombre($nombre){
       $this->nombre = $nombre;
     }

function getNombre(){
       return $this->nombre;
     } 

 function setIdPais($idpais){
       $this->idpais = $idpais;
     } 
     function getIdPais(){
       return $this->idpais;
     } 

}

?> 
