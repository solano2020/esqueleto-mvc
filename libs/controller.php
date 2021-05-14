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

   
}