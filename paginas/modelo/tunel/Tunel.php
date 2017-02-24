<?php

class Tunel
{
    private $id_tunel;
    private $extension;
    private $num_frente;
    private $id_mina;
 	private $nombre;
    
     function __construct($id_tunel, $extension, $num_frente, $id_mina, $nombre) {
       $this->id_tunel = $id_tunel;
       $this->extension = $extension;
       $this->num_frente = $num_frente;
       $this->id_mina = $id_mina;
	$this->nombre = $nombre;
     }
    
     function setIdTunel($id_tunel){
       $this->id_tunel = $id_tunel;
     } 
     function getIdTunel(){
       return $this->id_tunel;
     } 
     function setExtension($extension){
       $this->extension = $extension;
     } 
     function getExtension(){
       return $this->extension;
     } 
    
     function setNumFrente($num_frente){
       $this->num_frente = $num_frente;
     } 
     function getNumFrente(){
       return $this->num_frente;
     } 
    
     function setIdMina($id_mina){
       $this->id_mina = $id_mina;
     } 
     function getIdMina(){
       return $this->id_mina;
     } 
 function setNombre($id_mina){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 
    
}

?> 
