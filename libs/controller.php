<?php
/* 
        clase padre para heredar a los controladores  
*/

class controller{


    function __construct()
    {
        $this->view = new view();
    }
    
    //cargamos el modelo dependiendo el controlador
    function loadModel($model){
         $url = 'models/'. $model . 'Model.php';

         if(file_exists($url)){
               require_once $url;

               $modelName = $model.'Model';
               $this->model = new $modelName();
         }
    }

    //funcion para validar los parametros que seran enviados a la base de datos por post
    function existPOST($params){
         foreach($params as $param ){
             if(!isset($_POST[$param])){
                  error_log('controller::existPOST -> parametros vacios o inexistentes en post'. $param);
                  return false;
             }
         }
    }

    //funcion para validar los parametros que seran enviados a la base de datos por GET
    function existGET($params){
        foreach($params as $param ){
            if(!isset($_GET[$param])){
                 error_log('controller::existGET -> parametros vacios o inexistentes en post'. $param);
                 return false;
            }
        }
        return true;
   }
     
   //funcion que nos redirige a una pagina. se utiliza para enviar parametros en la URL
   function redirect($route, $datos){
        $data = [];
        $params = '';

        foreach($datos as $key => $value){
             array_push($data, $key. '=' . $value);
        }
         
        $params = join('&', $data);
        //?nombre=Andrea&apellido=zapata 
        if($params != ''){
             $params = '?' . $params;
        }

        header('localhost: '. constant(URL). $route . $params);
   }
   
}