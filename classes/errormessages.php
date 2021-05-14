<?php
//clase para administrar los mensajes de error

class errormessages{

     //definimos los mensajes de error cada uno con un codigo unico

     //codigo para usurio no existente
    const ERROR_ADMIN_LOGINUSER_NOTEXISTS = "1b09f4479ff4f7c6386d61f2d38826c3";
    private $errorlist = [];
    
    public function __construct()
    {
         $this->errorlist = [
            errormessages::ERROR_ADMIN_LOGINUSER_NOTEXISTS => 'El usuario no existe'

         ];    
    }
    
    
    //funcion para obtener el texto segun el hash
    public function get($hash){
         return $this->errorlist[$hash];
    }

    //funcion para comprobar que la clave hash en errorlist existe
    public function existkey($key){
        if(array_key_exists($key, $this->errorlist)){
                return true;
        }else{
            return false;
        }
    }
}