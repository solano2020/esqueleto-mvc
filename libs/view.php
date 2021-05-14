<?php

class view{


    function __construct(){

    }

    //renderiza las vistas | nombre de nuestro archivo de vista / data, informacion de los parametros
    public function render($nombre, $data = []){
       $this->d = $data; 
       //prepara mensaje mensajes de error o succes 
       $this->handleMessages();

       require 'views/'. $nombre. '.php';
    }

   //Funcion para comprobar el tipo de mensaje error/ succcess
    private function handleMessages(){
         //si estan los dos hay un error
          if(isset($_GET['success']) && isset($_GET['error'])){
              //error
          }else if(isset($_GET['success'])){
              $this->handleSuccess();
          }else if(isset($_GET['error'])){
             $this->handleError();
          }
    }

    //se trae el mensaje de success segun corresponda el metodo hash para success
    private function handleSuccess(){
        $hash = $_GET['success'];
        $success = new successmessages();

        if($success->existkey($hash)){
           $this->d['success'] = $success->get($hash); 
        }
    }
    
    //se trae el error segun corresponda el metodo hash para error
    private function handleError(){
        $hash = $_GET['error'];
        $error = new errormessages();

        if($error->existkey($hash)){
           $this->d['error'] = $error->get($hash); 
        }
    }

    //funcion para mostrar los mensajes de error o success
    public function showMessages(){
        $this->showErrors();
        $this->showSuccess();
    }

    //funcion para comprobar la key error donde del arreglo d 
    public function showErrors(){
         if(array_key_exists('error', $this->d)){
             echo '<div class="error">'.$this->d['error'].'</div>';
         }
    }
    
    //funcion para comprobar la key success donde del arreglo d 
    public function showSuccess(){
        if(array_key_exists('success', $this->d)){
            echo '<div class="success">'.$this->d['success'].'</div>';
        }

    }

   
}