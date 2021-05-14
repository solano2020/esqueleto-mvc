<?php
//clase para administrar los mensajes de exito

class successmessages{
     
     
     //definimos los mensajes de error cada uno con un codigo unico

     //codigo para usurio existente
     const SUCCESS_ADMIN_LOGINUSER_EXISTS = "a25c83c768e5441c4a75c1ad0b0b460c";
     private $successlist = [];

    public function __construct()
    {
        $this->successlist = [
            successmessages::SUCCESS_ADMIN_LOGINUSER_EXISTS => 'Usuario logeado'

         ];
    }
    
    //funcion para obtener el texto segun el hash
    public function get($hash){
        return $this->successlist[$hash];
   }

   //funcion para comprobar que la clave hash en successlist existe
   public function existkey($key){
       if(array_key_exists($key, $this->successlist)){
               return true;
       }else{
           return false;
       }
   }

}