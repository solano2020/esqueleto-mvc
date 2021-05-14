<?php

class view{


    function __construct(){

    }

    //renderiza las vistas | nombre de la vista / data, informacion que se pasa desde el controlador
    public function render($nombre, $data = []){
       $this->d = $data; 
       require 'views/'. $nombre. '.php';
    }

    public function loadModel(){}

    
   
}