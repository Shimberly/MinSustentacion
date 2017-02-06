<?php

class Demo
{
    private $id_mineral;
    private $nombre;
    private $descripcion;
    
     function __construct($id_mineral, $nombre, $descripcion) {
       $this->id_mineral = $id_mineral;
       $this->nombre = $nombre;
        $this->descripcion = $descripcion;
     }
    
     function setid_mineral($id_mineral){
       $this->id_mineral = $id_mineral;
     } 
     function getid_mineral(){
       return $this->id_mineral;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 
    
     function setDescripcion($descripcion){
       $this->descripcion = $descripcion;
     } 
     function getDescripcion(){
       return $this->descripcion;
     } 
}

?> 
