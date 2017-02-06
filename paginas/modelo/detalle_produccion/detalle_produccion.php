<?php

class Demo
{
    private $id_detalle;
    private $id_produccion;
    private $id_mineral;
    private $peso;
    
     function __construct($id_detalle, $id_produccion, $id_mineral) {
       $this->id_detalle = $id_detalle;
       $this->id_produccion = $id_produccion;
        $this->id_mineral = $id_mineral;
     }
    
     function setid_detalle($id_detalle){
       $this->id_detalle = $id_detalle;
     } 
     function getid_detalle(){
       return $this->id_detalle;
     } 
     function setid_produccion($id_produccion){
       $this->id_produccion = $id_produccion;
     } 
     function getid_produccion(){
       return $this->id_produccion;
     } 
    
     function setid_mineral($id_mineral){
       $this->id_mineral = $id_mineral;
     } 
     function getid_mineral(){
       return $this->id_mineral;
     } 
     function setpeso($peso){
       $this->peso = $peso;
     } 
     function getpeso(){
       return $this->peso;
     } 
}

?> 
