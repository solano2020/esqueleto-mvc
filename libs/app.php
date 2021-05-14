<?php


class app
{

    function __construct()
    {
        //obtenemos el controlador y el metodo
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, "/");
        $url = explode('/', $url);

        if (empty($url[0])) {
            error_log('app::construct-> no hay controlador especificado');
            //cargamos un controlador y metodo por defecto si no hay controlador
            $archivoController = 'controllers/loginController.php';
            require_once $archivoController;
            $controller = new loginController();
          //$controller->loadModel('login');
            $controller->render();
            return false;
        }

        $archivoController = 'controllers/' . $url[0] . '.php';

        if (file_exists($archivoController)) {
            require_once $archivoController;
            $controller = new $url[0];
            // $controller->loadModel();
            //comprobamos si hay un metodo 
            if (isset($url[1])) {
                if (method_exists($controller, $url[1])) {
                    if (isset($url[2])) {
                       //numero de parametrsos. le restamos dos, el controlador y el metodo
                       $nparam = count($url) - 2;
                       
                       //arreglo de parametros que se envian metodo
                       $params = [];
                       for ($i=0; $i < $nparam; $i++) { 
                           array_push($params, $url[$i] + 2);
                       }
                       //cargamos el controlador y los parametros
                       $controller->{$url[1]}($params);

                    } else {
                       //si no tiene parametros carga el metodo solo
                       $controller->{$url[1]}();
                    }
                } else {
                    //error no existe el metodo
                }
            } else {
                //cargamos metodo por defecto
                $controller->render();
            }
        } else {
            //error, no existe el archivo
        }
    }
}
